<?php

namespace App\Http\Controllers;

use App\Models\guest;
use App\Http\Controllers\katakunci;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class guestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = guest::where('ktp', 'like', "%$katakunci%")
                    ->orWhere('nama', 'like', "%$katakunci%")
                    ->orWhere('email', 'like', "%$katakunci%")
                    ->orWhere('phone', 'like', "%$katakunci%")
                    ->paginate($jumlahbaris);
        }else{
            $data = guest::orderBy('ktp', 'desc')->paginate($jumlahbaris);
        }
        return view('guest.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('ktp', $request->ktp);
        Session::flash('nama', $request->nama);
        Session::flash('email', $request->email);
        Session::flash('phone', $request->phone);

        $request->validate([
            'ktp'=>'required|numeric|unique:guest,ktp',
            'nama'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ],[
            'ktp.required'=>'KTP wajib diisi',
            'ktp.numeric'=>'KTP wajib dalam angka',
            'nama.required'=>'Nama wajib diisi',
            'email.required'=>'Email wajib diisi',
            'phone.required'=>'No. HP wajib diisi',
        ]);
        $data = [
            'ktp'=>$request->ktp,
            'nama'=>$request->nama,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ];
        guest::create($data);
        return redirect()->to('guest')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = guest::where('ktp',$id)->first();
        return view('guest.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ],[
            'nama.required'=>'Nama wajib diisi',
            'email.required'=>'Email wajib diisi',
            'phone.required'=>'No. HP wajib diisi',
        ]);
        $data = [
            'nama'=>$request->nama,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ];
        guest::where('ktp', $id)->update($data);
        return redirect()->to('guest')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      guest::where('ktp',$id)->delete();
      return redirect()->to('guest')->with('success', 'Berhasil mealkukan delete data');
    }
}
