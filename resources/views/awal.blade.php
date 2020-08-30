@extends('layout/main')

@section('title', 'Selamat datang')

@section('container')
    <div class="container text-center" style="margin-top: 25%; ">
        Selamat datang di tugas CRUD data siswa
        <br>
        Bayu Kartiko | XII RPL 2
        <br>
        <a href="{{ url('/tampil') }}" class="btn btn-success">Mulai</a>
    </div>
@endsection
