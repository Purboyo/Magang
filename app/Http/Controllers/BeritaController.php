<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{

    public function index()
    {
        $beritas = Berita::all();
        return view('Admin.Berita.index', compact('beritas'));
    }
    public function create()
    {
        return view('Admin.Berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'deskripsisingkat' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image',
        ]);
        
        $input = $request->all();
        
        if ($image = $request->file('image')) {
            $destinationPath = 'image/berita/';
            $imageName = 'Berita_' . date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }
        
        Berita::create($input);
        
        return redirect('/Berita')->with('success', 'Berita Berhasil Ditambahkan');
        
    }


    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('Admin.Berita.show', compact('berita'));
    }
    
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('Admin.Berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'deskripsisingkat' => 'required',
            'deskripsi' => 'required',
            'image' => 'nullable|image',
        ]);
    
        $berita = Berita::findOrFail($id);
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/berita/';
            $imageName = 'Berita_' . date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        } else {
            unset($input['image']);  // Biarkan gambar lama tetap jika tidak ada gambar baru yang diunggah
        }
    
        $berita->update($input);
    
        return redirect('/Berita')->with('success', 'Berita Berhasil Diperbarui');
    }
    

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
    
        // Hapus gambar jika ada
        if ($berita->image) {
            $imagePath = public_path('image/berita/' . $berita->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        // Hapus data berita dari database
        $berita->delete();
    
        return redirect('/Berita')->with('success', 'Berita Berhasil Dihapus');
    }
    
    
}
