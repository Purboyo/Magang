<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddPPDB;
use Illuminate\Support\Str;

class AddPPDBController extends Controller
{
    public function index()
    {
        $addppdbs = AddPPDB::all();
        return view('Admin.PPDB.tambahan.index', compact('addppdbs'));
    }

    public function create()
    {
        return view('Admin.PPDB.tambahan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ikon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();
        AddPPDB::create($input);

        return redirect('/addppdb')->with('success', 'Data tambahan PPDB Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $addppdb = AddPPDB::findOrFail($id);
        
        return view('Admin.PPDB.tambahan.edit', compact('addppdb'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'ikon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
    
        $addppdb = AddPPDB::findOrFail($id);
    
        $addppdb->update($request->all());
    
        return redirect('/addppdb')->with('success', 'Data tambahan PPDB Berhasil Diupdate');
    }
    
    public function destroy($id)
    {
        $addppdb = AddPPDB::findOrFail($id);
        $addppdb->delete();
    
        return redirect('/addppdb')->with('success', 'Data tambahan PPDB Berhasil Dihapus');
    }
    
}
