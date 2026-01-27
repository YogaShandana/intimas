<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/company-profile', function () {
    return view('about.companyProfile');
});

Route::get('/about/sustainability', function () {
    return view('about.sustainability');
});

Route::get('/product', function () {
    return view('ourProduct.ourProduct');
});

Route::get('/gallery', function () {
    return view('gallery.gallery');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::post('/contact/send', [ContactController::class, 'sendMessage'])->name('contact.send');
