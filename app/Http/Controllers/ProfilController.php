<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class ProfilController extends Controller
{
    public function index()
    {
        $get_all = Profil::all();
        return view('admin.profil.index', compact('get_all'));
    }

    public function viewTambahProfil()
    {
        return view('admin.profil.tambah');
    }

    public function profil_tinymce(Request $request)
    {
        $file = $request->file('file');
        $path = url('storage/profil/') . '/' . $file->getClientOriginalName();
        $imgpath = $file->move(public_path('storage/profil/'), $file->getClientOriginalName());
        $fileNameToStore = $path;

        return json_encode(['location' => $fileNameToStore]);
    }

    public function create(Request $request)
    {
        $x = new Profil();
        $x->nama_menu = $request->nama_menu;
        $x->isi_menu = $request->isi_menu;
        $x->slug = Str::slug($request->nama_menu);

        $x->save();

        Alert::success('Berhasil Tambah Menu Profil', 'Anda Telah Menambahkan Menu Profil Baru!');

        return \redirect()->route('profil.index');
    }

    public function destroy($id)
    {
        Profil::destroy($id);
        Alert::error('Berhasil Hapus Menu Profil', 'Anda Telah Menghapus Menu Profil!');
        return \redirect()->back();
    }
}
