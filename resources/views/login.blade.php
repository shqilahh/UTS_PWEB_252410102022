@extends('layouts.app')

@section('title', 'Login')
@section('hideNav', true)

@section('content')
<section class="login-page">
    <div class="login-card">
        <div class="login-art">
            <div class="plate">
                <span class="plate-main">🍛</span>
                <span class="plate-side side-1">🥚</span>
                <span class="plate-side side-2">🌶️</span>
                <span class="plate-side side-3">🥬</span>
            </div>
            <p>Masak Enak, Hemat, Nggak Ribet.</p>
        </div>

        <div class="login-form">
            <p class="logo">nom<span>nom</span></p>
            <h1>Lapar tapi dompet tipis?</h1>
            <p class="muted">Masukkan username untuk melihat resep hari ini.</p>

            @if (session('error'))
                <p class="alert">{{ session('error') }}</p>
            @endif

            <form action="/dashboard" method="GET">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="contoh: troii" maxlength="20" required autofocus>
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            </form>
        </div>
    </div>
</section>
@endsection
