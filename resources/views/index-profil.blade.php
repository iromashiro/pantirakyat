@extends('layouts.guest')
@section('content')
<br>

@foreach ($profil as $p)
<div data-card-height="140" class="card card-style rounded-m shadow-xl bg-18">
    <div class="card-center ms-3">
        <h2 class="color-white">{{ $p->nama_menu }}</h2>
        {!! Str::limit($p->isi_menu, 20) !!}
    </div>
    <div class="card-center me-3">
        <a href="{{ route('profil.satu', $p->slug) }}" class="float-end bg-highlight btn btn-xs text-uppercase font-900 rounded-xl font-11">Lihat Profil</a>
    </div>
    <div class="card-overlay bg-black opacity-90"></div>
</div>
@endforeach


@endsection
