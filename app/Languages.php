<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected $fillable = [
        'name'
    ];
    public function curriculums() {
        return $this
        ->belongsToMany('App\Curriculums', 'curriculums_languages', 'languages_id', 'curriculums_id')
        ->withPivot('level');
    }

    
}
