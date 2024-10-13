<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\kategori; 
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = barang::get();

        return view('barang.index', ['barang'=> $barang]);
    }

    public function tambah()
	{
		$kategori = kategori::get();
		return view('barang.form', ['kategori'=> $kategori]);
	}

    public function simpan(Request $request)
	{
		$barang = [
			'kode_barang' => $request->kode_barang,
			'nama_barang' => $request->nama_barang,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
			'jumlah' => $request->jumlah,
		];

		Barang::create($barang);

		return redirect()->route('barang');
	}

    public function edit($id)
	{
		$barang = barang::find($id)->first();
		$kategori = kategori::get();

		return view('barang.form', ['barang' => $barang, 'kategori'=> $kategori]);
	}

    public function update($id, Request $request)
	{
		$barang = [
			'kode_barang' => $request->kode_barang,
			'nama_barang' => $request->nama_barang,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
			'jumlah' => $request->jumlah,
		];

		Barang::find($id)->update($barang);

		return redirect()->route('barang');
	}

    public function hapus($id)
	{
		Barang::find($id)->delete();

		return redirect()->route('barang');
	}
}
