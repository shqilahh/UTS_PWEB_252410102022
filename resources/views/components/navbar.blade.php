@props(['username' => ''])

<header class="navbar">
    <div class="container navbar-inner">
        <a href="/dashboard?username={{ urlencode($username) }}" class="logo">nom<span>nom</span></a>

        <nav class="nav-links">
            <a href="/dashboard?username={{ urlencode($username) }}"
                class="{{ request()->is('dashboard') ? 'active' : '' }}">Home</a>
            <a href="/pengelolaan?username={{ urlencode($username) }}"
                class="{{ request()->is('pengelolaan') ? 'active' : '' }}">Pengelolaan</a>
            <a href="/profile?username={{ urlencode($username) }}"
                class="{{ request()->is('profile') ? 'active' : '' }}">Profile</a>
        </nav>

        <a href="/login" class="btn btn-outline">Logout</a>
    </div>
</header>
