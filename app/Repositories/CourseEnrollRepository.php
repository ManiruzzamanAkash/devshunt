<?php

namespace App\Repositories;

use App\Interfaces\CrudInterface;
use App\Interfaces\SlugInterface;
use Akash\LaravelUniqueSlug\Facades\UniqueSlug;
use App\Models\Enroll;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CourseEnrollRepository
{
    public function create(array $data): Enroll|null
    {
        $this->prepareDataForDatabase($data);
        return Enroll::create($data);
    }


    public function delete(int|Enroll $enroll): Enroll|null
    {
        $enroll = $this->getCourseEnrollInstance($enroll);

        if (!empty($enroll)) {
            $enroll->delete();
            return $enroll;
        }

        return null;
    }

    private function getCourseEnrollInstance(int|Enroll $enroll): Enroll|null
    {
        if (!$enroll instanceof Enroll) {
            $enroll = $this->show($enroll);
        }

        return $enroll;
    }


    public function checkUserAlreadyEnrolled(int $userId, int $courseId): bool {
        return Enroll::where('user_id', $userId)
            ->where('course_id', $courseId)
            ->limit(1)
            ->exists();
    }

    public function markAsActive(Enroll $enroll): void {
        $enroll->update([
            'status' => 1,
        ]);
    }

    private function prepareDataForDatabase(array &$data, ?Enroll $enroll = null): void
    {
        $data = [
            'course_id' => $data['course_id'],
            'user_id' => $data['user_id'],
            'status' => 0,
        ];
    }
}
