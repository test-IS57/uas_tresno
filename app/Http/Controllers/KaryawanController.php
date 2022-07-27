<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Jabatan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $nomor = 1;
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('karyawan.form',compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kar = new Karyawan;

        $kar->nik = $request->nik;
        $kar->nama = $request->nama;
        $kar->tempat_lahir = $request->tempat;
        $kar->tanggal_lahir = $request->tanggal;
        $kar->jabatans_id = $request->jabatan;
        $kar->alamat = $request->alamat;
        $kar->save();

        return redirect('/karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        $jabatan = Jabatan::all();
        return view('karyawan.edit',compact('karyawan','jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kar = Karyawan::find($id);

        $kar->nik = $request->nik;
        $kar->nama = $request->nama;
        $kar->tempat_lahir = $request->tempat;
        $kar->tanggal_lahir = $request->tanggal;
        $kar->jabatans_id = $request->jabatan;
        $kar->alamat = $request->alamat;
        $kar->save();

        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kar = Karyawan::find($id);
        $kar->delete();

        return redirect('/karyawan');
    }
}
