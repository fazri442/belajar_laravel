@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Buat Data Siswa</div>

                    <div class="card-body">
                        <form action="{{ route('ppdb.update', $ppdb->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" value="{{ $ppdb->nama_lengkap }}"
                                    name="nama_lengkap">
                            </div>
                            <div class="form-group">
                                <label>Jenis kelamin</label><br>
                                <input type="radio" class="from-chek-input" name="jenis_kelamin" value="Laki-laki">
                                Laki-laki
                                <input type="radio" class="from-chek-input" name="jenis_kelamin" value="Perempuan">
                                Perempuan
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-select" aria-label="Default select example" name="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" value="{{ $ppdb->alamat }}" class="form-control" name="alamat">
                            </div>
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <input type="numbering" value="{{ $ppdb->telepon }}" class="form-control" name="telepon">
                            </div>
                            <div class="form-group">
                                <label>Asal Sekolah</label>
                                <input type="text" value="{{ $ppdb->asal_sekolah }}" class="form-control"
                                    name="asal_sekolah">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
