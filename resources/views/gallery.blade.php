@extends('layouts.app')

@section('title', 'Galeri & Portfolio')

@section('content')

<section class="page-header">

    <span>GALERI & PORTFOLIO</span>

    <h1>Galeri & Prestasi</h1>

    <p>
        Dokumentasi kegiatan Learn.In Bimbingan Belajar.
    </p>

</section>

<section class="gallery">

    @forelse($galleries as $item)

        <div class="gallery-item">

            <img src="{{ asset('storage/'.$item->image) }}">

            <div>
                <h3>{{ $item->judul }}</h3>
            </div>

        </div>

    @empty

        <p>Belum ada foto.</p>

    @endforelse

</section>

@endsection