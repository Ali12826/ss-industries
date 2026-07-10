<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Products / Manufacturing Page
Route::get('/products', function () {
    return view('products');
})->name('products');

// Contact Page (This is the one missing!)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Show the contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Handle the form submission (The new part)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
