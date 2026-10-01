@extends('layouts.app')

@section('title', 'Tim Kami')

@section('content')

<section class="page-header">

    <span>TIM KAMI</span>

    <h1>Meet Our Team</h1>

    <p>
        Kenali para pengajar Learn.In Bimbingan Belajar
    </p>

</section>

<section class="team">

    @forelse($team as $member)

        <div class="team-card">

            @if($member->image)

                <img src="{{ asset('storage/'.$member->image) }}">

            @endif

            <h3>{{ $member->nama }}</h3>

            <span>{{ $member->jabatan }}</span>

            <p>
                {{ $member->deskripsi }}
            </p>

        </div>

    @empty

        <p>Belum ada anggota tim.</p>

    @endforelse

</section>

@endsection