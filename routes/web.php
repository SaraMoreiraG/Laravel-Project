<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Define a group of routes with localized URLs
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    // Home route
    Route::get('/', function () {
        return view('home');
    })->name('home');

    // Books resource routes
    Route::resource('books', BookController::class);

    // Contact routes
    Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
    Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
});
