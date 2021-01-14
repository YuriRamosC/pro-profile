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
        ->belongsToMany(Curriculums::class, 'curriculums_formations', 'id_formations', 'id_curriculums');
    }
}
