<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = ['title', 'emissor'];
    public function curriculums() {
        return $this
        ->belongsToMany(Curriculums::class, 'curriculums_courses', 'id_courses', 'id_curriculums');
    }
}
