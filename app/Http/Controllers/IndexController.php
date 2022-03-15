<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Profil;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function dashboard()
    {
        $berita_terbaru = Berita::paginate(3);
        $pengumuman = Pengumuman::paginate(3);
        $profil = Profil::all();

        return view('index', compact('berita_terbaru', 'profil', 'pengumuman'));
    }

    public function profil($slug)
    {
        $profil = Profil::where('slug', '=', $slug)->first();
        $pengumuman = Pengumuman::paginate(3);
        $berita_lain = Berita::paginate(3);
        return view('profil', compact('profil', 'pengumuman', 'berita_lain'));
    }

    public function profil_all()
    {
        $profil = Profil::all();
        return view('index-profil', compact('profil'));
    }

    public function berita_all()
    {
        $profil = Profil::all();
        $berita = Berita::all();
        $pengumuman = Pengumuman::paginate(3);

        return view('index-berita', compact('profil', 'berita', 'pengumuman'));
    }

    public function berita($slug)
    {
        $profil = Profil::all();
        $berita = Berita::where('slug', '=', $slug)->first();
        $pengumuman = Pengumuman::paginate(3);
        $berita_lain = Berita::paginate(3);
        return view('berita', compact('profil', 'berita', 'pengumuman', 'berita_lain'));
    }

    public function pengumuman_all()
    {
        $profil = Profil::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::paginate(3);

        return view('index-pengumuman', compact('profil', 'berita', 'pengumuman'));
    }

    public function pengumuman($slug)
    {
        $profil = Profil::all();
        $pengumuman = Pengumuman::where('slug', '=', $slug)->first();
        $berita_lain = Berita::paginate(3);
        return view('pengumuman', compact('profil', 'pengumuman', 'berita_lain'));
    }
}
