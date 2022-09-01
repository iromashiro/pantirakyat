@extends('layouts.admin')
@section('konten')
@admin('super')
<div class="row mt-4 mb-4">
    <div class="col-lg-5 col-sm-6">
        <div class="card h-100">
            <div class="card-body pb-0 p-3 mt-4">
                <div class="row">
                    <div class="col-12 text-start">
                        <div class="chart">
                            <div id="chartContainer1" style="height: 450px; max-width: 920px; margin: 0px auto;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-sm-6 mt-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="chart">
                    <div id="chartContainer2" style="height: 500px; max-width: 920px; margin: 0px auto;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 mt-4">
    <div class="card">
        <div class="card-body p-3">
            <div class="chart">
                <div id="chartContainer3" style="height: 550px; max-width: 920px; margin: 0px auto;"></div>
            </div>
        </div>
    </div>
</div>
@endadmin

@admin('peserta')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">

                <h5 class="mb-0">List Data Peserta Asuransi</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-flush" id="datatable-search">
                    <thead class="thead-light">
                        <tr>
                            <th>Riwayat</th>
                            <th>Aksi</th>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peserta as $p)
                        <tr>
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
                            @if ($p->status_meninggal == 0)
                            <td>
                                <a href="{{route('view.peserta.meninggal', $p->id)}}" class="btn btn-danger">
                                    <i class="fas fa-skull-crossbones"></i>
                                </a>
                            </td>
                            @else
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fas fa-skull-crossbones"></i>
                                </button>
                            </td>
                            @endif
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

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endadmin
@endsection

@section('js')
<script>
    window.onload = function () {

    //CHART 1
    var chart = new CanvasJS.Chart("chartContainer1", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "Data Harian Per Kecamatan"
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y} Orang</strong>",
		indexLabel: "{name} - {y} Org",
		dataPoints: [
			{ y: {{$now_MUARAENIM}}, name: "Muara Enim", exploded: true },
			{ y: {{$now_LAWANGKIDUL}}, name: "Lawang Kidul" },
			{ y: {{$now_TANJUNGAGUNG}}, name: "Tanjung Agung" },
			{ y: {{$now_PANANGENIM}}, name: "Panang Enim" },
			{ y: {{$now_SDL}}, name: "Semendo Darat Laut" },
			{ y: {{$now_SDT}}, name: "Semendo Darat Tengah" },
			{ y: {{$now_SDU}}, name: "Semendo Darat Ulu"},
            { y: {{$now_UJANMAS}}, name: "Ujan Mas" },
			{ y: {{$now_GUMEG}}, name: "Gunung Megang" },
			{ y: {{$now_BELIMBING}}, name: "Belimbing" },
			{ y: {{$now_RAMBANG}}, name: "Rambang" },
			{ y: {{$now_RAMBANGNIRU}}, name: "Rambang Niru" },
			{ y: {{$now_EPD}}, name: "Empat Petulai Dangku"},
            { y: {{$now_GELUMBANG}}, name: "Gelumbang" },
			{ y: {{$now_LEMBAK}}, name: "Lembak" },
			{ y: {{$now_BD}}, name: "Belida Darat" },
			{ y: {{$now_MB}}, name: "Muara Belida" },
			{ y: {{$now_LUBAI}}, name: "Lubai" },
			{ y: {{$now_LUBAIULU}}, name: "Lubai Ulu"},
            { y: {{$now_SR}}, name: "Sungai Rotan" },
			{ y: {{$now_KELEKAR}}, name: "Kelekar" },
			{ y: {{$now_BENAKAT}}, name: "Benakat" }
		]
	}]
});
chart.render();

function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}

    // CHART 2
    var chart = new CanvasJS.Chart("chartContainer2", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title:{
            text: "Data Bulanan Asuransi Kematian"
        },
        axisY: {
            title: "Jumlah Orang"
        },
        data: [{
            type: "column",
            showInLegend: true,
            legendMarkerColor: "grey",
            legendText: "Orang/ Bulan",
            dataPoints: [
                { y: {{$jan}}, label: "Jan" },
                { y: {{$feb}},  label: "Feb" },
                { y: {{$mar}},  label: "Mar" },
                { y: {{$apr}},  label: "Apr" },
                { y: {{$mei}},  label: "Mei" },
                { y: {{$jun}}, label: "Jun" },
                { y: {{$jul}},  label: "Jul" },
                { y: {{$agu}},  label: "Agust" },
                { y: {{$sep}},  label: "Sept" },
                { y: {{$okt}},  label: "Okt" },
                { y: {{$nov}},  label: "Nov" },
                { y: {{$des}},  label: "Des" }
            ]
        }]
    });
    chart.render();

    // CHART 3

    var chart = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,

	title:{
		text:"Data Pertahun Per Kecamatan"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)"
	},
	data: [{
		type: "bar",
		name: "companies",
		axisYType: "secondary",
		color: "#014D65",
		dataPoints: [
            { y: 26, label: "Muara Enim"},
			{ y: 20, label: "Lawang Kidul" },
			{ y: 5, label: "Tanjung Agung" },
			{ y: 3, label: "Panang Enim" },
			{ y: 7, label: "Semendo Darat Laut" },
			{ y: 17, label: "Semendo Darat Tengah" },
			{ y: 22, label: "Semendo Darat Ulu"},
            { y: 20, label: "Ujan Mas" },
			{ y: 5, label: "Gunung Megang" },
			{ y: 3, label: "Belimbing" },
			{ y: 7, label: "Rambang" },
			{ y: 17, label: "Rambang Niru" },
			{ y: 22, label: "Empat Petulai Dangku"},
            { y: 20, label: "Gelumbang" },
			{ y: 5, label: "Lembak" },
			{ y: 3, label: "Belida Darat" },
			{ y: 7, label: "Muara Belida" },
			{ y: 17, label: "Lubai" },
			{ y: 22, label: "Lubai Ulu"},
            { y: 20, label: "Sungai Rotan" },
			{ y: 5, label: "Kelekar" },
			{ y: 3, label: "Benakat" }
		]
	}]
});
chart.render();
    }
</script>
@endsection
