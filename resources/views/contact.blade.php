@extends('layouts.app')

@section('content')

@include('partials.menu')

<section class="contact-section py-5">
    <div class="container-lg">

        {{-- HEADER --}}
        <div class="text-center mb-5">
            <h2 class="fw-bold">Contáctanos</h2>
            <p class="text-muted">
                Estamos listos para ayudarte con licencias digitales originales y soporte personalizado.
            </p>
        </div>

        {{-- INFO --}}
        <div class="row g-4 text-center mb-5">

            <div class="col-md-4">
                <div class="contact-info-card">
                    <i class="bi bi-geo-alt"></i>
                    <h6>Oficina</h6>
                    <p>Atención virtual</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-info-card">
                    <i class="bi bi-telephone"></i>
                    <h6>Teléfono</h6>
                    <p>
                        <a href="tel:{{ $company->phone }}">
                            {{ $company->phone }}
                        </a>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-info-card">
                    <i class="bi bi-envelope"></i>
                    <h6>Email</h6>
                    <p>
                        <a href="mailto:{{ $company->email }}">
                            {{ $company->email }}
                        </a>
                    </p>
                </div>
            </div>

        </div>

        {{-- FORM --}}
        <div class="row g-4 align-items-center">

            <div class="col-md-6">
                <div class="container">
                    <h5 class="fw-semibold">Escríbenos</h5>
                    <p class="text-muted">
                        Estamos listos para ayudarte a activar y optimizar tus equipos con licencias digitales originales y seguras.
                        Si tienes consultas, deseas una cotización o necesitas asesoría para elegir la licencia ideal para tu PC, nuestro equipo te atenderá de manera rápida y personalizada.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-form-card">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf

                        <div class="mb-3">
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="Nombre completo"
                                   required>
                        </div>

                        <div class="mb-3">
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Correo electrónico"
                                   required>
                        </div>

                        <div class="mb-3">
                            <input type="text"
                                   name="subject"
                                   class="form-control"
                                   placeholder="Asunto"
                                   required>
                        </div>

                        <div class="mb-3">
                            <textarea name="message"
                                      rows="4"
                                      class="form-control"
                                      placeholder="Escribe tu mensaje"
                                      required></textarea>
                        </div>

                        <button class="btn btn-primary w-100">
                            Enviar mensaje
                        </button>

                    </form>
                </div>
            </div>

        </div>

    </div>
</section>

@include('partials.footer')
@endsection
