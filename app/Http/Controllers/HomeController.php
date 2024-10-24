<?php

namespace App\Http\Controllers;

use App\Models\AddPPDB;
use App\Models\Berita;
use App\Models\Deskripsi;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Sambutan;
use App\Models\Statistik;
use App\Models\Struktur;
use App\Models\Fasilitas;
use App\Models\Listppdb;
use App\Models\PPDB;
use App\Models\Prestasi;
use App\Models\Profil;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Organisasi;
use App\Models\p5ra;
use App\Models\Sejarah;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $sambutans = Sambutan::first();
        $statistiks = Statistik::first();
        $visis = Visi::first();
        $profils = Profil::first();
        $misis = Misi::all();
        return view('home.index', compact('sliders','sambutans','statistiks', 'visis', 'profils', 'misis'));
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function dokumentasi()
    {
        return view('home.dokumentasi');
    }

    public function berita()
    {
        $beritas = Berita::all();
        return view('home.berita', compact('beritas'));
    }

    public function organisasi()
    {
        $organisasis =Organisasi::all();
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('home.organisasi', compact('organisasis', 'ekstrakurikulers'));
    }

    public function sejarah()
    {
        $visis = Visi::first();
        $profils = Profil::first();
        $misis = Misi::all();
        $deskripsis = Deskripsi::first();
        $sejarahs = Sejarah::first();
        return view('home.sejarah', compact('visis', 'profils','misis', 'deskripsis','sejarahs'));
    }

    public function struktur()
    {
        $strukturs = Struktur::all();
        return view('home.struktur', compact('strukturs'));
    }
    
    public function fasilitas()
    {
        $fasilitass = Fasilitas::all();
        return view('home.fasilitas', compact('fasilitass')); 
    }

    public function p5ra()
    {
        $p5ras = p5ra::all();
        return view('home.p5ra', compact('p5ras')); 
    }

    public function ppdb()
    {
        $ppdbs = PPDB::all();
        $lists = Listppdb::all();
        $addppdbs = AddPPDB::all();
        return view('home.ppdb', compact('ppdbs', 'lists', 'addppdbs')); 
    }

    public function prestasi()
    {
        $prestasis = Prestasi::all();
        return view('home.prestasi', compact('prestasis')); 
    }

    public function detailberita($id){
        $berita = Berita::find($id);
        return view('home.detailberita', compact('berita'));
    }
}
