<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistik;

class StatistikController extends Controller
{

    public function index()
    {
        $statistiks = Statistik::all();
        return view('Admin.Beranda.statistik.index', compact('statistiks'));
    }

    public function create()
    {
        return view ('Admin.Beranda.statistik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru' => 'required',
            'siswa' => 'required',
            'karyawan' => 'required',
        ]);

        $input = $request->all();

        Statistik::create($input);

        return redirect('/statistik')->with('success', 'Statistik Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit( Statistik $statistik)
    {
        return view('Admin.Beranda.statistik.edit', compact('statistik'));
    }

    public function update(Request $request,Statistik $statistik)
    {
        $request->validate([
            'guru' => 'required',
            'karyawan' => 'required',
            'siswa' => 'required',
        ]);

        $input = $request->all();
        $statistik ->update($input);
        return redirect('/statistik')->with('success', 'Statistik Berhasil Diubah');
    }

    public function destroy(string $id)
    {
        //
    }
}
