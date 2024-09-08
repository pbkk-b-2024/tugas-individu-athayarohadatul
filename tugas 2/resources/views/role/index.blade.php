@extends('layout.template')


@section('title', 'Users')

@section('content')
      
        
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('role') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('crud-role/create')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Nama</th>
                <th class="col-md-4">Email</th>
                <th class="col-md-2">Roles</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Athaya</td>
                <td>athayarohadatul@gmail.com</td>
                <td>admin</td>
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