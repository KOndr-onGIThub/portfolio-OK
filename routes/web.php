<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\MainController@index');

Route::get('/cv', 'App\Http\Controllers\CvController@index');


Route::get('kontakty', 'App\Http\Controllers\ContactsController@show');
Route::post('kontakty', 'App\Http\Controllers\ContactsController@send');

Route::get('/kdeseucim', 'App\Http\Controllers\KdeSeUcimController@index');

Route::get('/projects', 'App\Http\Controllers\ProjectController@show');