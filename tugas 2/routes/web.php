<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\roleController;

Route::get('/', function () {
    return view('layout.template');
});


Route::resource('/guest', guestController::class);
Route::resource('/booking', bookingController::class);
Route::resource('/crud-role', roleController::class);