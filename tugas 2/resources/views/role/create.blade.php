@extends('layout.template')


@section('title', 'Tambahkan User')

@section('content')


 <!-- START FORM -->
 <form action='{{ url('crud-role') }}' method='post'>
    @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('crud-role')}}' class="btn btn-secondary"><<  kembali</a>    
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{Session::get('nama')}}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='email' value="{{Session::get('email')}}" id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="phone" class="col-sm-2 col-form-label">Roles</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='roles' value="{{Session::get('roles')}}" id="roles">
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