@props(['recipe', 'username' => ''])

<a href="/resep/{{ $recipe['id'] }}?username={{ urlencode($username) }}" class="recipe-card">
    <div class="recipe-thumb">
        <img src="{{ asset($recipe['foto']) }}" alt="{{ $recipe['nama'] }}" loading="lazy">
        <small class="badge">{{ $recipe['kategori'] }}</small>
    </div>

    <div class="recipe-body">
        <h3>{{ $recipe['nama'] }}</h3>
        <p>{{ $recipe['deskripsi'] }}</p>

        <ul class="recipe-meta">
            <li>⏱ {{ $recipe['waktu'] }} menit</li>
            <li>💸 Rp{{ number_format($recipe['harga'], 0, ',', '.') }}</li>
        </ul>

        <div class="recipe-foot">
            <span class="level level-{{ strtolower($recipe['kesulitan']) }}">{{ $recipe['kesulitan'] }}</span>
            <span class="recipe-link">Lihat resep →</span>
        </div>
    </div>
</a>
