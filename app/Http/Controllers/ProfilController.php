<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profils = Profil::all();
        return view('Admin.Profil.profil.index', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);
        return view('Admin.Profil.profil.edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'sejarahsingkat' => 'required',
            'list1' => 'required',
            'list2' => 'required',
            'list3' => 'required',
            'penutup' => 'required',
        ]);

        $profil = Profil::findOrFail($id);
        $profil->update($request->all());

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
