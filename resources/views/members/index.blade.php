
@extends('layouts.app')

@section('title', 'Daftar Member')

@section('content')
    <h2>Daftar Member</h2>

    <p>Berikut adalah daftar anggota perpustakaan.</p>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Member</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($members as $index => $member)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $member }}</td>
                    <td>
                        @if($member != '')
                            Aktif
                        @else
                            Tidak Aktif
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
