@extends('layouts.app')
@section('title', 'Pengelolaan Ular')
@section('body_class', 'pengelolaan-page')

@section('content')
<div class="pengelolaan-container py-5">
    <div class="bg-dark p-4 rounded-4 shadow">
    <h2 class="text-light mb-4 fw-bold">🐍 Ular Siap Diadopsi</h2>

    <div class="horizontal-scroll">
        @foreach ($data as $ular)
        <div class="snake-card">
            <img src="{{ $ular['gambar'] }}" alt="{{ $ular['nama'] }}">
            <div class="snake-info">
                <h4>{{ $ular['nama'] }}</h4>
            <p>{{ $ular['jenis'] }} — {{ $ular['umur'] }}</p>
            <a href="#" class="btn btn-success btn-sm">Lihat Detail</a>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>

<style>
    body.pengelolaan-page {
    background-color: #0b1117 !important;
    color: white;
    }

    .pengelolaan-container {
    max-width: 100% !important;
    padding: 0 40px !important;
    }

  /* 🐍 Horizontal scroll container */
    .horizontal-scroll {
    display: flex !important;
    flex-wrap: nowrap !important;
    overflow-x: auto !important;
    gap: 32px !important;
    padding: 20px 5px !important;
    scroll-behavior: smooth;
    }

    .horizontal-scroll::-webkit-scrollbar {
    height: 10px;
    }

    .horizontal-scroll::-webkit-scrollbar-thumb {
    background: #16a34a;
    border-radius: 10px;
    }

  /* 🧱 CARD BESAR - INI YANG PENTING */
    .snake-card {
    background-color: #1a1f24 !important;
    border-radius: 22px !important;
    flex: 0 0 auto !important;
    min-width: 520px !important; /* ✅ GANTI KE MIN-WIDTH */
    max-width: 520px !important; /* ✅ TAMBAHKAN MAX-WIDTH */
    width: 520px !important;     /* ✅ TETAP ADA WIDTH */
    box-shadow: 0 0 18px rgba(0, 255, 128, 0.25) !important;
    transition: all 0.3s ease;
    overflow: hidden; /* ✅ PENTING biar gambar ga keluar */
    }

    .snake-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 0 30px rgba(0, 255, 128, 0.45);
    }

  /* 🖼️ GAMBAR BESAR */
    .snake-card img {
    width: 100% !important;
    height: 360px !important;
    object-fit: cover !important;
    display: block !important; /* ✅ Hilangkan space bawah img */
    border-top-left-radius: 22px;
    border-top-right-radius: 22px;
    background: #222;
    }

  /* 📝 Info card */
    .snake-info {
    padding: 24px !important;
    }

    .snake-info h4 {
    color: white !important;
    font-weight: 600;
    margin-bottom: 8px;
    font-size: 1.4rem; /* ✅ Biar text lebih besar */
    }

    .snake-info p {
    color: #bbb !important;
    font-size: 1rem;
    margin-bottom: 12px;
    }
</style>
@endsection
