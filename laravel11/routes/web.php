<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/fadil', function () {
    return view('fadil');
});

Route::get('/about', function () {
    return view('about', ['nama' =>'Andika Dwi Setya Nugraha']);
});


//buat 2 rute baru
//