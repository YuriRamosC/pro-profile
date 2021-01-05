<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{
    protected $fillable = [
        'title', 'level', 'yearConclusion'
    ];
}
