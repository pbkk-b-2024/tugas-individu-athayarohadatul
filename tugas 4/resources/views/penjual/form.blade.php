@extends('layouts.app')

@section('title', 'Form Penjual')

@section('contents')
<form action="{{ isset($penjual) ? route('penjual.tambah.update', $penjual->id) : route('penjual.tambah.simpan')}}" method="post">
  @csrf  
  <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($penjual) ? 'Form Edit penjual' : 'Form Tambah penjual' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_penjual">Kode penjual</label>
              <input type="text" class="form-control" id="kode_penjual" name="kode_penjual" value="{{ isset($penjual) ? $penjual->kode_penjual : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_penjual">Nama penjual</label>
              <input type="text" class="form-control" id="nama_penjual" name="nama_penjual" value="{{ isset($penjual) ? $penjual->nama_penjual : '' }}">
            </div>
            <div class="form-group">
              <label for="id_kategori">Kategori penjual</label>
							<select name="id_kategori" id="id_kategori" class="custom-select">
                <option value="" selected disabled hidden>--Pilih Kategori--</option>
                @foreach ($kategori as $row)
                <option value="{{ $row->id }}" {{ isset($penjual) ? ($penjual->id_kategori == $row->id ? 'selected' : '') : ''}}>{{ $row->nama }}</option>
                @endforeach
              </select>
            </div>
          
            <div class="form-group">
              <label for="harga">Harga penjual</label>
              <input type="number" class="form-control" id="harga" name="harga" value="{{ isset($penjual) ? $penjual->harga : '' }}">
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah penjual</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ isset($penjual) ? $penjual->jumlah : '' }}">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection