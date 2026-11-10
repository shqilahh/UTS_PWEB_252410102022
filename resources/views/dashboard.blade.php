@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div class="hero-text">
            <p class="eyebrow">Halo, {{ $username }}!</p>
            <h1>Mau masak apa hari ini?</h1>
            <p class="muted">Resep praktis dengan bahan warung, modal di bawah Rp10.000, dan matang kurang dari 20 menit.</p>

            <form action="/pengelolaan" method="GET" class="search-box">
                <input type="hidden" name="username" value="{{ $username }}">
                <label for="cari">Cari resep</label>
                <div class="search-row">
                    <input type="text" id="cari" name="cari" placeholder="Misal: telur, mie, tahu">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
                <div class="tags">
                    @foreach ($kategori as $item)
                        <a href="/pengelolaan?username={{ urlencode($username) }}&kategori={{ urlencode($item) }}">{{ $item }}</a>
                    @endforeach
                </div>
            </form>
        </div>

        <div class="hero-art">
            <div class="plate plate-big">
                <span class="plate-main">🍛</span>
                <span class="plate-side side-1">🍳</span>
                <span class="plate-side side-2">🥬</span>
                <span class="plate-side side-3">🌶️</span>
                <span class="plate-side side-4">🍌</span>
            </div>
        </div>
    </div>
</section>

<section class="stats">
    <div class="container stats-grid">
        <div>
            <strong>{{ $stats['total'] }}</strong>
            <span>Resep tersedia</span>
        </div>
        <div>
            <strong>Rp{{ number_format($stats['termurah'], 0, ',', '.') }}</strong>
            <span>Modal paling murah</span>
        </div>
        <div>
            <strong>{{ $stats['cepat'] }}</strong>
            <span>Resep 10 menit</span>
        </div>
    </div>
</section>

<section class="popular">
    <div class="container">
        <div class="section-head">
            <h2>Resep Populer</h2>
            <p>Pilih resep untuk melihat bahan dan cara membuatnya.</p>
        </div>

        <div class="recipe-grid">
            @foreach ($recipes as $recipe)
                <x-recipe-card :recipe="$recipe" :username="$username" />
            @endforeach
        </div>

        <div class="center">
            <a href="/pengelolaan?username={{ urlencode($username) }}" class="btn btn-primary">Lihat semua resep</a>
        </div>
    </div>
</section>

@include('partials.recipe-tip', ['tips' => $tips])

<section class="container">
    <div class="cta">
        <div class="cta-art">👩‍🍳</div>
        <div>
            <h2>Punya resep andalan?</h2>
            <p>Kumpulkan resep favoritmu di halaman pengelolaan dan atur menu mingguanmu.</p>
            <a href="/pengelolaan?username={{ urlencode($username) }}" class="btn btn-primary">Buka koleksi resep</a>
        </div>
    </div>
</section>
@endsection
