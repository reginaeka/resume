<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/services', function () {
    return view('serivces');
});

Route::get('/contact', function () {
    return view('contact');
});

