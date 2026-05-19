<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Future: contact form POST
// Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');