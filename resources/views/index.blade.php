@extends('layouts.guest')
@section('content')
<div class="content mt-2 notch-clear">
    <div class="d-flex">
        <div class="align-self-center">
            <p class="mb-n1 font-400 font-12 opacity-50">Selamat Datang</p>
            <h1 class="font-30">{{ env('NAME') }}</h1>
        </div>
    </div>
</div>

<div class="divider divider-margins"></div>

<div class="splide single-slider slider-no-arrows slider-no-dots" id="single-slider-1">
    <div class="splide__track">
        <div class="splide__list">
            @foreach ($berita_terbaru as $bt)
            <div class="splide__slide">
                <div class="card card-style" data-card-height="330">
                    <img src="{{ URL::asset($bt->thumbnail) }}" height="330px">
                    <div class="card-top mt-3 me-3">
                        <h5 class="badge bg-blue-dark color-white px-1 py-1 font-12 mb-3 float-end">BERITA</h5>
                    </div>
                    <div class="card-center ps-3">
                        <h1 class="color-white font-28">
                            {{ $bt->judul }}
                        </h1>
                        <span class="font-11 text-uppercase color-white font-800 d-block mb-3">{{ $bt->created_at }}</span>
                    </div>
                    <div class="card-bottom mb-3 ms-3">
                        <a href="{{ route('berita.satu', $bt->slug) }}" class="btn btn-m rounded-sm bg-blue-dark color-white mt-3 text-uppercase font-800">Baca Selengkapnya!</a>
                    </div>
                    <div class="card-overlay bg-black opacity-80"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="card card-style">
    <div class="content">
        <h3>Pengumuman</h3>
        <p>
            Pengumuman Terbaru dari Dinas Sosial Kabupaten Muara Enim.
        </p>

        @foreach ($pengumuman as $p)
        <a href="{{ route('pengumuman.satu', $p->slug) }}" class="d-flex pb-4">
            <div class="align-self-center">
                <img src="{{ $p->thumbnail }}" class="rounded-sm" width="50">
            </div>
            <div class="align-self-center ps-3">
                <h5 class="mb-n1">{{ $p->judul }}</h5>
                <p class="font-600 opacity-40 mb-0">{{ $p->created_at }}</p>
            </div>
            <div class="align-self-center ms-auto">
                <i class="fa fa-play-circle font-24 color-highlight"></i>
            </div>
        </a>
        @endforeach

    </div>
</div>


<div class="card card-style bg-28">
    <div class="card-body my-3">
        <h5 class="badge bg-highlight color-white px-1 py-1 font-12 mb-3">Download</h5>
        <h1 class="color-white">
        </h1>
        <p class="color-white opacity-60 mb-0">
            Silahkan klik download untuk mengunduh form asuransi Kematian
        </p>
        <a href="{{ URL::asset('guest/form_klaim.pdf') }}" class="btn btn-s rounded-sm bg-highlight color-white mt-3 text-uppercase font-800" download="">Download Form</a>
    </div>
    <div class="card-overlay bg-black opacity-70"></div>
</div>
@endsection
