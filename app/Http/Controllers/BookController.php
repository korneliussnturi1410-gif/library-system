<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'id' => 1,
                'judul' => 'Pemrograman PHP',
                'penulis' => 'Andi',
                'tahun' => 2023
            ],
            [
                'id' => 2,
                'judul' => 'Laravel untuk Pemula',
                'penulis' => 'Budi',
                'tahun' => 2024
            ],
            [
                'id' => 3,
                'judul' => 'Basis Data',
                'penulis' => 'Sari',
                'tahun' => 2022
            ],
            [
                'id' => 4,
                'judul' => 'Algoritma dan Pemrograman',
                'penulis' => 'Doni',
                'tahun' => 2021
            ],
            [
                'id' => 5,
                'judul' => 'Pemrograman Berorientasi Objek',
                'penulis' => 'Rina',
                'tahun' => 2024
            ]
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}