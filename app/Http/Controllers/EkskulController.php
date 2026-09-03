<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EkskulController extends Controller
{
    // Tampil Tabel Data Ekskul (Admin)
    public function index()
    {
        $ekskuls = Ekskul::latest()->get();
        return view('admin.ekskul.index', compact('ekskuls'));
    }

    // Form Tambah Ekskul
    public function create()
    {
        return view('admin.ekskul.create');
    }

    // Simpan Data Ekskul Baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_ekskul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only(['nama_ekskul', 'deskripsi']);

        // Upload Gambar ke public/uploads/ekskul
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaGambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/ekskul'), $namaGambar);
            $data['gambar'] = $namaGambar;
        }

        Ekskul::create($data);

        return redirect()->route('ekskul.index')->with('success', 'Data Ekstrakurikuler berhasil ditambahkan!');
    }

    // Form Edit Ekskul
    public function edit($id)
    {
        $ekskul = Ekskul::findOrFail($id);
        return view('admin.ekskul.edit', compact('ekskul'));
    }

    // Update Data Ekskul
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ekskul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $ekskul = Ekskul::findOrFail($id);
        $data = $request->only(['nama_ekskul', 'deskripsi']);

        // Jika upload gambar baru, hapus gambar lama
        if ($request->hasFile('gambar')) {
            if ($ekskul->gambar && File::exists(public_path('uploads/ekskul/' . $ekskul->gambar))) {
                File::delete(public_path('uploads/ekskul/' . $ekskul->gambar));
            }

            $file = $request->file('gambar');
            $namaGambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/ekskul'), $namaGambar);
            $data['gambar'] = $namaGambar;
        }

        $ekskul->update($data);

        return redirect()->route('ekskul.index')->with('success', 'Data Ekstrakurikuler berhasil diperbarui!');
    }

    // Hapus Ekskul
    public function destroy($id)
    {
        $ekskul = Ekskul::findOrFail($id);

        if ($ekskul->gambar && File::exists(public_path('uploads/ekskul/' . $ekskul->gambar))) {
            File::delete(public_path('uploads/ekskul/' . $ekskul->gambar));
        }

        $ekskul->delete();

        return redirect()->route('ekskul.index')->with('success', 'Data Ekstrakurikuler berhasil dihapus!');
    }

    // Halaman Ekskul Publik
    public function indexPublic()
    {
        $ekskuls = Ekskul::latest()->get();
        return view('ekskul.index', compact('ekskuls'));
    }
}