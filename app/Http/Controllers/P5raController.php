<?php

namespace App\Http\Controllers;

use App\Models\p5ra;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class P5raController extends Controller
{

    public function index()
    {
        $p5ras = p5ra::all();
        return view('Admin.Pendidikan.P5ra.index', compact('p5ras'));
    }

    public function create()
    {
        return view('Admin.Pendidikan.P5ra.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image',
        ]);

        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'image/P5ra/';
            $gambarName ='P5ra'. date('YmdHis') . '_' . Str::random(8) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = "$gambarName";
        }

        P5ra::create($input);

        return redirect('/P5ra')->with('success', 'P5ra Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        
    }

    public function edit(P5ra $P5ra)
    {
        return view('Admin.Pendidikan.P5ra.edit', compact('P5ra'));
    }

    public function update(Request $request, P5ra $P5ra)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image',
        ]);

        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'image/P5ra/';
            $gambarName ='P5ra'. date('YmdHis') . '_' . Str::random(8) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = "$gambarName";
        }else{
            unset($input['image']);
        }

        $P5ra ->update($input);
        return redirect('/P5ra')->with('success', 'P5ra Berhasil Diubah');
    }

    public function destroy(P5ra $P5ra)
    {
                // Path lengkap file gambar
                $gambarPath = public_path('image/P5ra/') . $P5ra->gambar;
    
                // Cek apakah file tersebut ada dan hapus
                if (File::exists($gambarPath)) {
                    File::delete($gambarPath);
                }
                // Hapus data slider dari database
                $P5ra->delete();
            
                return redirect('/P5ra')->with('success', 'P5ra Berhasil Dihapus');  
    }
}
