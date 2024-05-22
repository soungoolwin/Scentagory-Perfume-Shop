<?php

use App\Http\Controllers\DecantController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/about-us', function () {
    return Inertia::render('AboutUs');
});

Route::get('/review-videos', [VideoController::class, 'index'])->name('videos.index');

Route::get('/products/decants', [DecantController::class, 'index'])->name('decants.index');
Route::get('/products/decants/{decant}', [DecantController::class, 'show'])->name('decants.show');
