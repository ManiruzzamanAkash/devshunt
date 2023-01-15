<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\CourseRepository;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseLessonController extends Controller
{
    private string $orderBy;
    private string $order;

    public function __construct(
        private CategoryRepository $category,
        private CourseRepository $course,
    )
    {
        $this->category = $category;
        $this->course = $course;
        $this->orderBy = 'id';
        $this->order = 'desc';
    }

    public function index(Request $request): Renderable
    {
        try {
            if ($request->order_by) {
                $this->orderBy = $request->order_by;

                if ($request->order) {
                    $this->order = $request->order;
                }
            }

            $courses = $this->course->get([
                'order_by'        => $this->orderBy,
                'order'           => $this->order,
                'paginated'       => 20,
                'pagination_type' => 'simple',
                'search'          => $request->s,
                'min_price'       => $request->min_price,
                'max_price'       => $request->max_price,
            ]);
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }

        return view('courses.index', [
            'courses' => $courses,
            'total' => DB::table('courses')->count()
        ]);
    }

    public function show(string $slug): Renderable
    {
        $course = $this->course->showBySlug($slug);

        if (empty($course)) {
            abort(404, 'Course does not found !');
        }

        return view('courses.show', compact('course'));
    }
}
