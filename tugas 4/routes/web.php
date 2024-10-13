<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenjualController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSimpan')->name('register.simpan');

    Route::get('login','login')->name('login');
    Route::post('login','loginAksi')->name('login.aksi');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
    
    Route::controller(BarangController::class)->prefix('barang')->group(function(){
        Route::get('', 'index')->name('barang');
        Route::get('tambah', 'tambah')->name('barang.tambah');
        Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('barang.edit');
        Route::post('edit/{id}', 'update')->name('barang.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('barang.hapus');
    });
    
    Route::get('/barang/cari', [BarangController::class, 'search'])->name('barang.search');

    Route::controller(KategoriController::class)->prefix('kategori')->group(function(){
        Route::get('', 'index')->name('kategori');
        Route::get('tambah', 'tambah')->name('kategori.tambah');
        Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('kategori.edit');
        Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');

    });

    Route::controller(PenjualController::class)->prefix('penjual') ->group(function(){
        Route::get('','index')->name('penjual');
        Route::get('tambah','tambah')->name('penjual.tambah');
        Route::get('tambah','simpan')->name('penjual.tambah.simpan');
        Route::get('edit/{id}','edit')->name('penjual.edit');
        Route::get('edit/{id}','update')->name('penjual.tambah.edit');
        Route::get('hapus/{id}','hapus')->name('penjual.tambah.edit');
    });
});