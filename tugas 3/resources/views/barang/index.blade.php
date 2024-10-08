@extends('layouts.app')

@section('title', 'Data Barang')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
    </div>
    <div class="card-body">
      <div class="row mb-3">
        
			 <a href="{{route('barang.tambah')}}" class="btn btn-primary mb-3">Tambah Barang</a>
	

       <!-- Topbar Search -->
       <form action="" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>

      
  <div class="col-md-4 text-right">
    <!-- Back to Items Button -->
    <a href="" class="btn btn-secondary">Data Barang</a>
  </div>
</div>
      
      
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Kategori</th>
              <th>Sub Kategori</th>
              <th>Harga</th>
              <th>Jumlah</th>
							<th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($barang as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->kode_barang }}</td>
                <td>{{ $row->nama_barang }}</td>
                <td>{{ $row->kategori->nama }}</td>
                <td>lala</td>
                <td>{{ $row->harga }}</td>
                <td>{{ $row->jumlah }}</td>
								 <td>
                  <a href="{{route('barang.edit', $row->id)}}" class="btn btn-warning">Edit</a>
                  <a href="{{route('barang.hapus', $row->id)}}" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      
      </div>
    </div>
  </div>
@endsection