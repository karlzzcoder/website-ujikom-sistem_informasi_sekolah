<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArtikelController extends Controller
{
    // Tampil Tabel Data Artikel (Admin)
    public function index()
    {
        $artikels = Artikel::latest()->get();
        return view('admin.artikel.index', compact('artikels'));
    }

    // Form Tambah Artikel
    public function create()
    {
        return view('admin.artikel.create');
    }

    // Simpan Data Artikel Baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'penulis' => 'nullable|string|max:100',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only(['judul', 'konten', 'penulis']);
        if (empty($data['penulis'])) {
            $data['penulis'] = 'Admin';
        }

        // Upload Gambar ke public/uploads/artikel
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaGambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/artikel'), $namaGambar);
            $data['gambar'] = $namaGambar;
        }

        Artikel::create($data);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    // Form Edit Artikel
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.edit', compact('artikel'));
    }

    // Update Data Artikel
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'penulis' => 'nullable|string|max:100',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $artikel = Artikel::findOrFail($id);
        $data = $request->only(['judul', 'konten', 'penulis']);

        // Jika upload gambar baru, hapus gambar lama
        if ($request->hasFile('gambar')) {
            if ($artikel->gambar && File::exists(public_path('uploads/artikel/' . $artikel->gambar))) {
                File::delete(public_path('uploads/artikel/' . $artikel->gambar));
            }

            $file = $request->file('gambar');
            $namaGambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/artikel'), $namaGambar);
            $data['gambar'] = $namaGambar;
        }

        $artikel->update($data);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    // Hapus Artikel
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        if ($artikel->gambar && File::exists(public_path('uploads/artikel/' . $artikel->gambar))) {
            File::delete(public_path('uploads/artikel/' . $artikel->gambar));
        }

        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus!');
    }

    // Halaman Artikel Publik
    public function indexPublic()
    {
        $artikels = Artikel::latest()->get();
        return view('artikel.index', compact('artikels'));
    }
}