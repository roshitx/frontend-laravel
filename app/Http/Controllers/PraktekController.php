<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraktekController extends Controller
{
    public function index()
    {
        $students = [
            ['nama' => 'Ali', 'kelas' => '10', 'jurusan' => 'Rekayasa Perangkat Lunak'],
            ['nama' => 'Budi', 'kelas' => '11', 'jurusan' => 'Desain Komunikasi Visual'],
            ['nama' => 'Cici', 'kelas' => '12', 'jurusan' => 'Desain Komunikasi Visual'],
            ['nama' => 'Dede', 'kelas' => '11', 'jurusan' => 'Rekayasa Perangkat Lunak'],
            ['nama' => 'Edi', 'kelas' => '12', 'jurusan' => 'Akuntansi Keuangan Lembaga'],
            ['nama' => 'Firdaus', 'kelas' => '10', 'jurusan' => 'Teknik Komputer dan Jaringan'],
        ];

        return view('siswa.index', compact('students'));
    }
}
