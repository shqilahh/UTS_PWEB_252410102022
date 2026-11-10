
@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<section class="page-head">
    <div class="container">
        <p class="eyebrow">Profil pengguna</p>
        <h1>Profile</h1>
    </div>
</section>

<section class="container profile">
    <div class="profile-card">
        <div class="profile-avatar">
            {{ strtoupper(substr($username, 0, 1)) }}
        </div>

        <h2>{{ $username }}</h2>
        <p>Selamat datang di NOMNOM!</p>
    </div>
</section>
@endsection
