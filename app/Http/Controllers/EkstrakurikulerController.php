<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class EkstrakurikulerController extends Controller
{

    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('Admin.Pendidikan.Ekstrakurikuler.index', compact('ekstrakurikulers'));
    }


    public function create()
    {
        return view('Admin.Pendidikan.Ekstrakurikuler.create');
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
            $destinationPath = 'image/ekstrakurikuler/';
            $imageName = 'Ekstrakurikuler' . date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Ekstrakurikuler::create($input);

        return redirect('/Ekstrakurikuler')->with('success', 'Ekstrakurikuler Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit( Ekstrakurikuler $Ekstrakurikuler)
    {
        return view('Admin.Pendidikan.Ekstrakurikuler.edit', compact('Ekstrakurikuler'));
    }

    public function update(Request $request, Ekstrakurikuler $Ekstrakurikuler)
    {
        $request->validate([
            'nama' => 'required',
            'konten' => 'required',
            'sub_nama' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/ekstrakurikuler/';
            $imageName = 'Ekstrakurikuler' . date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        } else {
            unset($input['image']);
        }

        $Ekstrakurikuler->update($input);
        return redirect('/Ekstrakurikuler')->with('success', 'Ekstrakurikuler Berhasil Diubah');
    }

    public function destroy(Ekstrakurikuler $Ekstrakurikuler)
    {
        // Path lengkap file gambar
        $imagePath = public_path('image/ekstrakurikuler/') . $Ekstrakurikuler->image;

        // Cek apakah file tersebut ada dan hapus
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        // Hapus data slider dari database
        $Ekstrakurikuler->delete();

        return redirect('/Ekstrakurikuler')->with('success', 'Ekstrakurikuler Berhasil Dihapus');
    }
}
