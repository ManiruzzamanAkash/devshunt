<?php

namespace App\Notifications;

use App\Models\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class SubscriberCourseCreateEmailNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a notification instance.
     *
     * @param  Course $course
     * @return void
     */
    public function __construct(private Course $course)
    {
        $this->course = $course;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject(Lang::get('New course uploaded. Read now - ' . $this->course->title . ''))
        ->view(
            'emails.subscriber-course-created',
            ['course' => $this->course]
        );
    }
}
