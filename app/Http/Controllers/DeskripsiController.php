<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deskripsi;
use App\Models\Sejarah;

class DeskripsiController extends Controller
{

    public function index()
    {
        $deskripsis = Deskripsi::all();
        return view ('Admin.Profil.deskripsi.index', compact('deskripsis'));
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }

    public function show(string $id)
    {
        
    }


    public function edit($id)
    {
        $deskripsi = Deskripsi::findOrFail($id);
        return view('Admin.Profil.deskripsi.edit', compact('deskripsi'));
    }

    public function update(Request $request, Deskripsi $deskripsi)
    {
        // Validate the request
        $request->validate([
            'nama' => 'required',
            'npsn' => 'required',
            'alamat' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'negara' => 'required',
            'status' => 'required',
            'bentuk' => 'required',
        ]);

        $input = $request->all();
        $deskripsi ->update($input);

        return redirect()->route('deskripsi.index')->with('success', 'Deskripsi berhasil diubah.');
    }


    public function destroy(string $id)
    {
        
    }
}
