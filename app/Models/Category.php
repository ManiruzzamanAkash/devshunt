<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'priority',
        'enable_homepage',
        'description',
        'parent_id',
    ];

    public function parent_categories()
    {
        return $this->belongsToMany('parent_id', 'categories', 'id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
