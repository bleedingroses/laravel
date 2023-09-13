@extends('layouts.main')

@section('container')
    <h1 class="text-center mb-4">Data Karyawan</h1><br>
    <div class="container">
    <a class="btn btn-primary" href="/member/tambah">Tambah Data Karyawan</a>
        <br><br>
        @if ($message = Session::get('success'))
            <div class="alert alert-info" role="alert">
                {{ $message }}
            </div>
        @endif
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>@sortablelink('category_id', 'Divisi')</th>
                <th>@sortablelink('nama', 'Nama')</th>
                <th>Email</th>
                <th>@sortablelink('jurusan', 'Jurusan')</th>
                <th>@sortablelink('pendidikan', 'Pendidikan')</th>
            </tr>
            @php $no = 1; @endphp
            @foreach($members as $index => $member)
            <tr>
                <td>{{ $index + $members->firstItem() }}</td>
                <td>
                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                        <a class="btn btn-outline-primary" href="/member/{{$member->id}}/ubah">Ubah</a>
                        <form action="/member/{{$member->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn btn-primary" type="submit" value="Hapus">
                        </form>
                    </div>
                </td>
                <td>
                    <img src="{{ asset('img/'.$member->gambar) }}" width="75" alt="">
                </td>
                <td><a href="/category/{{ $member->category_id }}/profile">{{ $member->divisi }}</a></td>
                <td>{{$member['nama']}}</td>
                <td>{{$member['email']}}</td>
                <td>{{$member['jurusan']}}</td>
                <td>{{$member['pendidikan']}}</td>
            </tr>
            @endforeach
        </table><br>
    {{-- {{ $members->links() }} --}}
    {!! $members->appends(Request::except('page'))->render() !!}

@endsection