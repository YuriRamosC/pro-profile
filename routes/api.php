<?php

use Illuminate\Support\Facades\Route;
use App\Curriculums;
use App\Http\Controllers\CurriculumsController;

Route::get('/','CurriculumsController@index');

Route::get('/show/{id}', 'CurriculumsController@show');

Route::post('/edit/{id}', 'CurriculumsController@edit');