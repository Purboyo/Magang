<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\File;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitass = Fasilitas::paginate(4);
        return view('Admin.Profil.fasilitas.index', compact('fasilitass'));
    }

    public function create()
    {
        return view('Admin.Profil.fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'konten' => 'required',
            'jumlah' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/fasilitas/';
            $imageName ='Fasilitas'. date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Fasilitas::create($input);

        return redirect('/fasilitas')->with('success', 'Fasilitas Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Fasilitas $fasilita)
    {
        return view('Admin.Profil.fasilitas.edit', compact('fasilita'));
    }

    public function update(Request $request, Fasilitas $fasilita)
    {
        $request->validate([
            'nama' => 'required',
            'konten' => 'required',
            'jumlah' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/fasilitas/';
            $imageName ='Fasilitas'. date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }else{
            unset($input['image']);
        }

        $fasilita ->update($input);
        return redirect('/fasilitas')->with('success', 'Fasilitas Berhasil Diubah');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        // Path lengkap file gambar
        $imagePath = public_path('image/fasilitas/') . $fasilitas->image;
    
        // Cek apakah file tersebut ada dan hapus
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        // Hapus data slider dari database
        $fasilitas->delete();
    
        return redirect('/struktur')->with('success', 'Struktur Organisasi Berhasil Dihapus');        
    }
}
