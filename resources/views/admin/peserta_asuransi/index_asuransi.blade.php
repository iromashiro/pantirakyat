@extends('layouts.admin')
@section('konten')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">

                <h5 class="mb-0">Verifikasi Asuransi</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-flush" id="datatable-search">
                    <thead class="thead-light">
                        <tr>
                            <th>Verifikasi</th>
                            <th>Status Asuransi</th>
                            <th>Status Dinsos</th>
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

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peserta as $p)
                        <tr>
                            <td style="text-align: center">
                                @if ($p->verifikasi_asuransi == 0)
                                <a href="{{route('view.verifikasi.asuransi', $p->id)}}" class="btn btn-success">
                                    <i class="fas fa-user-check"></i>
                                </a>
                                <a href="" class="btn btn-danger"
                                    onclick="return confirm('Anda yakin ingin menghapus data?');">
                                    <i class="fas fa-trash"></i>
                                </a>
                                @else
                                <button class="btn btn-secondary">
                                    <i class="fas fa-user-check"></i>
                                </button>
                                <a href="" class="btn btn-danger"
                                    onclick="return confirm('Anda yakin ingin menghapus data?');">
                                    <i class="fas fa-trash"></i>
                                </a>
                                @endif

                            </td>
                            <td>
                                @if ($p->verifikasi_asuransi == 0)
                                <button class="btn btn-warning">
                                    Belum Verifikasi
                                </button>
                                @elseif ($p->verifikasi_asuransi == 1)
                                <button class="btn btn-danger">
                                    Sudah Verifikasi
                                </button>
                                @else
                                <button class="btn btn-danger">
                                    Verifikasi Ditolak
                                </button>
                                @endif
                            </td>
                            <td>
                                @if ($p->verifikasi_dinsos == 1)
                                <button class="btn btn-success">
                                    Sudah Verifikasi Dinsos
                                </button>
                                @else
                                <button class="btn btn-danger">
                                    Verifikasi Ditolak
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
    searchable: true,
    fixedHeight: true
  });
</script>
@endsection
