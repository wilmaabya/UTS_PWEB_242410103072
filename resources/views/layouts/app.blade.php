<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SnakeAdopt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #121212;
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    nav.navbar {
        background-color: #1e1e1e;
        border-bottom: 1px solid #333;
    }

    nav.navbar a.nav-link {
        color: #ccc !important;
        transition: color 0.3s;
    }

    nav.navbar a.nav-link:hover,
    nav.navbar a.nav-link.active {
        color: #00b894 !important;
    }

    .navbar-brand {
        font-weight: 600;
        color: #00b894 !important;
    }

    footer {
        background-color: #1e1e1e;
        color: #aaa;
        text-align: center;
        padding: 1rem;
        margin-top: 4rem;
        border-top: 1px solid #333;
    }
</style>
</head>

<body class="@yield('body_class')">

<nav class="navbar navbar-expand-lg navbar-dark px-4">
    <a class="navbar-brand" href="{{ route('dashboard') }}">🐍 SnakeAdopt</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('pengelolaan') ? 'active' : '' }}" href="{{ route('pengelolaan') }}">Pengelolaan</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a></li>
    </ul>
    </div>
</nav>

<div class="container-fluid py-5">
    @yield('content')
</div>

<footer>
    © 2025 SnakeAdopt | Platform Adopsi Ular
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
