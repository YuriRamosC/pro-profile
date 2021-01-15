<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobExperiences extends Model
{
    protected $fillable = ['company', 'startedAt', 'actualJob', 'endedAt', 'description', 'id_curriculum'];
}
