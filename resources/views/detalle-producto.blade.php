@extends('layouts.app')

@section('content')
@include('partials.menu')

@php
    $imgs = $item->images ? json_decode($item->images, true) : [];
@endphp

<div class="container py-5">

    <div class="row g-5">

        {{-- ===== GALERÍA ===== --}}
        <div class="col-md-6">

            {{-- Imagen principal --}}
            <div class="border rounded mb-3 text-center">
                <img id="mainImage" class="img-fluid rounded" style="max-height:400px;"
                    src="{{ isset($imgs[0]) ? asset('storage/'.$imgs[0]) : asset('images/sin-imagen.png') }}"
                    height="180">
            </div>

            {{-- Miniaturas --}}
            @if(count($imgs) > 1)
            <div class="swiper thumbsSwiper">
                <div class="swiper-wrapper">
                    @foreach($imgs as $img)
                    <div class="swiper-slide text-center">
                        <img src="{{asset('storage/' . $img) }}"
                             class="img-thumbnail thumb-img"
                             data-img="{{ asset('storage/' . $img) }}">
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>

        {{-- ===== INFO ===== --}}
        <div class="col-md-6">

            <h2 class="fw-bold">{{ $product->name }}</h2>

            <div class="d-flex flex-wrap gap-4 text-muted mb-2">
                <div class="d-flex align-items-center">
                    <i class="bi bi-patch-check-fill text-success me-2"></i>
                    <small>100% Original</small>
                </div>

                <div class="d-flex align-items-center">
                    <i class="bi bi-shield-check text-primary me-2"></i>
                    <small>Garantía</small>
                </div>

                <div class="d-flex align-items-center">
                    <i class="bi bi-headset text-warning me-2"></i>
                    <small>Soporte Técnico</small>
                </div>
            </div>

            <p class="text-muted mb-1">
                <strong>{{ $product->description_corta }}</strong>
            </p>

            <div class="row text-muted mb-3">
                <div class="col-5 col-md-4">
                    <p class="mb-1">Marca:</p>
                    <p class="mb-1">Categoría:</p>
                    <p class="mb-1">Duración:</p>
                    <p class="mb-1">Compatibilidad:</p>
                </div>

                <div class="col-7 col-md-8">
                    <p class="mb-1 fw-semibold">
                        {{ $product->brand->name ?? 'Genérica' }}
                    </p>
                    <p class="mb-1 fw-semibold">
                        {{ $product->taxonomy->name ?? '-' }}
                    </p>
                    <p class="mb-1 fw-semibold">
                        {{ $product->duracion ?? 'Ilimitada' }}
                    </p>
                    <p class="mb-1 fw-semibold">
                        {{ $product->compatibilidad ?? 'Windows / Mac' }}
                    </p>
                </div>
            </div>

            {{-- Card Precio --}}
            <div class="card shadow-sm p-4 my-4">
                <div class="d-flex align-items-center mb-2">
                    <h3 class="text-primary mb-0">
                        S/. {{ number_format($product->price,2) }}
                    </h3>
                    @if($product->oferta)
                        <span class="badge bg-danger ms-3">-10%</span>
                    @endif
                </div>

                <p class="text-success mb-3">
                    ✔ Licencia digital original
                </p>

                <a target="_blank"
                   href="https://wa.me/51999999999?text=Hola, quiero comprar {{ $product->name }}"
                   class="btn btn-primary btn-lg w-100 text-center">
                    <i class="bi bi-whatsapp"></i> Comprar por WhatsApp
                </a>
            </div>
        </div>

    </div>

    {{-- ===== INFO ADICIONAL ===== --}}
    <div class="mt-5">

        <ul class="nav nav-tabs" id="productTab">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#detalle">
                    Detalle
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#manuales">
                    Manuales
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#faqs">
                    Preguntas frecuentes
                </button>
            </li>
        </ul>

        <div class="tab-content border p-4 rounded-bottom">

            <div class="tab-pane fade show active" id="detalle">
                {!! $product->description !!}
            </div>

            <div class="tab-pane fade" id="manuales">
                @if($product->manuales)
                    <a href="{{ asset('storage/' . $product->manuales) }}"
                    class="btn btn-outline-primary"
                    download>
                        <i class="bi bi-file-earmark-arrow-down me-1"></i>
                        Descargar manual
                    </a>
                @else
                    <p class="text-muted">No hay manuales disponibles.</p>
                @endif
            </div>

            <div class="tab-pane fade" id="faqs">
                {!! $product->preguntas ?? 'No hay preguntas frecuentes.' !!}
            </div>

        </div>
    </div>

    {{-- ===== PRODUCTOS SIMILARES ===== --}}
    <section class="products-section py-5">
        <div class="section-header">
            <h3>Productos similares</h3>
        </div>
        <hr>

        <div class="row g-4">
            @foreach($similares as $item)
            @php $imgs = $item->images ? json_decode($item->images, true) : []; @endphp

            <div class="col-md-4 col-lg-3">
                <a href="{{ route('store.producto.detalle', $item->slug) }}" class="text-decoration-none text-dark">
                    <div class="product-card" style="box-shadow: inset;">
                        <img class="d-flex m-auto"
                            src="{{ isset($imgs[0]) ? asset('storage/'.$imgs[0]) : asset('images/sin-imagen.png') }}"
                            height="180">
                        <!-- <img class="d-flex m-auto" src="/storage/$imgs[0] " height="180"> -->
                        <div class="fade-line"></div>
                        <h6>{{ $item->name }}</h6>
                        <div class="product-footer">
                            <span>S/. {{ $item->price }}</span>
                            <span>⭐ 4.8</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

</div>
@include('partials.footer')

<script>
    function changeImage(src) {
        document.getElementById('mainImage').src = src;
    }

    new Swiper('.thumbsSwiper', {
        slidesPerView: 4,
        spaceBetween: 10,
        breakpoints: {
            768: { slidesPerView: 5 }
        }
    });
  
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const mainImage = document.getElementById('mainImage');

    const thumbsSwiper = new Swiper('.thumbsSwiper', {
        slidesPerView: 'auto',
        spaceBetween: 10,
        freeMode: true,
    });

    document.querySelectorAll('.thumb-img').forEach(img => {
        img.addEventListener('click', function () {
            mainImage.src = this.dataset.img;
        });
    });

});
</script>

<script>
    document.querySelectorAll('.thumb-img').forEach(img => {
    img.addEventListener('click', function () {
        document.querySelectorAll('.thumb-img').forEach(i => i.classList.remove('active'));
        this.classList.add('active');
        mainImage.src = this.dataset.img;
    });
});
</script>

@endsection


