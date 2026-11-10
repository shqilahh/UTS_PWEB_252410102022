<section class="tips">
    <div class="container">
        <div class="section-head">
            <h2>Tips Dapur</h2>
            <p>Biar masak tetap hemat dan praktis setiap hari.</p>
        </div>

        <div class="tips-grid">
            @foreach ($tips as $tip)
                <div class="tip">
                    <span class="tip-number">{{ $tip['nomor'] }}</span>
                    <h3>{{ $tip['judul'] }}</h3>
                    <p>{{ $tip['isi'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
