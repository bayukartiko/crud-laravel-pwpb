<?php

namespace App\Http\Controllers;

use App\CRUD_model;
use Illuminate\Http\Request;

class CRUD_control extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = CRUD_model::all();
        return view('CRUD_siswa/dataSiswa', ['mahasiswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD_siswa/tambahSiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data_siswa = new CRUD_model;
        // $data_siswa->no_ppdb = $request->ppdb;
        // $data_siswa->nama = $request->nama;
        // $data_siswa->asal_sekolah = $request->sekolah;
        // $data_siswa->jurusan1 = $request->jurusan1;
        // $data_siswa->jurusan2 = $request->jurusan2;
        // $data_siswa->alamat = $request->alamat;
        // $data_siswa->no_hp = $request->nohp;
        // $data_siswa->email = $request->email;
        // $data_siswa->save();

        // CRUD_model::create([
        //     'no_ppdb' => $request->ppdb,
        //     'nama' => $request->nama,
        //     'asal_sekolah' => $request->sekolah,
        //     'jurusan1' => $request->jurusan1,
        //     'jurusan2' => $request->jurusan2,
        //     'alamat' => $request->alamat,
        //     'no_hp' => $request->nohp,
        //     'email' => $request->email
        // ]);

        $request->validate([
            'no_ppdb' => 'required',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'jurusan1' => 'required',
            'jurusan2' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required'
        ]);

        CRUD_model::create($request->all());

        return redirect('/tampil')->with('notif', 'Data calon siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CRUD_model  $cRUD_model
     * @return \Illuminate\Http\Response
     */
    public function show(CRUD_model $cRUD_model)
    {
        // return $cRUD_model;
        return view('CRUD_siswa/detailSiswa', compact('cRUD_model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CRUD_model  $cRUD_model
     * @return \Illuminate\Http\Response
     */
    public function edit(CRUD_model $cRUD_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CRUD_model  $cRUD_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CRUD_model $cRUD_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CRUD_model  $cRUD_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(CRUD_model $cRUD_model)
    {
        //
    }
}
