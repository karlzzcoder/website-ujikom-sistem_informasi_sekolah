<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    // Tampil Tabel Data Galeri (Admin)
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    // Form Tambah Foto Galeri
    public function create()
    {
        return view('admin.galeri.create');
    }

    // Simpan Data Galeri Baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only(['judul']);

        // Upload Gambar ke public/uploads/galeri
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaGambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/galeri'), $namaGambar);
            $data['gambar'] = $namaGambar;
        }

        Galeri::create($data);

        return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil ditambahkan!');
    }

    // Form Edit Galeri
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    // Update Data Galeri
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $galeri = Galeri::findOrFail($id);
        $data = $request->only(['judul']);

        // Jika upload gambar baru, hapus gambar lama
        if ($request->hasFile('gambar')) {
            if ($galeri->gambar && File::exists(public_path('uploads/galeri/' . $galeri->gambar))) {
                File::delete(public_path('uploads/galeri/' . $galeri->gambar));
            }

            $file = $request->file('gambar');
            $namaGambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/galeri'), $namaGambar);
            $data['gambar'] = $namaGambar;
        }

        $galeri->update($data);

        return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil diperbarui!');
    }

    // Hapus Foto Galeri
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->gambar && File::exists(public_path('uploads/galeri/' . $galeri->gambar))) {
            File::delete(public_path('uploads/galeri/' . $galeri->gambar));
        }

        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil dihapus!');
    }

    // Halaman Galeri Publik
    public function indexPublic()
    {
        $galeris = Galeri::latest()->get();
        return view('galeri.index', compact('galeris'));
    }
}