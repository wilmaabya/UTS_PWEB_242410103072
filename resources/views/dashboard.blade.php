@extends('layouts.app')
@section('title', 'Dashboard')
@section('body_class', 'dashboard-page')
@section('content')
<div class="dashboard-container">

<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Selamat Datang di SnakeAdopt 🐍, {{ session('username') }}!</h1>
        <p class="hero-subtitle">Platform adopsi ular terpercaya. Temukan koleksi ular eksotis kami dan mulai petualangan adopsi Anda!</p>
        <div class="hero-buttons">
        <a href="{{ route('pengelolaan') }}" class="btn btn-primary-custom">
            🔍 Lihat Koleksi Ular
        </a>
        <a href="{{ route('profile') }}" class="btn btn-outline-custom">
            👤 Profile Saya
        </a>
        </div>
    </div>
    </div>

<div class="stats-section">
    <div class="stat-card">
        <div class="stat-icon">🐍</div>
        <div class="stat-number">{{ count($snakes) }}</div>
        <div class="stat-label">Ular Tersedia</div>
    </div>
    <div class="stat-card">
        <div class="stat-icon">✅</div>
        <div class="stat-number">120+</div>
        <div class="stat-label">Adopsi Sukses</div>
    </div>
    <div class="stat-card">
        <div class="stat-icon">⭐</div>
        <div class="stat-number">4.9</div>
        <div class="stat-label">Rating Platform</div>
    </div>
</div>

<div class="slideshow-section">
    <h2 class="section-title">🌟 Koleksi Ular Eksklusif</h2>
    <div class="slideshow-container">
        <div class="slideshow-track">
        @foreach($snakes as $snake)
            <div class="slide-card">
            <img src="{{ $snake['gambar'] }}" alt="{{ $snake['nama'] }}">
            <div class="slide-overlay">
                <h4>{{ $snake['nama'] }}</h4>
                <p>{{ $snake['jenis'] }}</p>
            </div>
            </div>
        @endforeach
        {{-- Duplicate untuk smooth infinite scroll --}}
        @foreach($snakes as $snake)
            <div class="slide-card">
            <img src="{{ $snake['gambar'] }}" alt="{{ $snake['nama'] }}">
            <div class="slide-overlay">
                <h4>{{ $snake['nama'] }}</h4>
                <p>{{ $snake['jenis'] }}</p>
            </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

</div>

<style>
    body.dashboard-page {
    background-color: #0b1117 !important;
    }

    .dashboard-container {
    max-width: 100%;
    padding: 0;
    }

  /* 🎯 Hero Section */
    .hero-section {
    background: linear-gradient(135deg, #1a1f24 0%, #0f1419 100%);
    padding: 80px 40px;
    text-align: center;
    border-bottom: 2px solid #00b894;
    }

    .hero-content {
    max-width: 900px;
    margin: 0 auto;
    }

    .hero-title {
    font-size: 3rem;
    font-weight: 800;
    color: #fff;
    margin-bottom: 20px;
    text-shadow: 0 0 30px rgba(0, 184, 148, 0.3);
    }

    .hero-subtitle {
    font-size: 1.2rem;
    color: #bbb;
    margin-bottom: 40px;
    line-height: 1.6;
    }

    .hero-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    }

    .btn-primary-custom {
    background: linear-gradient(135deg, #00b894 0%, #00d2a0 100%);
    color: #fff;
    padding: 16px 40px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1.1rem;
    text-decoration: none;
    box-shadow: 0 8px 20px rgba(0, 184, 148, 0.3);
    transition: all 0.3s ease;
    }

    .btn-primary-custom:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 184, 148, 0.5);
    }

    .btn-outline-custom {
    background: transparent;
    color: #00b894;
    padding: 16px 40px;
    border: 2px solid #00b894;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1.1rem;
    text-decoration: none;
    transition: all 0.3s ease;
    }

    .btn-outline-custom:hover {
    background: #00b894;
    color: #fff;
    transform: translateY(-4px);
    }


    .stats-section {
    display: flex;
    justify-content: center;
    gap: 40px;
    padding: 60px 40px;
    flex-wrap: wrap;
    }

    .stat-card {
    background: linear-gradient(135deg, #1a1f24 0%, #252b31 100%);
    border-radius: 20px;
    padding: 40px 60px;
    text-align: center;
    box-shadow: 0 8px 24px rgba(0, 184, 148, 0.15);
    border: 1px solid #2a3038;
    transition: all 0.3s ease;
        }

    .stat-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 32px rgba(0, 184, 148, 0.3);
    }

    .stat-icon {
    font-size: 3rem;
    margin-bottom: 12px;
    }

    .stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #00b894;
    margin-bottom: 8px;
    }

    .stat-label {
    font-size: 1rem;
    color: #aaa;
    }


    .slideshow-section {
    padding: 60px 0;
    overflow: hidden;
    }

    .section-title {
    text-align: center;
    font-size: 2.2rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 40px;
    }

    .slideshow-container {
    position: relative;
    overflow: hidden;
    padding: 20px 0;
    }

    .slideshow-track {
    display: flex;
    gap: 32px;
    animation: scroll 30s linear infinite;
    }

    @keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
    }

    .slideshow-track:hover {
    animation-play-state: paused;
    }

    .slide-card {
    flex: 0 0 auto;
    width: 400px;
    height: 280px;
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(0, 184, 148, 0.2);
    transition: all 1s ease;
    }

    .slide-card:hover {
    transform: translateY(-8px) scale(1.05);
    box-shadow: 0 12px 32px rgba(0, 184, 148, 0.4);
    }

    .slide-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    }

    .slide-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
    padding: 24px;
    transform: translateY(100%);
    transition: all 0.5s ease;
    }

    .slide-card:hover .slide-overlay {
    transform: translateY(0);
    }

    .slide-overlay h4 {
    color: #fff;
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 4px;
    }

    .slide-overlay p {
    color: #00b894;
    font-size: 0.95rem;
    margin: 0;
    }


    @media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }

    .hero-buttons {
        flex-direction: column;
    }

    .stats-section {
        flex-direction: column;
        gap: 20px;
    }

    .slide-card {
        width: 300px;
        height: 220px;
    }
    }
</style>
@endsection
