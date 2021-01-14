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
        return $this->belongsToMany('App\Formations', 'formations_has_curriculums', 'curriculums_id', 'formations_id');
    }

    public function languages() {
        return $this->belongTomany('App\Languages', 'languages_has_curriculums', 'curriculums_id', 'languages_idAp')
        ->withPivot('level');
    }
}
