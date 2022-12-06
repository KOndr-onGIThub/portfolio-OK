<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\MainController@index');

Route::get('/cv', 'App\Http\Controllers\CvController@index');


