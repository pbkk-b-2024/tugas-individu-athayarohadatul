<?php

use App\Http\Controllers\Pertemuan2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan1Controller;
use App\Http\Controllers\Pertemuan3Controller;
use App\Http\Middleware\AuthMiddleware;

// Basic Route
Route::get('/', function() {
    return view('layout.base');
})->name('home');

Route::get('/basic', function () {
    return view('pertemuan1.basic');
})->name('basic');

// Named Routes
Route::get('/named', function () {
    return view('pertemuan1.named');
})->name('named');

// Group Routes
Route::prefix('group')->group(function () {
    Route::get('/', function () {
        return view('pertemuan1.group');
    })->name('group');

    Route::get('/page1', function () {
        return view('pertemuan1.page1');
    })->name('page1');

    Route::get('/page2', function () {
        return view('pertemuan1.page2');
    })->name('page2');

    Route::get('/page3', function () {
        return view('pertemuan1.page3');
    })->name('page3');
});

//Fallback Routes
Route::fallback(function () {
    return response()->view('pertemuan1.fallback', [], 404);
});

// Route Group with Prefix `/pertemuan1`
Route::prefix('/pertemuan1')->group(function() {
    // Named Routes and Route Matching GET and POST
    Route::match(['get', 'post'], '/genap-ganjil', [Pertemuan1Controller::class, 'genapGanjil'])->name('genap-ganjil');
    
    // Named Routes
    Route::get('/fibonacci', [Pertemuan1Controller::class, 'fibonacci'])->name('fibonacci');
    Route::get('/prima', [Pertemuan1Controller::class, 'bilanganPrima'])->name('bilangan-prima');
    Route::get('/param', fn() => view('pertemuan1.param'))->name('param');
   

    // Route Parameters
    Route::get('/param/{param1}', [Pertemuan1Controller::class, 'param1'])->name('param1');
    Route::get('/param/{param1}/{param2}', [Pertemuan1Controller::class, 'param2'])->name('param2');
});

