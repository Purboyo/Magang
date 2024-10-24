<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;
use Illuminate\Support\Facades\File;
use illuminate\Support\Str;


class SejarahController extends Controller
{

    public function index()
    {
        $sejarahs = Sejarah::all();
        return view('Admin.Profil.sejarah.index', compact('sejarahs'));
    }


    public function create()
    {
        return view('Admin.Profil.sejarah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'sejarahsingkat' => 'required',
            'foto' => 'required|image',
        ]);

        $input = $request->all();
        if ($foto = $request->file('foto')) {
            $destinationPath = 'image/sejarah/';
            $fotoName ='sejarah'. date('YmdHis') . '_' . Str::random(8) . '.' . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $fotoName);
            $input['foto'] = "$fotoName";
        }

        Sejarah::create($input);

        return redirect('/sejarah')->with('success', 'Sejarah Berhasil Ditambahkan');
    }


    public function show(string $id)
    {
        
    }


    public function edit(Sejarah $sejarah)
    {
        return view ('Admin.Profil.sejarah.edit', compact('sejarah'));
    }

    public function update(Request $request, Sejarah $sejarah)
    {
        $request->validate([
            'deskripsi' => 'required',
            'sejarahsingkat' => 'required',
            'foto' => 'image',
        ]);

        $input = $request->all();
        if ($foto = $request->file('foto')) {
            $destinationPath = 'image/sejarah/';
            $fotoName ='sejarah'. date('YmdHis') . '_' . Str::random(8) . '.' . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $fotoName);
            $input['foto'] = "$fotoName";
        }else{
            unset($input['image']);
        }

        $sejarah ->update($input);
        return redirect('/sejarah')->with('success', 'Sejarah Berhasil Diubah');
    }


    public function destroy(string $id)
    {
        
    }
}
