<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 bg-white"
    id="sidenav-main" data-color="primary">
    <div class="sidenav-header text-center">
        <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
            {{-- <img src="{{ asset('assets/admin/assets/img') }}/2.png" class="bg-dark img-fluid" width="48"
                height="100" alt="logo Brand"> --}}
            <h5>Kelurahan Purwosari</h5>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('galleries.*') ? 'active' : '' }}"
                    href="{{ route('galleries.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-album-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Gallery</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('categories.*') ? 'active' : '' }}"
                    href="{{ route('categories.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('articles.*') ? 'active' : '' }}"
                    href="{{ route('articles.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pelayanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('articles2.*') ? 'active' : '' }}"
                    href="{{ route('articles2.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelembagaan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('penduduk.*') ? 'active' : '' }}"
                    href="{{ route('penduduk.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Penduduk</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('categories.*') ? 'active' : '' }}"
                    href="{{ route('categories.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kategori Post</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('posts.*') ? 'active' : '' }}" href="{{ route('posts.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Post</span>
                </a>
            </li> --}}


            {{-- <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('profile_') ? 'active' : '' }}" href="{{ route('profile_') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li> --}}
            @if (session()->get('admin-account.role_id') == 1)
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('users.*') ? 'active' : '' }}"
                        href="{{ route('users.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-users text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Users</span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('settings.*') ? 'active' : '' }}"
                        href="{{ route('settings.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-cog text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pengaturan</span>
                    </a>
                </li> --}}
            @endif
        </ul>
    </div>
</aside>
