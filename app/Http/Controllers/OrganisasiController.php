<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class OrganisasiController extends Controller
{

    public function index()
    {
        $organisasis = Organisasi::all();
        return view('Admin.Pendidikan.Organisasi.index', compact('organisasis'));
    }

    public function create()
    {
        return view('Admin.Pendidikan.Organisasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'konten' => 'required',
            'sub_nama' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/organisasi/';
            $imageName ='Organisasi'. date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Organisasi::create($input);

        return redirect('/Organisasi')->with('success', 'Organisasi Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        //
    }


    public function edit( Organisasi $Organisasi)
    {
        return view('Admin.Pendidikan.Organisasi.edit', compact('Organisasi'));

    }

    public function update(Request $request, Organisasi $Organisasi)
    {
        $request->validate([
            'nama' => 'required',
            'konten' => 'required',
            'sub_nama' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/organisasi/';
            $imageName ='Organisasi'. date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }else{
            unset($input['image']);
        }

        $Organisasi ->update($input);
        return redirect('/Organisasi')->with('success', 'Organisasi Berhasil Diubah');
    }

    public function destroy(Organisasi $Organisasi)
    {
        // Path lengkap file gambar
        $imagePath = public_path('image/organisasi/') . $Organisasi->image;
    
        // Cek apakah file tersebut ada dan hapus
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        // Hapus data slider dari database
        $Organisasi->delete();
    
        return redirect('/Organisasi')->with('success', 'Organisasi Berhasil Dihapus');    
    }
}
