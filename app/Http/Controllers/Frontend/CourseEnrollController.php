<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\CourseRepository;
use App\Repositories\CoursePaymentRepository;
use App\Repositories\CourseEnrollRepository;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CourseEnrollRequest;
use Illuminate\Http\RedirectResponse;
use Auth;

class CourseEnrollController extends Controller
{
    public function __construct(
        private CourseRepository $course,
        private CourseEnrollRepository $enroll,
        private CoursePaymentRepository $payment,
    )
    {
        $this->course = $course;
        $this->enroll = $enroll;
        $this->payment = $payment;
    }


    public function store(CourseEnrollRequest $request, string $slug): RedirectResponse
    {
        $course = $this->course->showBySlug($slug);
        $errorMessage = 'Enroll does not processed successfully, please try again !';

        if (empty($course)) {
            abort(404, 'Course does not found !');
        }

        try {
            // Check if already enrolled.
            if ($this->enroll->checkUserAlreadyEnrolled(Auth::id(), $course->id)) {
                $errorMessage = 'You have already enrolled for this course !';
                throw new Exception($errorMessage, 1);
            }

            // Enroll create.
            $enroll = $this->enroll->create([
                'course_id' => $course->id,
                'user_id' => Auth::id(),
            ]);


            // Payment create.
            $payment = $this->payment->create([
                'enroll_id' => $enroll->id,
                'course_id' => $course->id,
                'user_id' => Auth::id(),
                'status' => 'paid', // 'due',
                'note' => $request->note,
                'details' => 'Stripe Response ID::121'
            ]);


            // Enroll update with status = 1
            if ($payment->status === 'paid') {
                $this->enroll->markAsActive($enroll);
            }

            session()->flash('success', 'Course enrolled successfully.');

        } catch (Exception $exception) {
            session()->flash('error', $errorMessage);
        }


        return back();
    }
}
