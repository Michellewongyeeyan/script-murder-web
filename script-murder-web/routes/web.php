<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');


Route::get('/booking', [BookingController::class, 'index'])->name('booking');