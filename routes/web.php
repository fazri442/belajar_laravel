<?php
use App\Http\Controllers\BarangsController;
use App\Http\Controllers\PpdbsController;
use App\Http\Controllers\SiswasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return '<b>Selamat Datang Di Home</b>';
});
Route::get('/about', function () {
    return '<b>Selamat Datang Di Halaman About</b>';
});
Route::get('/contact', function () {
    return '<b>Selamat Datang Di Halaman Contact</b>';
});

//route parameter
route::get('/test/{nama}/{tempat_lahir}/{jenis_kelamin}/{agama}/{alamat}', function ($nama, $temlahir, $jk, $agama, $alamat) {
    return "<br>Nama: " . $nama .
        "<br>Tempat Lahir: " . $temlahir .
        "<br>Jenis Kelamin: " . $jk .
        "<br>Agama: " . $agama .
        "<br>Alamat: " . $alamat;
});

route::get('hitung/{bil1}/{bil2}', function ($bila1, $bila2) {
    return "Bilangan 1 : " . $bila1 . "<br>" .
    "Bilangan 2 : " . $bila2 . "<br>" .
    "Hasilnya : " . $hasil = $bila1 + $bila2;
});

route::get('/latihan/{nama}/{tlp}/{jen_bar}/{nam_bar}/{jumlah}/{bayar}', function ($nama_pembeli, $tlp, $jenis_barang, $nama_barang, $jumlah, $bayar) {

    if ($jenis_barang == "handphone") {
        if ($nama_barang == "poco") {
            $harga = 3000000;
        } elseif ($nama_barang == "samsung") {
            $harga = 5000000;
        } elseif ($nama_barang == "iphone") {
            $harga = 15000000;
        } else {
            $harga = 0;
        }
    } elseif ($jenis_barang == "laptop") {
        if ($nama_barang == "lenovo") {
            $harga = 4000000;
        } elseif ($nama_barang == "acer") {
            $harga = 8000000;
        } elseif ($nama_barang == "macbook") {
            $harga = 20000000;
        } else {
            $harga = 0;
        }
    } elseif ($jenis_barang == "tv") {
        if ($nama_barang == "toshiba") {
            $harga = 5000000;
        } elseif ($nama_barang == "samsung") {
            $harga = 8000000;
        } elseif ($nama_barang == "lg") {
            $harga = 10000000;
        } else {
            $harga = 0;
        }
    }
    $total = $jumlah * $harga;
    if ($total > 10000000) {
        $cashback = 500000;
    } else {
        $cashback = 0;
    }

    if ($bayar == "transfer") {
        $potongan = 50000;
    } else {
        $potongan = 0;
    }
    return "Nama: " . $nama_pembeli . "<br>" .
    "Telepon: " . $tlp . "<br>" .
    "------------------------<br>" .
    "Jenis Barang: " . $jenis_barang . "<br>" .
    "Nama Barang: " . $nama_barang . "<br>" .
    "Harga: " . $harga . "<br>" .
    "Jumlah: " . $jumlah . "<br>" .
    "------------------------<br>" .
    "Total: " . $total = $harga * $jumlah . "<br>" .
    "Cashback: " . $cashback . "<br>" .
    "Pembayaran: " . $bayar . "<br>" .
    "Potongan: " . $potongan . "<br>" .
    "------------------------<br>" .
    "Total Pembayaran: " . $totals = $total - $cashback - $potongan;
});
route::get('/siswa', function () {
    $data_siswa = ['kyendra', 'napis', 'fazri', 'adli'];

    return view('tampil', compact('data_siswa'));
});

// route::get('/post', [PostsController::class, 'tampilkan']);
// route::get('/barang1', function(){
//     barang::where('id',1)->get;
// });

route::get('/barang', [BarangsController::class, 'menampilkan']);
route::get('/post', [BarangsController::class, 'menampilkan2']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('siswa', SiswasController::class);

//tugas
Route::resource('ppdb', PpdbsController::class);
