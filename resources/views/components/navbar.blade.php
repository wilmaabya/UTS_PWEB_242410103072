<nav class="navbar navbar-expand-lg" style="background-color:#1a1a1a;">
  <div class="container">
    <a class="navbar-brand text-light fw-bold" href="/">🐍 SnakeAdopt</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active-link' : '' }}" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('tentang') ? 'active-link' : '' }}" href="/tentang">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('pengelolaan') ? 'active-link' : '' }}" href="/pengelolaan">Pengelolaan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
.nav-link {
  color: #bbb !important;
  position: relative;
  transition: color 0.3s ease;
}
.nav-link:hover {
  color: #00ff99 !important;
}
.active-link {
  color: #00ff99 !important;
  font-weight: bold;
}
.active-link::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -3px;
  width: 100%;
  height: 2px;
  background-color: #00ff99;
  border-radius: 2px;
  transition: width 0.3s ease;
}
</style>
