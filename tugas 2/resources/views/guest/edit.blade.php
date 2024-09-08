@extends('layout.template')


@section('title', 'Guest')

@section('content')


 <!-- START FORM -->
 <form action='{{ url('guest/.$data->ktp') }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
          <a href='{{ url('guest')}}' class="btn btn-secondary"><<  kembali</a>
        <div class="mb-3 row">
                <label for="ktp" class="col-sm-2 col-form-label">KTP</label>
                <div class="col-sm-10">
                   {{ $data->ktp }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='email' value="{{ $data->email }}" id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="phone" class="col-sm-2 col-form-label">No. HP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='phone' value="{{ $data->phone }}" id="phone">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
@endsection