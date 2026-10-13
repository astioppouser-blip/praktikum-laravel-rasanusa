
@extends('layouts.app')

@section('title', $item['nama'] . ' | RasaNusa')

@section('content')
<section class="detail-container">
    <a href="{{ route('kuliner.index') }}" class="back-link">
        ← Kembali ke katalog
    </a>

    <div class="detail-card">
        <div class="detail-image">
            <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}">
        </div>

        <div class="detail-info">
            <span class="category">{{ $item['kategori'] }}</span>

            <h1>{{ $item['nama'] }}</h1>

            <p class="origin">📍 {{ $item['asal'] }}</p>

            <p class="description">{{ $item['deskripsi'] }}</p>

            <div class="detail-price">
                <span>Perkiraan harga</span>
                <strong>
                    Rp{{ number_format($item['harga'], 0, ',', '.') }}
                </strong>
            </div>

            <a href="{{ route('kuliner.index') }}" class="btn">
                Lihat Kuliner Lainnya
            </a>
        </div>
    </div>
</section>
@endsection
