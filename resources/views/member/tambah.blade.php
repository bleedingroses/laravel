@extends('layouts.main')

@section('container')

    <h1 class="text-center mb-4">Tambah Data Karyawan</h1>

    <form action="/member/simpan" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 w-50">
            <label for="divisi" class="form-label"><h5>Divisi</h5></label>
            <select name="divisi" id="divisi" class="form-select form-select-lg mb-3">
                <option selected>Masukkan Nama Divisi</option>
                <option value="General Affair">General Affair</option>
                <option value="Perlengkapan Malang">Perlengkapan Malang</option>
                <option value="Kiyosi Malang">Kiyosi Malang</option>
                <option value="Divisi Surabaya">Divisi Surabaya</option>
                <option value="Supporting Paniai">Supporting Paniai</option>
            </select><br>
        </div>
        <div class="mb-3 w-50">
            <label for="nama" class="form-label"><h5>Nama Lengkap</h5></label>
            <input type="text" class="form-control" name="nama" id="nama" required>
        </div><br>
        <div class="mb-3 w-50">
            <label for="email" class="form-label"><h5>Alamat Email</h5></label>
            <input type="text" class="form-control" name="email" id="email" required>
        </div><br>
        <div class="mb-3 w-50">
            <label for="jurusan" class="form-label"><h5>Jurusan</h5></label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" required>
        </div><br>
        <div class="mb-3 w-50">
            <label for="pendidikan" class="form-label"><h5>Pendidikan</h5></label>
            <select name="pendidikan" id="pendidikan" class="form-select form-select-lg mb-3">
                <option value="">Masukkan Pendidikan Terakhir</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="Strata-1">Strata-1</option>
            </select><br>
        </div>
        <div class="mb-3 w-50">
            <label for="gambar" class="form-label"><h5>Upload Gambar</h5></label>
            <input type="file" class="form-control" name="gambar" id="gambar" required>
        </div><br>
          <button type="submit" name="submit" class="btn btn-primary">Tambah Data!</button>
        </form>

@endsection