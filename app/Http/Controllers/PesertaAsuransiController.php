<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\PesertaAsuransi;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class PesertaAsuransiController extends Controller
{

    public function index()
    {
        $peserta = PesertaAsuransi::all();
        return view('admin.peserta_asuransi.index', compact('peserta'));
    }

    public function viewTambahPeserta()
    {
        $regencies = Regency::where('name', 'LIKE', '%MUARA ENIM%')->first();
        $districts = $regencies->districts;
        $villages = $regencies->villages;
        return view('admin.peserta_asuransi.tambah_peserta', compact('districts', 'villages'));
    }

    public function tambah(Request $req)
    {
        PesertaAsuransi::create($req->all());
        Alert::success('Pendaftaran Berhasil!', 'Anda Berhasil Mendaftarkan Peserta Baru!');

        return redirect()->route('admin');
    }

    public function viewPesertaMeninggal($id)
    {
        $peserta = PesertaAsuransi::find($id);

        return view('admin.verifikasi.verifikasi_meninggal', compact('peserta'));
    }

    public function tglMeninggal(Request $request, $id)
    {
        $vpd = PesertaAsuransi::find($id);

        $vpd->tanggal_meninggal = $request->tanggal_meninggal;
        $vpd->status_meninggal = 1;
        $vpd->update();

        Alert::success('Pembaruan Data Berhasil!', 'Proses Pembaruan Data Peserta Berhasil!');
        return redirect()->route('admin');
    }

    public function index_dinsos()
    {
        $peserta = PesertaAsuransi::all();
        return view('admin.peserta_asuransi.index_dinsos', compact('peserta'));
    }

    public function viewVerifikasiPesertaDinsos($id)
    {
        $peserta = PesertaAsuransi::find($id);

        return view('admin.verifikasi.verifikasi_dinsos', compact('peserta'));
    }

    public function verifikasiPesertaDinsos(Request $request, $id)
    {
        $vpd = PesertaAsuransi::find($id);

        $vpd->verifikasi_dinsos = $request->verifikasi_dinsos;
        $vpd->keterangan_dinsos = $request->keterangan_dinsos;
        $vpd->update();

        Alert::success('Verifikasi Berhasil!', 'Proses Verifikasi Peserta Berhasil!');
        return redirect()->route('index.dinsos');
    }

    public function index_asuransi()
    {
        $peserta = PesertaAsuransi::where('verifikasi_asuransi', '=', 0)->orWhere('verifikasi_asuransi', '=', 1)->orWhere('verifikasi_asuransi', '=', 2)->where('verifikasi_dinsos', '=', 1)->get();

        return view('admin.peserta_asuransi.index_asuransi', compact('peserta'));
    }

    public function viewVerifikasiPesertaAsuransi($id)
    {
        $peserta = PesertaAsuransi::find($id);

        return view('admin.verifikasi.verifikasi_asuransi', compact('peserta'));
    }

    public function verifikasiPesertaAsuransi(Request $request, $id)
    {
        $vpd = PesertaAsuransi::find($id);

        $vpd->verifikasi_asuransi = $request->verifikasi_asuransi;
        $vpd->keterangan_asuransi = $request->keterangan_asuransi;
        $vpd->update();

        Alert::success('Verifikasi Berhasil!', 'Proses Verifikasi Peserta Berhasil!');
        return redirect()->route('index.asuransi');
    }

    public function dashboard()
    {
        // HARIAN //
        $tanggal = date('Y-m-d', strtotime(Carbon::now()));
        $now_MUARAENIM = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'MUARA ENIM')->count();
        $now_LAWANGKIDUL = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'LAWANG KIDUL')->count();
        $now_TANJUNGAGUNG = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'TANJUNG AGUNG')->count();
        $now_PANANGENIM = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'PANANG ENIM')->count();
        $now_SDL = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'SEMENDO DARAT LAUT')->count();
        $now_SDT = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'SEMENDO DARAT TENGAH')->count();
        $now_SDU = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'SEMENDO DARAT ULU')->count();
        $now_UJANMAS = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'UJAN MAS')->count();
        $now_GUMEG = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'GUNUNG MEGANG')->count();
        $now_BELIMBING = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'BELIMBING')->count();
        $now_RAMBANG = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'RAMBANG')->count();
        $now_RAMBANGNIRU = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'RAMBANG NIRU')->count();
        $now_EPD = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'EMPAT PETULAI DANGKU')->count();
        $now_GELUMBANG = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'GELUMBANG')->count();
        $now_LEMBAK = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'LEMBAK')->count();
        $now_BD = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'BELIDA DARAT')->count();
        $now_MB = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'MUARA BELIDA')->count();
        $now_LUBAI = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'LUBAI')->count();
        $now_LUBAIULU = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'LUBAI ULU')->count();
        $now_SR = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'SUNGAI ROTAN')->count();
        $now_KELEKAR = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'KELEKAR')->count();
        $now_BENAKAT = PesertaAsuransi::whereDate('tanggal_meninggal', $tanggal)->where('kecamatan', '=', 'BENAKAT')->count();

        // BULAN //
        $jan = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-01-01')))->count();
        $feb = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-02-01')))->count();
        $mar = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-03-01')))->count();
        $apr = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-04-01')))->count();
        $mei = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-05-01')))->count();
        $jun = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-06-01')))->count();
        $jul = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-07-01')))->count();
        $agu = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-08-01')))->count();
        $sep = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-09-01')))->count();
        $okt = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-10-01')))->count();
        $nov = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-11-01')))->count();
        $des = PesertaAsuransi::whereMonth('tanggal_meninggal', date('m', strtotime('2021-12-01')))->count();

        // TAHUN //


        return view('admin.dashboard', compact(
            'now_MUARAENIM',
            'now_LAWANGKIDUL',
            'now_TANJUNGAGUNG',
            'now_PANANGENIM',
            'now_SDL',
            'now_SDT',
            'now_SDU',
            'now_UJANMAS',
            'now_GUMEG',
            'now_BELIMBING',
            'now_RAMBANG',
            'now_RAMBANGNIRU',
            'now_EPD',
            'now_GELUMBANG',
            'now_LEMBAK',
            'now_BD',
            'now_MB',
            'now_LUBAI',
            'now_LUBAIULU',
            'now_SR',
            'now_KELEKAR',
            'now_BENAKAT',
            'jan',
            'feb',
            'mar',
            'apr',
            'mei',
            'jun',
            'jul',
            'agu',
            'sep',
            'okt',
            'nov',
            'des'
        ));
    }
}
