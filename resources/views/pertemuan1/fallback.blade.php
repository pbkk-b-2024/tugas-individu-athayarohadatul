@extends('layout.base')

@section('content')
    <h1>Fallback Routes</h1>
    <p> Page Not Found</p>
    <p> 404 Error </p>
    <a href="{{ route('group') }}" class="btn btn-secondary">Kembali</a>
@endsection