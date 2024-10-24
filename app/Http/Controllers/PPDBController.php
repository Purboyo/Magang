<?php

namespace App\Http\Controllers;

use App\Models\Listppdb;
use App\Models\PPDB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use illuminate\Support\Facades\File;

class PPDBController extends Controller
{

    public function index()
    {
        $ppdbs = PPDB::all();
        $lists = Listppdb::all();
        return view('Admin.PPDB.ppdb.index', compact('ppdbs', 'lists'));
    }

    public function create()
    {
        return view('Admin.PPDB.ppdb.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/ppdb/';
            $imageName ='Ppdb_'. date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        PPDB::create($input);

        return redirect('/ppdb')->with('success', 'PPDB Berhasil Ditambahkan');
    }


    public function show(string $id)
    {
        //
    }

    public function edit(PPDB $ppdb)
    {
        return view('Admin.PPDB.ppdb.edit', compact('ppdb'));
    }

    public function update(Request $request, PPDB $ppdb)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/ppdb/';
            $imageName = 'Ppdb_'. date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }else{
            unset($input['image']);
        }

        $ppdb ->update($input);
        return redirect('/ppdb')->with('success', 'PPDB Organisasi Berhasil Diubah');
    }

    public function destroy(PPDB $ppdb)
    {
        // Path lengkap file gambar
        $imagePath = public_path('image/ppdb/') . $ppdb->image;
    
        // Cek apakah file tersebut ada dan hapus
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        // Hapus data slider dari database
        $ppdb->delete();
    
        return redirect('/ppdb')->with('success', 'PPDB Organisasi Berhasil Dihapus');          
    }
}
