@extends('layout.base')

@section('content')
    <h1>Named Routing</h1>
    <p>
        Route::get('/named', function () {
            return view('pertemuan1.named');
        })->name('nama');
    </p>
    <a href="{{ url('/pertemuan1') }}" class="btn btn-primary">Kembali ke Home</a>
@endsection