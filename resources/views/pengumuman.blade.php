@extends('layouts.guest')
@section('content')
<div class="content">
    <h1 class="font-30 pb-3">
        {{ $pengumuman->judul }}
    </h1>
    <div class="d-flex">
        <div class="me-auto"><span class="badge no-click bg-red-dark p-2 text-uppercase rounded-s mb-3">Pengumuman</span></div>
        <div class="mx-auto"><span class="font-12"><i class="far fa-clock pe-2"></i>{{ $pengumuman->created_at }}</span></div>
    </div>

    <img src="{{ URL::asset($pengumuman->thumbnail) }}" class="img-fluid rounded-m">

</div>

<div class="card card-style mt-4">
    <div class="content">
        {!! $pengumuman->isi_pengumuman !!}
        <div class="d-flex">
            <a href="#" class="mx-auto shareToFacebook icon icon-xs rounded-sm bg-facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="mx-auto shareToTwitter icon icon-xs rounded-sm bg-twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="mx-auto shareToWhatsApp icon icon-xs rounded-sm bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="mx-auto shareToLinkedIn icon icon-xs rounded-sm bg-linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="mx-auto shareToMail icon icon-xs rounded-sm bg-mail"><i class="fa fa-envelope"></i></a>
        </div>
    </div>
</div>

<div class="card card-style bg-28 mb-3">
    <div class="card-body my-3">
        <h5 class="badge bg-highlight color-white px-1 py-1 font-12 mb-3">Download Form</h5>
        <h1 class="color-white">
            Download
            <br>Form Asuransi
        </h1>
        <p class="color-white opacity-60 mb-0">
            Silahkan klik download untuk mendownload form asuransi!
        </p>
        <a href="#" class="btn btn-s rounded-sm bg-highlight color-white mt-3 text-uppercase font-800"><i class="fa fa-play-circle pe-2"></i> WATCH LIVE</a>
    </div>
    <div class="card-overlay bg-black opacity-70"></div>
</div>


<div class="card card-style">
    <div class="content mb-2">
        <h3>Berita Lainnya</h3>
        <p>
            Berita Terbaru Lainnya
        </p>
        @foreach ($berita_lain as $bl)
        <a href="{{ route('berita.satu', $bl->slug) }}">
            <div class="d-flex mb-3">
                <div class="align-self-center me-auto">
                    <img src="{{ URL::asset($bl->thumbnail) }}" class="rounded-m me-3" width="140px" height="90px">
                    <span class="badge text-uppercase px-2 py-1 bg-blue-dark d-block me-3 mt-n3 rounded-m under-slider-btn">BERITA</span>
                </div>
                <div class="align-self-center w-100">
                    <h5 class="font-15 pt-2">{{ $bl->judul }}</h5>
                    <span class="color-theme font-11 opacity-50">{{ $bl->created_at }}</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
