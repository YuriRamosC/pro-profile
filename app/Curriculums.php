<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculums extends Model
{
    protected $fillable = [
        'address', 'phone', 'cellphone', 'id_user'
    ];


    public function formations() {
        //n - n
        return $this->belongsToMany(Formations::class, 'curriculums_formations', 'id_curriculums', 'id_formations');
    }

    public function knowledges() {
        return $this->belongsToMany(Knowledges::class, 'curriculums_knowledges', 'id_curriculums', 'id_knowledges');
    }
    public function courses() {
        return $this->belongsToMany(Courses::class, 'courses_curriculums', 'id_curriculums', 'id_courses');
    }

    public function languages() {
        return $this->belongsToMany(Languages::class, 'curriculums_languages', 'id_curriculums', 'id_languages');
    }
}
