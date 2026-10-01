@extends('layouts.app')

@section('title', 'Program & Layanan')

@section('content')

<section class="page-header">

    <span>PROGRAM KAMI</span>

    <h1>Program & Layanan</h1>

    <p>
        Pilih program belajar yang sesuai dengan kebutuhanmu.
    </p>

</section>

<section class="section">

    <div class="cards">

        @forelse($programs as $program)

        <div class="program-card">

            @if($program->image)
                <img src="{{ asset('storage/'.$program->image) }}">
            @endif

            <div class="program-content">

                <h3>{{ $program->nama }}</h3>

                <p>{{ $program->deskripsi }}</p>

                @if($program->detail)
                    <p>{{ $program->detail }}</p>
                @endif

                <a href="{{ route('contact') }}" class="button">
                    Daftar Sekarang
                </a>

            </div>

        </div>

        @empty

        <p>Belum ada program.</p>

        @endforelse

    </div>

</section>

@endsection