<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCourseModel extends Model
{
    use HasFactory;
    protected $table='training_courses';
    protected $fillable=[
        'title',
        'name',
        'slug',
        'describe',
        'src',
        'why_choose1',
        'why_choose2',
        'why_choose3',
        'age',
        'education',
        'foreign_language',
        'health',
        'content',
        'display',
        'type'
    ];
}
