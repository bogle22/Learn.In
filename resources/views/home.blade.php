@extends('layouts.app')

@section('title', 'Home - EduCenter Tutoring')

@section('content')

<section class="hero">

    <div class="hero-text">

        <span class="small-title">
           Learn.In Bimbingan Belajar
        </span>

        <h1>
            Belajar Lebih Mudah,
            <span>Menyenangkan.</span>
        </h1>

        <p>
            Bimbingan belajar yang membantu siswa
            meningkatkan kemampuan dan mencapai
            prestasi terbaik.
        </p>

        <a href="{{ route('programs') }}" class="button">
            Lihat Program
        </a>

    </div>

    <div class="hero-image">
        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80">
    </div>

</section>


<section class="section">

    <div class="section-title">
        <span>PROGRAM KAMI</span>
        <h2>Program Unggulan</h2>
        <p>
            Pilihan program belajar untuk kebutuhan siswa.
        </p>
    </div>

    <div class="cards">

        @forelse($programs as $program)

        <div class="card">

            @if($program->image)
                <img src="{{ asset('storage/'.$program->image) }}">
            @endif

            <h3>{{ $program->nama }}</h3>

            <p>{{ $program->deskripsi }}</p>

            <a href="{{ route('programs') }}">
                Lihat Program →
            </a>

        </div>

        @empty

        <div class="empty">
            Belum ada program.
        </div>

        @endforelse

    </div>

</section>


<section class="about-preview">

    <div>
        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80">
    </div>

    <div>

        <span class="small-title">
            TENTANG KAMI
        </span>

        <h2>
            Membangun Masa Depan
            Melalui Pendidikan
        </h2>

        <p>
            Learn.In Bimbingan Belajar hadir sebagai tempat belajar
            yang nyaman dan menyenangkan bagi siswa.
        </p>

        <a href="{{ route('about') }}" class="button">
            Selengkapnya
        </a>

    </div>

</section>

@endsection