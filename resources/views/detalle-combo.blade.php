@extends('layouts.app')

@section('content')
@include('partials.menu')

@php
    $imgs = json_decode($product->images);
@endphp

<div class="container py-5">

    <div class="row g-5">

        {{-- ===== GALERÍA ===== --}}
        <div class="col-md-6">

            {{-- Imagen principal --}}
            <div class="border rounded mb-3 text-center">
                <img id="mainImage"
                     src="{{asset('storage/' . $imgs[0]) }}"
                     class="img-fluid rounded"
                     style="max-height:400px;">
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
            <p class="text-muted mb-1">
                Marca: <strong>{{ $product->brand->name ?? 'Genérica' }}</strong>
            </p>
            <p class="text-muted">
                Categoría: <strong>{{ $product->taxonomy->name ?? '-' }}</strong>
            </p>

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
                {!! $product->manuales ?? 'No hay manuales disponibles.' !!}
            </div>

            <div class="tab-pane fade" id="faqs">
                {!! $product->faqs ?? 'No hay preguntas frecuentes.' !!}
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
            @php $imgs = json_decode($item->images); @endphp

            <div class="col-md-4 col-lg-3">
                <a href="{{ route('store.producto.detalle', $item->slug) }}" class="text-decoration-none text-dark">
                    <div class="product-card" style="box-shadow: inset;">
                        <img class="d-flex m-auto" src="/storage/{{ $imgs[0] }}" height="180">
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


