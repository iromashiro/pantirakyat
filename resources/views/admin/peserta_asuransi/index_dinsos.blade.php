@extends('layouts.admin')
@section('konten')

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">

                <form action="{{ route('print.dinsos') }}" method="GET">
                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="input-group input-group-dynamic">
                                <select name="bulan" class="form-control w-100">
                                    <option value="0" selected disabled> Pilih Bulan</option>
                                    <option value="01"> Januari</option>
                                    <option value="02"> Februari</option>
                                    <option value="03"> Maret</option>
                                    <option value="04"> April</option>
                                    <option value="05"> Mei</option>
                                    <option value="06"> Juni</option>
                                    <option value="07"> Juli</option>
                                    <option value="08"> Agustus</option>
                                    <option value="09"> September</option>
                                    <option value="10"> Oktober</option>
                                    <option value="11"> November</option>
                                    <option value="12"> Desember</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group input-group-dynamic">
                                <select name="tahun" class="form-control w-100">
                                    <option selected disabled>Tahun</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Print</button>
                </form>

            </div>

            <div class="table-responsive">
                <table class="table table-flush" id="datatable-search">
                    <thead class="thead-light">
                        <tr>
                            <th>Verifikasi</th>
                            <th>Riwayat</th>
                            <th>Status</th>
                            <th>No KK</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Status Kawin</th>
                            <th>Pekerjaan</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peserta as $p)
                        <tr>
                            <td style="text-align: center">
                                @if ($p->verifikasi_dinsos == 0)
                                <a href="{{route('view.verifikasi.peserta', $p->id)}}" class="btn btn-success">
                                    <i class="fas fa-user-check"></i>
                                </a>
                                @else
                                <button class="btn btn-secondary">
                                    <i class="fas fa-user-check"></i>
                                </button>
                                @endif

                            </td>
                            <td>
                                @if ($p->verifikasi_dinsos == 0)
                                <button class="btn btn-warning">
                                    Belum Verifikasi
                                </button>
                                @elseif ($p->verifikasi_dinsos == 1)
                                <button class="btn btn-success">
                                    Sudah Verifikasi
                                </button>
                                @else
                                <button class="btn btn-danger">
                                    Verifikasi Ditolak
                                </button>
                                @endif
                            </td>
                            <td>
                                @if ($p->status_meninggal == 0)
                                <button class="btn btn-success">
                                    Hidup
                                </button>
                                @else
                                <button class="btn btn-danger">
                                    Meninggal
                                </button>
                                @endif
                            </td>
                            <td>{{$p->no_kk}}</td>
                            <td>{{$p->nik}}</td>
                            <td>{{$p->nama_lengkap}}</td>
                            <td>{{$p->tempat_lahir}}</td>
                            <td>{{$p->tanggal_lahir}}</td>
                            <td>
                                @if ($p->jenis_kelamin == 1)
                                Laki-laki
                                @else
                                Perempuan
                                @endif
                            </td>
                            <td>
                                @if ($p->status_kawin == 1)
                                Belum Kawin
                                @elseif ($p->status_kawin == 2)
                                Kawin
                                @elseif ($p->status_kawin == 3)
                                Duda
                                @elseif ($p->status_kawin == 4)
                                Janda
                                @endif
                            </td>
                            <td>{{$p->pekerjaan}}</td>
                            <td>{{$p->alamat}}</td>
                            <td>{{$p->kecamatan}}</td>
                            <td>{{$p->kelurahan}}</td>
                            <td>

                                <a href="" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data?');">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{URL::asset('belakang/js/plugins/datatables.js')}}"></script>
<script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true
        , fixedHeight: true
    });

</script>
@endsection
