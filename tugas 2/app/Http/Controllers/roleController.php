<?php

namespace App\Http\Controllers;
use App\Models\Role; // Correct import for the Role model
use Illuminate\Http\Request;
use App\Http\Controllers\katakunci;
use Illuminate\Support\Facades\Session;

class roleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('role.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('email', $request->email);
        Session::flash('roles', $request->roles);

        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'roles'=>'required',
        ],[
            'nama.required'=>'Nama wajib diisi',
            'email.required'=>'Email wajib diisi',
            'roles.required'=>'Roles wajib diisi',
        ]);
        $data = [
            'nama'=>$request->nama,
            'email'=>$request->email,
            'roles'=>$request->roles,
        ];
        guest::create($data);
        return redirect()->to('crud-role')->with('success', 'Berhasil menambahkan data');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
