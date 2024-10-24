<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listppdb;
use App\Models\PPDB;

class ListppdbController extends Controller
{

    public function index()
    {
        $ppdbs = PPDB::all();
        $lists = Listppdb::all();
        return view('Admin.PPDB.ppdb.index', compact('ppdbs', 'lists'));
    }

    public function create()
    {
        return view('Admin.PPDB.ppdb.createlist');
    }

    public function store(Request $request)
    {
        $request->validate([
            'list.*' => 'required|string|max:255',
        ]);

        $lists = $request->input('list');

        foreach ($lists as $list) {
            Listppdb::create([
                'list' => $list,
            ]);
        }

        return redirect()->route('ppdb.index')->with('success', 'List berhasil ditambahkan!');
    }



    public function show(string $id)
    {
        //
    }

    public function edit(Listppdb $listppdb)
    {
        return view('Admin.PPDB.ppdb.editlist', compact('listppdb'));
    }

    public function update(Request $request, Listppdb $listppdb)
    {
        $request->validate([
            'list' => 'required|string|max:255',
        ]);

        $listppdb->update([
            'list' => $request->input('list'),
        ]);

        return redirect()->route('listppdb.index')->with('success', 'List berhasil diperbarui!');
    }
    

    public function destroy(string $id)
    {
        //
    }
}
