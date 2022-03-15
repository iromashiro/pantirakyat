@extends('layouts.admin')
@section('konten')
<div class="row mt-4">
    <div class="col-lg-12 mt-lg-0 mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="font-weight-bolder">Verifikasi Peserta Yang Meninggal</h5>

                <form action="{{route('post.peserta.meninggal', $peserta->id)}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">No KK</label>
                            <div class="input-group input-group-dynamic">
                                <input type="number" class="form-control w-100" aria-describedby="emailHelp"
                                    value="{{$peserta->no_kk}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">NIK</label>
                            <div class="input-group input-group-dynamic">
                                <input type="number" class="form-control w-100" aria-describedby="emailHelp" name="nik"
                                    value="{{$peserta->nik}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Nama Lengkap</label>
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp"
                                    value="{{$peserta->nama_lengkap}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Tempat Lahir</label>
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp"
                                    value="{{$peserta->tempat_lahir}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Tanggal Lahir</label>
                            <div class="input-group input-group-dynamic">
                                <input type="date" class="form-control w-100" aria-describedby="emailHelp"
                                    value="{{$peserta->tanggal_lahir}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp"
                                    value="{{$peserta->jenis_kelamin}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Status Kawin</label>
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp"
                                    value="{{$peserta->status_kawin}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Pekerjaan</label>
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp"
                                    value="{{$peserta->pekerjaan}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Alamat</label>
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp"
                                    value="{{$peserta->alamat}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Kecamatan</label>
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp"
                                    value="{{$peserta->kecamatan}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <label class="form-label">Kelurahan/Desa</label>
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp"
                                    value="{{$peserta->kelurahan}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Tanggal Meninggal</label>
                                <input type="date" class="form-control w-100" aria-describedby="emailHelp"
                                    name="tanggal_meninggal">
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
