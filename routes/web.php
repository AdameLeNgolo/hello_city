<?php

use Illuminate\Support\Facades\Route;


// Route::get('/',fn() => view('pages.home'))->name('home');
Route::get('/about-us',fn() => view('pages.about'))->name('about_us');

Route::view('/','pages.home')->name('home');

