@extends('layouts.admin')
@section('konten')
<div class="row mt-4">
    <div class="col-lg-12 mt-lg-0 mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="font-weight-bolder">Pendaftaran Peserta Asuransi Kematian</h5>

                <form action="{{route('post.peserta')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">No KK</label>
                                <input type="number" class="form-control w-100" aria-describedby="emailHelp" required
                                    name="no_kk">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">NIK</label>
                                <input type="number" class="form-control w-100" aria-describedby="emailHelp" required
                                    name="nik">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" required
                                    name="nama_lengkap">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" required
                                    name="tempat_lahir">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="date" class="form-control w-100" aria-describedby="emailHelp" required
                                    name="tanggal_lahir">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <select name="jenis_kelamin" class="form-control w-100">
                                    <option selected disabled>Jenis Kelamin</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <select name="status_kawin" class="form-control w-100">
                                    <option selected disabled>Status Kawin</option>
                                    <option value="1">Belum Kawin</option>
                                    <option value="2">Kawin</option>
                                    <option value="3">Duda</option>
                                    <option value="4">Janda</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" required
                                    name="pekerjaan">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control w-100" aria-describedby="emailHelp" required
                                    name="alamat">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <input class="form-control w-100" list="kecamatans" placeholder="Kecamatan" required
                                    name="kecamatan">
                                <datalist id="kecamatans">
                                    @foreach ($districts as $d)
                                    <option value="{{$d->name}}">
                                        @endforeach
                                </datalist>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            <div class="input-group input-group-dynamic">
                                <input class="form-control w-100" list="kelurahans" placeholder="Kelurahan" required
                                    name="kelurahan">
                                <datalist id="kelurahans">
                                    @foreach ($villages as $v)
                                    <option value="{{$v->name}}">
                                        @endforeach
                                </datalist>
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
