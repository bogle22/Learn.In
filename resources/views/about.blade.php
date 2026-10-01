@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<section class="page-header">

    <span>TENTANG KAMI</span>

    <h1>Membangun Masa Depan<br>Melalui Pendidikan</h1>

    <p>
        Mengenal lebih dekat Learn.In Bimbingan Belajar
    </p>

</section>

<section class="about-page">

    <div>
        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=900&q=80">
    </div>

    <div>

        <h2>Learn.In Bimbingan Belajar</h2>

        <p>
            Learn.In adalah platform bimbingan belajar yang hadir untuk membantu siswa belajar dengan cara yang lebih mudah, nyaman, dan menyenangkan.
             Kami menyediakan berbagai program pembelajaran yang dirancang untuk membantu siswa memahami materi dan meningkatkan kemampuan akademiknya.
        </p>

        <p>
            Kami percaya bahwa belajar tidak harus membosankan.
             Dengan pengajar yang berpengalaman dan suasana belajar yang interaktif,
             Learn.In ingin menjadi tempat bagi siswa untuk berkembang, meningkatkan kepercayaan diri, dan meraih prestasi.
        </p>

        <a href="{{ route('contact') }}" class="button">
            Hubungi Kami
        </a>

    </div>

</section>

<section class="vision">

    <div class="card">
        <h3>Visi</h3>
        <p>
            Menjadi bimbingan belajar yang membantu siswa berkembang dan
             meraih masa depan yang lebih baik.
        </p>
    </div>

    <div class="card">
        <h3>Misi</h3>
        <p>
            Memberikan pembelajaran yang mudah dipahami.
            Membantu meningkatkan prestasi akademik siswa.
            Menciptakan suasana belajar yang nyaman dan menyenangkan.
            Membantu siswa menjadi lebih percaya diri dalam belajar.
        </p>
    </div>

</section>

@endsection