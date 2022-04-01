@extends('layouts.admin')
@section('konten')
<div class="row mt-4">
    <div class="col-lg-12 mt-lg-0 mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="font-weight-bolder">Pendaftaran Peserta Asuransi Kematian</h5>

                <form action="{{route('verifikasi.asuransi', $peserta->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">No KK</label>
                            <div class="input-group input-group-static">
                                <input type="number" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->no_kk}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">NIK</label>
                            <div class="input-group input-group-static">
                                <input type="number" class="form-control w-100" aria-describedby="emailHelp" name="nik" value="{{$peserta->nik}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Nama Lengkap</label>
                            <div class="input-group input-group-static">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->nama_lengkap}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Tempat Lahir</label>
                            <div class="input-group input-group-static">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->tempat_lahir}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Tanggal Lahir</label>
                            <div class="input-group input-group-static">
                                <input type="date" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->tanggal_lahir}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="input-group input-group-static">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="@if($peserta->jenis_kelamin == 1)Laki-laki @else Perempuan @endif" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Status Kawin</label>
                            <div class="input-group input-group-static">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="@if($peserta->status_kawin == 1) Belum Kawin @elseif($peserta->status_kawin == 2) Kawin @elseif($peserta->status_kawin == 3) Duda @else Janda @endif" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Pekerjaan</label>
                            <div class="input-group input-group-static">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->pekerjaan}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Alamat</label>
                            <div class="input-group input-group-static">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->alamat}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Kecamatan</label>
                            <div class="input-group input-group-static">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->kecamatan}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Kelurahan/Desa</label>
                            <div class="input-group input-group-static">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->kelurahan}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">

                            <label class="form-label">Tanggal Meninggal</label>
                            <div class="input-group input-group-static">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{ $peserta->tanggal_meninggal }}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-static">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->keterangan_dinsos}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-static">
                                <select name="verifikasi_asuransi" class="form-control w-100">
                                    <option selected disabled>Verifikasi Data</option>
                                    <option value="1">Disetujui</option>
                                    <option value="2">Tolak</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- batas -->
                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <input type="date" class="form-control w-100" value="{{$peserta->tanggal_mengajukan}}" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Nama Bank</label>
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->nama_bank}}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Nomor Rekening</label>
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->no_rekening}}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Ahli Waris</label>
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->ahli_waris}}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">No HP</label>
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" value="{{$peserta->no_hp}}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Tanggal Transfer</label>
                            <div class="input-group input-group-dynamic">
                                <input type="date" class="form-control w-100" name="tanggal_transfer" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Keterangan</label>
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" name="keterangan_asuransi" required>
                            </div>
                        </div>
                    </div>


                    <br>
                    <button class="btn btn-success" type="submit">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
