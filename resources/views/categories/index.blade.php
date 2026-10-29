
@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
    <h2>Daftar Kategori Buku</h2>

    <p>Kategori buku yang tersedia di perpustakaan.</p>

    <ol>
        @foreach($categories as $category)
            <li>{{ $category }}</li>
        @endforeach
    </ol>
@endsection
