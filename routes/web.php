<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home/montes', function () {
    return view('montes');
})->name('montes');

Route::get('/cv', function () {
    return view('cv');
})->name('cv');

Route::get('/sumbad', function () {
    return view('sumbad');
})->name('sumbad');

Route::get('/manzano', function () {
    return view('manzano');
})->name('manzano');