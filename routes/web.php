<?php

use Illuminate\Support\Facades\Route;



Route::get('/phpinfo', function () {
    return view('info');
});

Route::get('/', 'App\Http\Controllers\MainController@index');

Route::get('/cv', 'App\Http\Controllers\CvController@index');

Route::get('/kontakty', 'App\Http\Controllers\ContactsController@index');


