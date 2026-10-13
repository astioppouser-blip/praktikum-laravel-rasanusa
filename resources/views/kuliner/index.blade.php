
@extends('layouts.app')

@section('title', 'Katalog Kuliner | RasaNusa')

@section('content')
<section class="page-heading">
    <p class="eyebrow">KATALOG RASANUSA</p>
    <h1>Jelajahi Kuliner <span>Nusantara</span></h1>
    <p>Enam hidangan pilihan yang mewakili kekayaan rasa Indonesia.</p>
</section>

<section class="catalog">
    <div class="food-grid">
        @foreach ($kuliner as $item)
            <article class="food-card">
                <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}">

                <div class="food-info">
                    <span class="category">{{ $item['kategori'] }}</span>
                    <h2>{{ $item['nama'] }}</h2>
                    <p class="origin">📍 {{ $item['asal'] }}</p>

                    <div class="food-bottom">
                        <strong>
                            Rp{{ number_format($item['harga'], 0, ',', '.') }}
                        </strong>

                        <a href="{{ route('kuliner.show', $item['slug']) }}">
                            Detail →
                        </a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection
