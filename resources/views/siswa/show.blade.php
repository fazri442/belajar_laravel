@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Siswa</div>

                    <div class="card-body">
                        <form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="number" class="form-control" value="{{ $siswa->nis }}" name="nis"
                                    disabled>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" value="{{ $siswa->nama }}" name="nama"
                                    disabled>
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
                                <label>Kelas</label>
                                <select class="form-control" name="kelas" disabled>
                                    <option value="XI RPL 1">XI RPL 1</option>
                                    <option value="XI RPL 2">XI RPL 2</option>
                                    <option value="XI RPL 3">XI RPL 3</option>
                                </select>
                            </div>
                            <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
