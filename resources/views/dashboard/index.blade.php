
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $title }}</h2>

    <p>{{ $description }}</p>

    <div class="cards">
        <div class="card">
            <h3>Jumlah Buku</h3>
            <p>{{ $bookCount }} buku</p>
        </div>

        <div class="card">
            <h3>Jumlah Member</h3>
            <p>{{ $memberCount }} member</p>
        </div>

        <div class="card">
            <h3>Jumlah Kategori</h3>
            <p>{{ $categoryCount }} kategori</p>
        </div>
    </div>
@endsection
