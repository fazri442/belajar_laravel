<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Membuat Harus Login
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Membuat Hanya Untuk perpindahan dan tampilkan halaman
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Membuat Perpindahan Halaman
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Logika dari create atau porses
    public function store(Request $request)
    {
        $siswa = new Siswa;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->kelas = $request->kelas;
        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Data berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // memindahkan halaman dengan id tertentu
    public function show($id)
    {
        $siswa = Siswa::FindorFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //hanya untuk perpindahan halaman
    public function edit($id)
    {
        $siswa = Siswa::FindorFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //logika dari edit
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findorfail($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->kelas = $request->kelas;
        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Data berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //menghapus data dan memunculkan nontifikasi
    public function destroy($id)
    {
        $siswa = Siswa::findorfail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data Berhasil Dihapus');
    }
}
