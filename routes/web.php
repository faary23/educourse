<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::get('/online', function () {
    return view('onlinepage');
})->name('online');

Route::get('/offline', function () {
    return view('offlinepage');
})->name('offline');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');