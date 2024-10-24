<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use App\Models\Misi;
use Illuminate\Http\Request;


class VisiMisiController extends Controller
{

    public function index()
    {
        $visis = Visi::all();
        $misi = Misi::all();
        return view('Admin.Profil.visimisi.index', compact('visis', 'misi'));
    }



    public function create() {
        $misi = Misi::all(); // Ambil semua data misi
        return view('Admin.Profil.visimisi.editMisi', compact('misi'));
    }

    public function store(Request $request) {
        // Validasi setiap misi
        $request->validate([
            'misi.*' => 'required|string|max:255', // Validasi untuk setiap misi
        ]);

        // Update semua misi
        foreach ($request->misi as $id => $misi) {
            $misiEntry = Misi::find($id);
            if ($misiEntry) {
                $misiEntry->misi = $misi;
                $misiEntry->save();
            }
        }

        return redirect()->route('visimisi.index')->with('success', 'Misi berhasil diperbarui.');
    }

    public function show() {}

    public function edit($id)
    {
        $visi = Visi::findOrFail($id);
        return view('Admin.Profil.visimisi.edit', compact('visi'));
    }
    
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'visi' => 'required|string|max:255',
        ]);
    
        $visi = Visi::findOrFail($id);
        $visi->update($request->only('visi'));
    
        return redirect()->route('visimisi.index')->with('success', 'Visi berhasil diperbarui!');
    }
    



    public function destroy(string $id)
    {
        //
    }

    
}
