@extends('layouts.guest')
@section('content')
<div class="card card-style mt-4">
    <div class="content">
        <h3>Berita</h3>
        <br>
        @foreach ($berita as $b)
        <a href="#" class="d-flex pb-3">
            <div class="align-self-center">
                <img src="{{ URL::asset($b->thumbnail) }}" class="rounded-sm" width="100">
            </div>
            <div class="align-self-center ps-3">
                <h5 class="mb-n1 pe-3">{{ $b->judul }}</h5>
                <p class="font-600 opacity-40 mb-0">{{ $b->created_at }}</p>
            </div>
        </a>

        @endforeach

    </div>
</div>

<div class="card card-style mt-4">
    <div class="content">
        <h3>Pengumuman Terbaru</h3>
        <br>

        @foreach ($pengumuman as $p)
        <a href="#" class="d-flex">
            <div class="align-self-center">
                <img src="{{ $p->thumbnail }}" class="rounded-sm" width="60">
            </div>
            <div class="align-self-center ps-3">
                <h5 class="mb-n1">{{ $p->judul }}</h5>
                <p class="font-600 opacity-40 mb-0">{{ $p->created_at }}</p>
            </div>
            <div class="align-self-center ms-auto">
                <i class="fa fa-chevron-right font-2- pe-1 color-blue-dark"></i>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
