<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about-the-game', function () {
    return view('about-the-game');
})->name('about-the-game');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/enemies', function () {
    return view('enemies');
})->name('enemies');

Route::get('/bat', function () {
    return view('bat');
})->name('bat');

Route::get('/goblin', function () {
    return view('goblin');
})->name('goblin');

Route::get('/slime', function () {
    return view('slime');
})->name('slime');

Route::get('/ocrama', function () {
    return view('ocrama');
})->name('ocrama');

Route::get('/vexy', function () {
    return view('vexy');
})->name('vexy');