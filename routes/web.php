<?php

use Illuminate\Support\Facades\Route;

// Default redirect to English
Route::get('/', function () {
    return redirect('/en');
});

// Localized routes
Route::prefix('{locale}')->whereIn('locale', ['en', 'fr', 'es', 'de', 'ru', 'ar'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home.index');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
