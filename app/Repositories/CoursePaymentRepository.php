<?php

namespace App\Repositories;

use App\Interfaces\CrudInterface;
use App\Interfaces\SlugInterface;
use Akash\LaravelUniqueSlug\Facades\UniqueSlug;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CoursePaymentRepository
{
    public function create(array $data): Payment|null
    {
        // $this->prepareDataForDatabase($data);
        return Payment::create($data);
    }


    public function delete(int|Payment $payment): Payment|null
    {
        $payment = $this->getCoursePaymentInstance($payment);

        if (!empty($payment)) {
            $payment->delete();
            return $payment;
        }

        return null;
    }

    private function getCoursePaymentInstance(int|Payment $payment): Payment|null
    {
        if (!$payment instanceof Payment) {
            $payment = $this->show($payment);
        }

        return $payment;
    }

    private function prepareDataForDatabase(array &$data, ?Payment $payment = null): void
    {
        // 
    }
}
