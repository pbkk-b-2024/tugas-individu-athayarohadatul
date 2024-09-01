@extends('layout.base')

@section('content')
    <h1>Basic Routing</h1>
    <p>
        Route::get('/basic', function () {
            // Route ini akan dijalankan ketika ada permintaan GET ke URL '/basic'
            return view('pertemuan1.basic'); // Mengembalikan view 'basic' dari folder 'pertemuan1'
        });
    </p>
    <a href="{{ url('/pertemuan1') }}" class="btn btn-primary">Kembali ke Home</a>
@endsection