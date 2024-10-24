<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sambutan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SambutanController extends Controller
{

    public function index()
    {
        $sambutans = Sambutan::all();
        return view('Admin.Beranda.sambutan.index', compact('sambutans'));
    }


    public function create()
    {
        return view('Admin.Beranda.sambutan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'konten' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required|image',
        ]);

        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'image/sambutan';
            $gambarName = 'kepsek_' . date('YmdHis') . '_' . Str::random(8) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = "$gambarName";
        }

        Sambutan::create($input);

        return redirect('/sambutan')->with('success', 'Sambutan Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Sambutan $sambutan)
    {
        return view('Admin.Beranda.sambutan.edit', compact('sambutan'));
    }


    public function update(Request $request, Sambutan $sambutan)
    {
        $request->validate([
            'konten' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'image',
        ]);

        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'image/sambutan/';
            $gambarName = 'kepsek_' . date('YmdHis') . '_' . Str::random(8) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = "$gambarName";
        }else{
            unset($input['gambar']);
        }

        $sambutan ->update($input);
        return redirect('/sambutan')->with('success', 'Sambutan Berhasil Diubah');
    }

    public function destroy(string $id)
    {
        //
    }
}
