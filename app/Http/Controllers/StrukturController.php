<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Struktur;
use Illuminate\Support\Facades\File;

class StrukturController extends Controller
{
    public function index()
    {
        $strukturs = Struktur::paginate(4);
        return view('Admin.Profil.Struktur.index', compact('strukturs'));
    }

    public function create()
    {
        return view('Admin.Profil.Struktur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/struktur/';
            $imageName ='Struktur_'. date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Struktur::create($input);

        return redirect('/struktur')->with('success', 'Struktur Organisasi Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Struktur $struktur)
    {
        return view('Admin.Profil.Struktur.edit', compact('struktur'));
    }

    public function update(Request $request, Struktur $struktur)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/struktur/';
            $imageName = 'Struktur_'. date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }else{
            unset($input['image']);
        }

        $struktur ->update($input);
        return redirect('/struktur')->with('success', 'Struktur Organisasi Berhasil Diubah');
    }

    public function destroy(Struktur $struktur)
    {
        // Path lengkap file gambar
        $imagePath = public_path('image/struktur/') . $struktur->image;
    
        // Cek apakah file tersebut ada dan hapus
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        // Hapus data slider dari database
        $struktur->delete();
    
        return redirect('/struktur')->with('success', 'Struktur Organisasi Berhasil Dihapus');        
    }
}
