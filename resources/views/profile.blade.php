@extends('layouts.app')

@section('content')

@include('partials.menu')

<div class="container py-5">
    <div class="row">

        {{-- ====== SIDEBAR PERFIL ====== --}}
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body text-center">

                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}"
                         class="rounded-circle mb-3"
                         width="120" height="120">

                    <h5 class="fw-bold mb-4">{{ auth()->user()->name }}</h5>

                    <div class="list-group list-group-flush text-start">
                        <a href="#" class="list-group-item list-group-item-action active tab-btn"
                           data-tab="info">
                            <i class="bi bi-person me-2"></i> Información personal
                        </a>

                        <a href="#" class="list-group-item list-group-item-action tab-btn"
                           data-tab="security">
                            <i class="bi bi-shield-lock me-2"></i> Seguridad
                        </a>

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="list-group-item list-group-item-action text-danger">
                            <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
                        </a>
                    </div>

                </div>
            </div>
        </div>

        {{-- ====== CONTENIDO ====== --}}
        <div class="col-md-9">

            {{-- === INFO PERSONAL === --}}
            <div class="card shadow-sm border-0 rounded-4 tab-content" id="tab-info">
                <div class="card-body">
                    <h5 class="fw-bold mb-4">Información personal</h5>

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre</label>
                                <input type="text" name="name"
                                       class="form-control"
                                       value="{{ auth()->user()->name }}" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Correo electrónico</label>
                                <input type="email"
                                       class="form-control"
                                       value="{{ auth()->user()->email }}"
                                       disabled>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Teléfono</label>
                                <input type="text" name="phone"
                                       class="form-control"
                                       value="{{ auth()->user()->phone }}">
                            </div>
                        </div>

                        <div class="mt-4 text-end">
                            <button class="btn btn-primary rounded-pill px-4">
                                Guardar cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- === SEGURIDAD === --}}
            <div class="card shadow-sm border-0 rounded-4 d-none tab-content" id="tab-security">
                <div class="card-body">
                    <h5 class="fw-bold mb-4">Cambiar contraseña</h5>

                    <form method="POST" action="{{ route('profile.password') }}">
                        @csrf

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Contraseña actual</label>
                                <input type="password" name="current_password"
                                       class="form-control" required>
                            </div>

                            <div class="row py-2">
                                <div class="col-md-6">
                                    <label class="form-label">Nueva contraseña</label>
                                    <input type="password" name="password"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Confirmar contraseña</label>
                                    <input type="password" name="password_confirmation"
                                        class="form-control" required>
                                </div>
                            </div>                            
                        </div>

                        <div class="mt-4 text-end">
                            <button class="btn btn-warning rounded-pill px-4">
                                Actualizar contraseña
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>


@include('partials.footer')

<script>
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();

            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('d-none'));
            document.getElementById('tab-' + btn.dataset.tab).classList.remove('d-none');
        });
    });
</script>

@endsection
