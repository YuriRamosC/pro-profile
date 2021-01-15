<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowledges extends Model
{
    protected $fillable = ['title'];


    public function curriculums() {
        return $this
        ->belongsToMany(Curriculums::class, 'curriculums_knowledges', 'id_knowledges', 'id_curriculums');
    }
}
