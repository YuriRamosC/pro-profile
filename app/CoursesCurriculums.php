<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoursesCurriculums extends Model
{
    protected $fillable = ['id_curriculums', 'id_formations', 'duration', 'finishedAt'];
}
