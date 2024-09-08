@extends('layout.base')

@section('content')
    <h1>Group Routing</h1>
    <ul>
        <li><a href="{{ route('page1') }}" class="btn btn-primary mb-2">Page 1</a></li>
        <li><a href="{{ route('page2') }}" class="btn btn-primary mb-2">Page 2</a></li>
        <li><a href="{{ route('page3') }}" class="btn btn-primary ">Page 3</a></li>
    </ul>
    <a href="{{ url('/pertemuan1') }}" class="btn btn-secondary">Kembali ke Home</a>
@endsection