<?php

use Illuminate\Support\Facades\Route;
use App\Curriculums;
use App\Http\Controllers\CurriculumsController;

Route::get('/','CurriculumsController@index');

Route::get('/show/{id}', 'CurriculumsController@show');
Route::post('/create', 'CurriculumsController@create');
Route::post('/update/{id}', 'CurriculumsController@update');
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});