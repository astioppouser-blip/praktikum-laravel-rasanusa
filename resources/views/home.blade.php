
@extends('layouts.app')

@section('title', 'Beranda | RasaNusa')

@section('content')
<section class="hero">
    <div class="hero-text">
        <p class="eyebrow">JELAJAHI KEKAYAAN KULINER</p>
        <h1>Setiap Rasa Punya <span>Cerita.</span></h1>
        <p>
            Temukan beragam makanan khas Indonesia,
            dari hidangan tradisional hingga makanan favorit
            yang selalu dirindukan.
        </p>

        <a href="{{ route('kuliner.index') }}" class="btn">
            Jelajahi Kuliner →
        </a>
    </div>

    <div class="hero-image">
        <img
            src="https://images.unsplash.com/photo-1547592180-85f173990554?w=1000"
            alt="Hidangan makanan"
        >
    </div>
</section>

<section class="intro">
    <p class="eyebrow">DARI SABANG SAMPAI MERAUKE</p>
    <h2>Kenali Kuliner Indonesia</h2>
    <p>
        RasaNusa adalah katalog sederhana untuk mengenal nama,
        asal daerah, harga, dan cerita di balik makanan Nusantara.
    </p>
    <a href="{{ route('kuliner.index') }}" class="text-link">
        Lihat semua makanan →
    </a>
</section>
@endsection
