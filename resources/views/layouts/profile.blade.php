@extends('layouts.app')
@section('title', 'Profile')
@section('body_class', 'profile-page')

@section('content')
<div class="profile-container">
    <div class="row g-4">

    <div class="col-lg-4">
        <div class="profile-card">
        <div class="profile-avatar">
            <img src="https://ui-avatars.com/api/?name=Wilma+Abya&size=120&background=00b894&color=fff&bold=true" alt="Avatar">
        </div>
        <h3 class="profile-name">Wilma Abya</h3>
        <p class="profile-role">Adopter Pemula</p>

        <button class="btn btn-primary w-100 mb-2">✏️ Edit Profile</button>
        <button class="btn btn-outline-secondary w-100">⚙️ Pengaturan</button>
        </div>
    </div>

    <div class="col-lg-8">

        <div class="info-card mb-4">
        <h4>👤 Informasi Profile</h4>
        <div class="info-list">
            <div class="info-item">
                <span class="info-label">📛 Username:</span>
            <span class="info-value">Wilma Abya</span>
        </div>
        <div class="info-item">
            <span class="info-label">✉️ Email:</span>
            <span class="info-value">abbiyahwilma@gmail.com</span>
        </div>
        <div class="info-item">
            <span class="info-label">📞 Telepon:</span>
            <span class="info-value">+62 811-2630-304</span>
        </div>
        <div class="info-item">
            <span class="info-label">📍 Lokasi:</span>
            <span class="info-value">Jember, Indonesia</span>
        </div>
        <div class="info-item">
            <span class="info-label">🎂 Bergabung:</span>
            <span class="info-value">10 Oktober 2025</span>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

<style>
    body.profile-page {
    background-color: #0b1117 !important;
    }

    .profile-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px;
    }

    .profile-card {
    background: linear-gradient(135deg, #1a1f24 0%, #252b31 100%);
    border-radius: 24px;
    padding: 32px 24px;
    text-align: center;
    box-shadow: 0 8px 24px rgba(0, 184, 148, 0.15);
    border: 1px solid #2a3038;
    }

    .profile-avatar {
    margin-bottom: 20px;
    }

    .profile-avatar img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 4px solid #00b894;
    box-shadow: 0 0 20px rgba(0, 184, 148, 0.4);
    }

    .profile-name {
    color: #fff;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 4px;
    }

    .profile-role {
    color: #00b894;
    font-size: 1rem;
    margin-bottom: 24px;
    }

    .info-card, .bio-card {
    background: linear-gradient(135deg, #1a1f24 0%, #252b31 100%);
    border-radius: 24px;
    padding: 28px;
    box-shadow: 0 8px 24px rgba(0, 184, 148, 0.15);
    border: 1px solid #2a3038;
    }

    .info-card h4, .bio-card h4 {
    color: #fff;
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
    }

    .info-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
    }

    .info-item {
    display: flex;
    justify-content: space-between;
    padding: 12px 0;
    border-bottom: 1px solid #2a3038;
    }

    .info-item:last-child {
    border-bottom: none;
    }

    .info-label {
    color: #aaa;
    font-weight: 500;
    }

    .info-value {
    color: #fff;
    font-weight: 600;
    }

    .bio-card p {
    color: #ccc;
    line-height: 1.8;
    font-size: 1rem;
    }


</style>
@endsection
