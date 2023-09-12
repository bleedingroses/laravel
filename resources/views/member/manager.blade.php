@extends('layouts.main')

@section('container')
    <h1 class="text-center mb-4">Data Manager</h1><br><br>
    <div class="container">
    <table class="table table-hover">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Holding</th>
        </tr>
        <tr>
            <td> 1 </td>
            <td>Mohammad Hasanudin</td>
            <td>hasan.twd09@gmail.com</td>
            <td>
                <a href="/category/6/profile">General Affair</a> |
                <a href="/category/7/profile">Perlengkapan Malang</a> |
                <a href="/category/8/profile">Kiyosi Malang</a> |
                <a href="/category/9/profile">Divisi Surabaya</a>
            </td>
        </tr>
        <tr>
            <td> 2 </td>
            <td>Aditya Januar Rachman</td>
            <td>adityajanuar31@gmail.com</td>
            <td>
                <a href="/category/10/profile">Supporting Paniai</a> |
            </td>
        </tr>
    </table>

@endsection