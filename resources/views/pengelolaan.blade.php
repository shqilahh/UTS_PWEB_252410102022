@extends('layouts.app')

@section('title', 'Pengelolaan Resep')

@section('content')
<section class="page-head">
    <div class="container">
        <p class="eyebrow">Koleksi resep {{ $username ?: 'kamu' }}</p>
        <h1>Pengelolaan Resep</h1>
        <p class="muted">Pilih kategori atau cari nama resep untuk menyusun menu minggu ini.</p>
    </div>
</section>

<section class="container manage">
    <div class="toolbar">
        <div class="filter">
            <a href="/pengelolaan?username={{ urlencode($username) }}" class="{{ $pilihan === 'Semua' ? 'active' : '' }}">Semua</a>
            @foreach ($kategori as $item)
                <a href="/pengelolaan?username={{ urlencode($username) }}&kategori={{ urlencode($item) }}" class="{{ $pilihan === $item ? 'active' : '' }}">{{ $item }}</a>
            @endforeach
        </div>

        <form action="/pengelolaan" method="GET" class="search-row">
            <input type="hidden" name="username" value="{{ $username }}">
            <input type="hidden" name="kategori" value="{{ $pilihan }}">
            <input type="text" name="cari" value="{{ $cari }}" placeholder="Cari nama resep" aria-label="Cari nama resep">
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
    </div>

    <div class="summary">
        <p><strong>{{ count($recipes) }}</strong> resep ditampilkan</p>
        <p>Total estimasi biaya resep ditampilkan: <strong>Rp{{ number_format($totalBiaya, 0, ',', '.') }}</strong></p>
    </div>

    <div class="table-wrap">
        <table class="recipe-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Resep</th>
                    <th>Kategori</th>
                    <th>Biaya</th>
                    <th>Waktu</th>
                    <th>Kesulitan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($recipes as $recipe)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="/resep/{{ $recipe['id'] }}?username={{ urlencode($username) }}" class="table-link">
                                <img src="{{ asset($recipe['foto']) }}" alt="" class="table-photo">
                                {{ $recipe['nama'] }}
                            </a>
                        </td>
                        <td><span class="badge">{{ $recipe['kategori'] }}</span></td>
                        <td>Rp{{ number_format($recipe['harga'], 0, ',', '.') }}</td>
                        <td>{{ $recipe['waktu'] }} menit</td>
                        <td><span class="level level-{{ strtolower($recipe['kesulitan']) }}">{{ $recipe['kesulitan'] }}</span></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="empty">Resep "{{ $cari }}" belum ada. Coba kata kunci lain.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <p class="note">Estimasi biaya merupakan perkiraan per porsi dan bisa berbeda tergantung harga bahan di daerah masing-masing.</p>
</section>
@endsection
