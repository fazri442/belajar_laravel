@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Siswa</div>

                    <div class="card-body">
                        <form action="{{ route('ppdb.show', $ppdb->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" value="{{ $ppdb->nama_lengkap }}"
                                    name="nama_lengkap" disabled>
                            </div>
                            <div class="form-group">
                                <label>Jenis kelamin</label><br>
                                <input type="radio" class="from-chek-input" name="jenis_kelamin" value="Laki-laki"
                                    disabled>
                                Laki-laki
                                <input type="radio" class="from-chek-input" name="jenis_kelamin" value="Perempuan"
                                    disabled>
                                Perempuan
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-select" aria-label="Default select example" name="agama" disabled>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" value="{{ $ppdb->alamat }}" class="form-control" name="alamat"
                                    disabled>
                            </div>
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <input type="numbering" value="{{ $ppdb->telepon }}" class="form-control" name="telepon"
                                    disabled>
                            </div>
                            <div class="form-group">
                                <label>Asal Sekolah</label>
                                <input type="text" value="{{ $ppdb->asal_sekolah }}" class="form-control"
                                    name="asal_sekolah" disabled>
                            </div>
                            <button <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
