@extends('layouts.main')

@section('container')

<h1 class="text-center mb-4">Ubah Data Karyawan</h1>

<form action="/member/{{$member->id}}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="mb-3 w-50">
            <label for="divisi" class="form-label"><h5>Divisi</h5></label>
            <select name="divisi" id="divisi" class="form-select form-select-lg mb-3">
                <option selected>{{ $member->divisi }}</option>
                <option value="General Affair">General Affair</option>
                <option value="Perlengkapan Malang">Perlengkapan Malang</option>
                <option value="Kiyosi Malang">Kiyosi Malang</option>
                <option value="Divisi Surabaya">Divisi Surabaya</option>
                <option value="Supporting Paniai">Supporting Paniai</option>
            </select><br>
        </div>
        <div class="mb-3 w-50">
            <label for="nama" class="form-label"><h5>Nama Lengkap</h5></label>
            <input type="text" class="form-control" name="nama" id="nama" required value="{{ $member->nama }}">
        </div><br>
        <div class="mb-3 w-50">
            <label for="email" class="form-label"><h5>Alamat Email</h5></label>
            <input type="text" class="form-control" name="email" id="email" required value="{{ $member->email }}">
        </div><br>
        <div class="mb-3 w-50">
            <label for="jurusan" class="form-label"><h5>Jurusan</h5></label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" required value="{{ $member->jurusan }}">
        </div><br>
        <div class="mb-3 w-50">
            <label for="pendidikan" class="form-label"><h5>Pendidikan</h5></label>
            <select name="pendidikan" id="pendidikan" class="form-select form-select-lg mb-3">
                <option selected>{{ $member->pendidikan }}</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="Strata-1">Strata-1</option>
            </select><br>
        </div>
        <div class="mb-3 w-50">
            <label for="gambar" class="form-label"><h5>Upload Gambar</h5></label><br><br>
            <img src="{{ asset('img/'.$member->gambar) }}" width="300" alt=""><br><br>
            <input type="file" class="form-control" name="gambar" id="gambar">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Ubah Data!</button>
    </form>

@endsection