<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function attachments()
    {
        return $this->hasMany(LessonAttachment::class);
    }
}
