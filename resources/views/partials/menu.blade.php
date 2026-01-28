<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">

        {{-- LOGO --}}
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <img src="{{ asset('storage/' . $company->logo_oscuro) }}" height="60" alt="Logo">
        </a>

        {{-- TOGGLER MOBILE --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            {{-- MENU CENTRO --}}
            <ul class="navbar-nav mx-auto gap-lg-4">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('store.tienda') ? 'active' : '' }}" href="{{ route('store.tienda') }}">Tienda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">Contactos</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a></li>
            </ul>

            {{-- ICONOS DERECHA --}}
            <div class="d-flex align-items-center gap-3">

                {{-- SEARCH --}}
                <div class="search-wrapper">
                    <button class="icon-btn" id="btnSearch" type="button">
                        <i class="bi bi-search"></i>
                    </button>

                    <form action="{{ route('store.tienda') }}" method="GET" class="search-form">
                        <input type="text" name="q" placeholder="Buscar productos..." autofocus>
                    </form>
                </div>

                {{-- USER --}}
                @auth
                    <div class="dropdown">

                        <button class="btn d-flex align-items-center gap-2 dropdown-toggle user-dropdown"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">

                            {{-- AVATAR --}}
                            @if(Auth::user()->avatar)
                                <img src="{{ asset('storage/' . Auth::user()->avatar) }}"
                                    class="rounded-circle"
                                    width="36"
                                    height="36"
                                    alt="Avatar">
                            @else
                                <div class="avatar-fallback">
                                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                </div>
                            @endif

                            {{-- NAME --}}
                            <span class="d-none d-lg-inline fw-semibold">
                                {{ Auth::user()->name }}
                            </span>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                            <li class="dropdown-header">
                                <strong>{{ Auth::user()->name }}</strong><br>
                                <small class="text-muted">{{ Auth::user()->email }}</small>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <!-- <a class="dropdown-item" href=" route('profile') "> -->
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-person me-2"></i> Perfil
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-gear me-2"></i> Configuración
                                </a>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    {{-- NO LOGUEADO --}}
                    <button class="icon-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="fas fa-user"></i>
                    </button>
                @endauth

            </div>

        </div>
    </div>
</nav>



<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow">

            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">Iniciar sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body px-4 pb-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control rounded-3" required>
                    </div>

                    <div class="mb-3">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control rounded-3" required>
                    </div>

                    <button class="btn btn-primary w-100 rounded-3">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</div>
