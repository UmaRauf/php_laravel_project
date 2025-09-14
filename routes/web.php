<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Laravel's default page
});

// Your custom page
Route::get('/hello', function () {
    return view('hello');
});
