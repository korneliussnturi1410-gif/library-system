
@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h2>Detail Buku</h2>

    <p>ID Buku: {{ $id }}</p>

    <p>
        Halaman ini menampilkan ID buku berdasarkan
        parameter pada URL.
    </p>

    <a href="/books">Kembali ke Daftar Buku</a>
@endsection
