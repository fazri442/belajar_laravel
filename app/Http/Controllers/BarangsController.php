<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\post;

class BarangsController extends Controller
{
    public function menampilkan()
    {
        $barang = barang::all();
        return view('tampil_barang', compact('barang'));
    }
    public function menampilkan2()
    {
        $posts = post::all();
        return view('tampil_post', compact('post'));
    }
}
