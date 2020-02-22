<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //untuk memanggil data di tabel siswas
        return Siswa::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk memasukkan data ke table
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //untuk simpan data siswa
         $siswa = new Siswa;
         $siswa->name = $request->name;
         $siswa->alamat = $request->alamat;
         $siswa->save();
         return "Data Berhasil Disimpan";
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //fungsi untuk update data
        $name = $request->name;
        $alamat = $request->alamat;

        $siswa = Siswa::find($id);
        $siswa->name = $name;
        $siswa->alamat = $alamat;
        $siswa->save();

        return "Data Berhasil update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi untuk delete
        $siswa = Siswa::find($id);
        $siswa->delete();
        return "Data Berhasil di hapus";
    }
}
