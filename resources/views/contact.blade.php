@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')

<section class="contact">

    <div class="contact-info">

        <div class="info-card">
            <h3>Alamat</h3>
            <p>Bogor, Indonesia</p>
        </div>

        <div class="info-card">
            <h3>Telepon</h3>
            <p>0838-7227-6605</p>
        </div>

        <div class="info-card">
            <h3>Email</h3>
            <p>info@learnin.com</p>
        </div>

    </div>


    <div class="contact-form">

        <h2>Kirim Pesan</h2>

        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST">

            @csrf

            <input type="text" name="nama" placeholder="Nama" required>

            <input type="email" name="email" placeholder="Email" required>

            <input type="text" name="telepon" placeholder="Nomor Telepon">

            <textarea
                name="pesan"
                placeholder="Pesan"
                rows="6"
                required
            ></textarea>

            <button type="submit" class="button">
                Kirim Pesan
            </button>

        </form>

    </div>

</section>


{{-- PETA --}}
<section class="map-section">

    <div class="section-title">
        <span>LOKASI KAMI</span>
        <h2>Temukan Kami</h2>
        <p>Kunjungi Learn.In di lokasi kami.</p>
    </div>

    <div class="map-container">
        <iframe
            src="https://www.google.com/maps?q=Bogor%2C%20Indonesia&output=embed"
            width="100%"
            height="400"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

</section>

@endsection