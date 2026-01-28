@extends('layouts.app')

@section('content')

@include('partials.menu')

{{-- ===================== HERO CAROUSEL ===================== --}}
<section class="hero-carousel">
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide hero-slide" style="background-image:url('/images/banner1.jpg')">
                <div class="container-fluid">
                    <div class="row align-items-center min-vh-70">
                        <div class="col-lg-6 hero-text px-5">
                            <h1>Licencias digitales 100% originales</h1>
                            <p>Activa tu software al instante y sin complicaciones</p>
                            <a href="#" class="btn btn-hero">Comprar ahora</a>
                        </div>
                        <div class="col-lg-6 hero-image"></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero-slide" style="background-image:url('/images/banner1.jpg')">
                <div class="container-fluid">
                    <div class="row align-items-center min-vh-70">
                        <div class="col-lg-6 hero-text px-5">
                            <h1>Licencias digitales 100% originales</h1>
                            <p>Activa tu software al instante y sin complicaciones</p>
                            <a href="#" class="btn btn-hero">Comprar ahora</a>
                        </div>
                        <div class="col-lg-6 hero-image"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

{{-- ===================== CATEGORÍAS ===================== --}}
<section class="categories-section">
    <div class="container container-fluid">
        <div class="swiper categoriesSwiper">
            <div class="swiper-wrapper">
                @foreach($categories as $cat)
                <div class="swiper-slide">
                    <div class="product-card my-4">
                        <img class="d-flex m-auto" src="/storage/{{ $cat->image }}" alt="{{ $cat->name }}" height="100">
                        <h6 class="mt-3 text-center">{{ $cat->name }}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ===================== OFERTAS ===================== --}}
@if($products_oferta->count())
<section class="offers-section">
    <div class="container offers-card">
        <div class="row align-items-center">
            <div class="col-lg-3 text-center text-white">
                <h3>Licencias en oferta</h3>
                <p>Compra ahora!</p>
                <a class="my-4" href="#" style="text-decoration: none; color: white;">Ver todos</a>
            </div>

            <div class="col-lg-9">
                <div class="swiper offersSwiper">
                    <div class="swiper-wrapper">
                        @foreach($products_oferta as $oferta)
                        @php $imgs = json_decode($oferta->images); @endphp
                        <div class="swiper-slide offer-product">
                            <span class="discount-badge">-10%</span>
                            <img src="/storage/{{ $imgs[0] }}" height="150">
                            <h6>{{ $oferta->name }}</h6>
                            <div class="price-row">
                                <del>S/. {{ number_format($oferta->price*1.1,2) }}</del>
                                <strong>S/. {{ number_format($oferta->price,2) }}</strong>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endif

{{-- ===================== MÁS VENDIDOS ===================== --}}
<section class="products-section py-5">
    <div class="container">
        <div class="section-header">
            <h2>Productos más vendidos</h2>
            <a href="{{route('store.tienda')}}">Ver todos</a>
        </div>
        <hr>

        <div class="row g-4">
            @foreach($products_vendidos as $product)
            @php $imgs = json_decode($product->images); @endphp
            <div class="col-md-4 col-lg-3">
                <div class="product-card" style="box-shadow: inset;">
                    <img class="d-flex m-auto" src="/storage/{{ $imgs[0] }}" height="180">
                    <div class="fade-line"></div>
                    <h6>{{ $product->name }}</h6>
                    <div class="product-footer">
                        <span>S/. {{ $product->price }}</span>
                        <span>⭐ 4.8</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== COMBOS BANNER ===================== --}}
<section class="container">
    <div class="combo-banner px-5" style="background-image:url('/images/banner2.png'); border-radius: 10px;">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="images/licencias.png" alt="" width="100%">
            </div>
            <div class="col-lg-6 text-end">
                <h2>NUESTROS COMBOS</h2>
                <p>Optimiza tu equipo con nuestros combos de licencias digitales originales, ideales para hogar, negocios y empresas.</p>
                <a href="#" class="btn btn-primary">Conoce nuestros combos</a>
            </div>
        </div>
    </div>
</section>

{{-- ===================== TUS COMBOS ===================== --}}
@if($combos->count())
<section class="products-section py-5">
    <div class="container">
        <div class="section-header">
            <h2>Tus Combos</h2>
            <a href="{{route('store.tienda')}}">Ver todos</a>
        </div>
        <hr>

        <div class="row g-4">
            @foreach($combos as $combo)
            @php $imgs = json_decode($combo->images); @endphp
            <div class="col-md-4 col-lg-3">
                <div class="product-card">
                    <img class="d-flex m-auto" src="/storage/{{ $imgs[0] }}" height="180">
                    <div class="fade-line"></div>
                    <h6>{{ $combo->name }}</h6>
                    <div class="product-footer">
                        <span>S/. {{ $combo->price }}</span>
                        <span>⭐ 4.9</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@include('partials.footer')
@endsection
