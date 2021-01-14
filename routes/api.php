<?php

use Illuminate\Support\Facades\Route;
use App\Curriculums;
use App\Http\Controllers\api\CurriculumController;

Route::get('curriculos','CurriculumsController@index');