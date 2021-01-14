<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{
    protected $fillable = [
        'title', 'level', 'yearConclusion', 'isConcluded', 'yearStarted'
    ];

    public function curriculums() {
        return $this
        ->belongsToMany('App\Curriculums', 'formations_has_curriculums', 'formations_id', 'curriculums_id');
    }
}
