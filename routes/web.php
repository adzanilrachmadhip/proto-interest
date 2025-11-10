<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/faqs', function () {
    return view('pages.faqs');
})->name('faqs');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/testimonials', function () {
    return view('pages.testimonials');
})->name('testimonials');

Route::prefix('pages')->name('pages.')->group(function () {
    Route::get('/service-details', function () {
        return view('pages.service-single');
    })->name('service.single');

    Route::get('/portfolio-details', function () {
        return view('pages.portfolio-single');
    })->name('portfolio.single');

    Route::get('/team-details', function () {
        return view('pages.team-single');
    })->name('team.single');
});

// Anda mungkin perlu memperbarui logika 'active' di header.blade.php
// menjadi: request()->routeIs('pages.*') atau sejenisnya.

// Rute untuk 404
Route::fallback(function () {
    return view('pages.404'); // Pastikan Anda membuat pages/404.blade.php
});
