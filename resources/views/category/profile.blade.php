@extends('layouts.main')

@section('container')
    <h1 class="text-center mb-4">{{ $category->name }}</h1><br>
    <div class="container">
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Pendidikan</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($category->member as $member)
            <tr>
                <td>{{ $no++ }}</td>
                <td>
                    <img src="{{ asset('img/'.$member->gambar) }}" width="75" alt="">
                </td>
                <td>{{ $member->nama }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->jurusan }}</td>
                <td>{{ $member->pendidikan }}</td>
            </tr>
            @endforeach
        </table><br>
@endsection