<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SlidersController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('Admin.Beranda.sliders.index', compact('sliders'));
    }


    public function create()
    {
        return view('Admin.Beranda.sliders.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = 'Slider_' . date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Slider::create($input);

        return redirect('/sliders')->with('success', 'Slider Berhasil Ditambahkan');
    }


    public function show(string $id)
    {
        
    }

    public function edit(Slider $slider)
    {
        return view('Admin.Beranda.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = 'Slider_' . date('YmdHis') . '_' . Str::random(8) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        } else {
            unset($input['image']);
        }

        $slider->update($input);
        return redirect('/sliders')->with('success', 'Slider Berhasil Diubah');
    }

    public function destroy(Slider $slider)
    {
        // Path lengkap file gambar
        $imagePath = public_path('image/') . $slider->image;

        // Cek apakah file tersebut ada dan hapus
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Hapus data slider dari database
        $slider->delete();

        return redirect('/sliders')->with('success', 'Slider Berhasil Dihapus');
    }
}
