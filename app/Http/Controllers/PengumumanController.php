<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PengumumanController extends Controller
{
    public function index()
    {
        $get_all = Pengumuman::all();
        return view('admin.pengumuman.index', compact('get_all'));
    }

    public function viewTambahpengumuman()
    {
        return view('admin.pengumuman.tambah');
    }

    public function pengumuman_tinymce(Request $request)
    {
        $file = $request->file('file');
        $path = url('storage/pengumuman/') . '/' . $file->getClientOriginalName();
        $imgpath = $file->move(public_path('storage/pengumuman/'), $file->getClientOriginalName());
        $fileNameToStore = $path;

        return json_encode(['location' => $fileNameToStore]);
    }

    public function create(Request $request)
    {
        $a = $request->file('thumbnail');
        $b = $request->file('thumbnail')->getClientOriginalName();

        $c = Image::make($a->getRealPath())->resize(852, 480);
        $d = '/storage/thumbnail_pengumuman' . $b;
        $c = Image::make($c)->save(\public_path() . $d);

        $x = new Pengumuman();
        $x->judul = $request->judul;
        $x->isi_pengumuman = $request->isi_pengumuman;
        $x->thumbnail = $d;
        $x->slug = Str::slug($request->judul);

        $x->save();

        Alert::success('pengumuman Sudah Diinput ke Sistem!', 'Anda Telah Menginput pengumuman!');

        return \redirect()->route('pengumuman.index');
    }

    public function destroy($id)
    {
        Pengumuman::destroy($id);
        Alert::error('Berhasil Hapus pengumuman', 'Anda Telah Menghapus pengumuman!');
        return \redirect()->back();
    }
}
