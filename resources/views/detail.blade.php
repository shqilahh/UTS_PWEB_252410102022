@extends('layouts.app')

@section('title', $recipe['nama'])

@section('content')
<section class="page-head">
    <div class="container detail-head">
        <div>
            <a href="/dashboard?username={{ urlencode($username) }}" class="back">← Kembali ke dashboard</a>
            <h1>{{ $recipe['nama'] }}</h1>
            <p class="muted">{{ $recipe['deskripsi'] }}</p>

            <ul class="detail-meta">
                <li><span class="badge">{{ $recipe['kategori'] }}</span></li>
                <li>⏱ {{ $recipe['waktu'] }} menit</li>
                <li>💸 Rp{{ number_format($recipe['harga'], 0, ',', '.') }}</li>
                <li><span class="level level-{{ strtolower($recipe['kesulitan']) }}">{{ $recipe['kesulitan'] }}</span></li>
            </ul>
        </div>

        <img src="{{ asset($recipe['foto']) }}" alt="{{ $recipe['nama'] }}" class="detail-photo">
    </div>
</section>

<section class="container detail">
    <div class="detail-grid">
        <div class="detail-card">
            <h2>Bahan</h2>
            <ul class="bahan-list">
                @foreach ($recipe['bahan'] as $bahan)
                    <li>{{ $bahan }}</li>
                @endforeach
            </ul>
        </div>

        <div class="detail-card">
            <h2>Cara Membuat</h2>
            <ol class="langkah-list">
                @foreach ($recipe['langkah'] as $langkah)
                    <li>{{ $langkah }}</li>
                @endforeach
            </ol>
        </div>
    </div>

    <p class="note">Estimasi biaya merupakan perkiraan per porsi dan bisa berbeda tergantung harga bahan di daerah masing-masing.</p>

    <h2 class="more-title">Resep lainnya</h2>
    <div class="recipe-grid">
        @foreach ($lainnya as $item)
            <x-recipe-card :recipe="$item" :username="$username" />
        @endforeach
    </div>
</section>
@endsection
