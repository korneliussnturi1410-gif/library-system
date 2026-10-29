<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Andi',
            'Budi',
            'Citra',
            'Doni',
            'Rina'
        ];

        return view('members.index', compact('members'));
    }
}