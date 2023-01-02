<?php

namespace App\Repositories;

use App\Models\Course;
use App\Models\User;
use App\Notifications\SubscriberCourseCreateEmailNotification;

class SubscriberRepository
{
    public function getSubscriberUsers()
    {
        return User::whereHas("roles", function ($q) {
            $q->where("name", "subscriber");
        })->get();
    }

    public function sendCourseCreatedEmailNotifications(Course $course): void
    {
        foreach ($this->getSubscriberUsers() as $subscriber) {
            $subscriber->notify(new SubscriberCourseCreateEmailNotification($course));
        }
    }
}
