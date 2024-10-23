<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        return view('coba');
    }

    public function halaman2()
    {
        return view('coba2');
    }

    public function halaman3()
    {
        $students = Student::all();
        return view('coba3', compact('students'));
    }
}
