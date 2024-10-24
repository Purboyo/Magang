<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PrestasiController extends Controller
{

    public function index()
    {
        $prestasis = Prestasi::paginate(4);
        return view('Admin.Pendidikan.Prestasi.index', compact('prestasis'));
    }

    public function create()
    {
        return view('Admin.Pendidikan.Prestasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/prestasi/';
            $imageName ='prestasi'. date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Prestasi::create($input);

        return redirect('/Prestasi')->with('success', 'Prestasi Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Prestasi $Prestasi)
    {
        return view('Admin.Pendidikan.Prestasi.edit', compact('Prestasi'));
    }

    public function update(Request $request, Prestasi $Prestasi)
    {
        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/prestasi/';
            $imageName = 'prestasi_'. date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }else{
            unset($input['image']);
        }

        $Prestasi ->update($input);
        return redirect('/Prestasi')->with('success', 'Prestasi Berhasil Diubah');
    }

    public function destroy(Prestasi $Prestasi)
    {
        // Path lengkap file gambar
        $imagePath = public_path('image/prestasi/') . $Prestasi->image;
    
        // Cek apakah file tersebut ada dan hapus
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        // Hapus data slider dari database
        $Prestasi->delete();
    
        return redirect('/Prestasi')->with('success', 'Prestasi Berhasil Dihapus');        
    }
}
