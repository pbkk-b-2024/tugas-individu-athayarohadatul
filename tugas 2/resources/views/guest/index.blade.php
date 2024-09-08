@extends('layout.template')


@section('title', 'Guest')

@section('content')
      
        
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('guest') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('guest/create')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">KTP</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Email</th>
                <th class="col-md-2">No. HP</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->ktp }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>
                    <a href='{{ url('guest/'.$item->ktp.'/edit')}}' class="btn btn-warning btn-sm mb-2">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghaspus data?')" action="{{ route('guest.destroy', $item->ktp) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
    {{ $data->links()}}
</div>

               
        </div>
          <!-- AKHIR DATA -->
@endsection