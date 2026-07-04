<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    // Menampilkan halaman form untuk menambah materi baru
    public function create()
    {
        return view('guides.create'); 
    }

    // Menyimpan data dari form ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        Guide::create($request->all());

        return redirect()->route('guides.index')
                         ->with('success', 'Materi Survival Guide berhasil ditambahkan!');
    }
    
    // Fungsi index untuk melihat semua daftar materi
    public function index()
    {
        $guides = Guide::all();
        return view('guides.index', compact('guides'));
    }

    public function show($id)
{
    $guide = Guide::findOrFail($id); // Mencari materi berdasarkan ID
    return view('guides.show', compact('guide'));
}

    public function edit(Guide $guide)
{
    return view('guides.edit', compact('guide'));

}

    public function update(Request $request, Guide $guide)
{
    $guide->update($request->all());
    return redirect()->route('guides.index')->with('success', 'Materi berhasil diupdate!');
}

    public function destroy(Guide $guide)
{
    $guide->delete();
    return redirect()->route('guides.index')->with('success', 'Data berhasil dihapus');
}
}