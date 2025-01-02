<nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0 d-flex justify-content-between">
        {{-- <h1 class="display-6 text-primary m-0"><i class="fas fa-envelope me-3"></i>Mailler</h1> --}}
        <img src="{{ asset('assets/admin/assets') }}/img/logo1.png" alt="Logo">
        <h4 class="m-2 text-dark"></h4>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}"
                class="nav-item nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}"
                class="nav-item nav-link {{ Request::routeIs('about') ? 'active' : '' }}">Profil</a>
            <a href="{{ route('galleries') }}"
                class="nav-item nav-link {{ Request::routeIs('galleries') ? 'active' : '' }}">Gallery</a>
            {{-- <a href="#" class="nav-item nav-link">Struktur organisasi</a> --}}
            <a href="{{ route('article') }}"
                class="nav-item nav-link {{ Request::routeIs('article') ? 'active' : '' }}">Pelayanan</a>
            <a href="{{ route('article2') }}"
                class="nav-item nav-link {{ Request::routeIs('article2') ? 'active' : '' }}">Kelembagaan</a>
            <a href="{{ route('contact') }}"
                class="nav-item nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Kontak</a>
        </div>
    </div>
</nav>
