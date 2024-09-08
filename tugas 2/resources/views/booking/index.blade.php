@extends('layout.template')


@section('title', 'Booking')

@section('content')
      
        
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('booking') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Check In</th>
                <th class="col-md-4">Check Out</th>
                <th class="col-md-2">Tanggal</th>
                <th class="col-md-2">Harga</th>
                <th class="col-md-2">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>tanggal</td>
                <td>tanggal</td>
                <td>booking tgl</td>
                <td>harga</td>
                <td>statsus</td>
                <td>
                    <a href='' class="btn btn-warning btn-sm mb-2">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghaspus data?')" action="" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
        
        </tbody>
    </table>
   
</div>

               
        </div>
          <!-- AKHIR DATA -->
@endsection