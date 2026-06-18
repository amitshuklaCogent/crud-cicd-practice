<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
     return view('amit');
});

Route::get('/srishti', function () {
    return view('srishti');
});
