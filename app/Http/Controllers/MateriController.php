<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index() {
    $row = Materi::all(); // Contoh mengambil data
    return view('nama_view_kamu', compact('row'));
}
}


