@extends('layouts.app')

@section('content')

@include('partials.menu')

<section style="background-image: url('images/banner1.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="container-lg py-5">
    <div class="row">
        <div class="col-lg-6 pt-5 mt-5">
            <h2 class="display-1 ls-1"><span class="fw-bold text-primary">Licencias digitales 100% originales</span></h2>
            <p class="fs-4">"Activa tu software al instante y sin complicaciones"</p>
            <div class="d-flex gap-3">
                <a href="#" class="btn btn-primary text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">comprar ahora</a>
            </div>
        </div>
    </div>
    
    <!-- <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 justify-content-center">
        <div class="col">
        <div class="card border-0 bg-primary rounded-0 p-4 text-light">
            <div class="row">
            <div class="col-md-3 text-center">
                <svg width="60" height="60"><use xlink:href="#fresh"></use></svg>
            </div>
            <div class="col-md-9">
                <div class="card-body p-0">
                <h5 class="text-light">Fresh from farm</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card border-0 bg-secondary rounded-0 p-4 text-light">
            <div class="row">
            <div class="col-md-3 text-center">
                <svg width="60" height="60"><use xlink:href="#organic"></use></svg>
            </div>
            <div class="col-md-9">
                <div class="card-body p-0">
                <h5 class="text-light">100% Organic</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card border-0 bg-danger rounded-0 p-4 text-light">
            <div class="row">
            <div class="col-md-3 text-center">
                <svg width="60" height="60"><use xlink:href="#delivery"></use></svg>
            </div>
            <div class="col-md-9">
                <div class="card-body p-0">
                <h5 class="text-light">Free delivery</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div> -->
    
    </div>
</section>

<section class="py-5 overflow-hidden">
    <div class="container-lg">
    <div class="row">
        <div class="col-md-12">

        <div class="section-header d-flex flex-wrap justify-content-between mb-5">
            <h2 class="section-title">Categorías</h2>

            <div class="d-flex align-items-center">
            <!-- <a href="#" class="btn btn-primary me-2">Ver todos</a> -->
            <div class="swiper-buttons">
                <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
                <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
            </div>
            </div>
        </div>
        
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

        <div class="category-carousel swiper">
            <div class="swiper-wrapper" style="    overflow: inherit !important;">
            @foreach($categories as $cat)
            <a href="#" class="nav-link swiper-slide text-center" style="box-shadow: 0px 0px 44px rgba(0, 0, 0, 0.08);">
                <img src="storage/{{$cat->image}}" height="100" class="" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">{{$cat->name}}</h4>
            </a>
            @endforeach
            </div>
        </div>

        </div>
    </div>
    </div>
</section>

@if($products_oferta->count() > 0)
<section class="pb-4 my-4">
    <div class="container-lg">

    <div class="bg-warning1 pt-5 rounded-5">
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="mt-5 text-white text-center">Licencias en oferta</h2>
                <p class="text-white text-center">Compra ahora!</p>
                
                <div class="d-flex gap-2 flex-wrap mb-5">
                    <a class="btn btn-primary my-4 d-flex m-auto" href="#">Ver ofertas</a>
                </div>
            </div>
            <div class="col-md-8">
                <!-- <img src="images/banner-onlineapp.png" alt="phone" class="img-fluid"> -->
                <!-- <div class="row">
                    <div class="col-md-12">

                    <div class="product-grid row">
                            
                        <div class="col-md-4">
                            <div class="product-item">
                                <figure>
                                <a href="index.html" title="Product Title">
                                    <img src="images/product-thumb-1.png" alt="Product Thumbnail" class="tab-image">
                                </a>
                                </figure>
                                <div class="d-flex flex-column text-center">
                                <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                                <div>
                                    <span class="rating">
                                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                    <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                                    </span>
                                    <span>(222)</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <del>$24.00</del>
                                    <span class="text-dark fw-semibold">$18.00</span>
                                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                </div>
                                <div class="button-area p-3 pt-0">
                                    <div class="row g-1 mt-2">
                                    <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                    <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                                    <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                        <div class="product-item">
                            <figure>
                            <a href="index.html" title="Product Title">
                                <img src="images/product-thumb-2.png" alt="Product Thumbnail" class="tab-image">
                            </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                            <h3 class="fs-6 fw-normal">Whole Grain Oatmeal</h3>
                            <div>
                                <span class="rating">
                                <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                                </span>
                                <span>(41)</span>
                            </div>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <del>$54.00</del>
                                <span class="text-dark fw-semibold">$50.00</span>
                                <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                            </div>
                            <div class="button-area p-3 pt-0">
                                <div class="row g-1 mt-2">
                                <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                                <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="product-item">
                            <figure>
                            <a href="index.html" title="Product Title">
                                <img src="images/product-thumb-3.png" alt="Product Thumbnail" class="tab-image">
                            </a>
                            </figure>
                            <div class="d-flex flex-column text-center">
                            <h3 class="fs-6 fw-normal">Sharp Cheddar Cheese Block</h3>
                            <div>
                                <span class="rating">
                                <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                                </span>
                                <span>(32)</span>
                            </div>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <del>$14.00</del>
                                <span class="text-dark fw-semibold">$12.00</span>
                                <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                            </div>
                            <div class="button-area p-3 pt-0">
                                <div class="row g-1 mt-2">
                                <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                                <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>        
                        
                        
                    </div>
                    
                    </div>
                </div> -->
                <section id="latest-products" class="products-carousel">
                    <div class="overflow-hidden w-100">                    
                        <div class="row">
                            <div class="col-md-12">

                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach($products_oferta as $oferta)
                                    <div class="product-item swiper-slide">
                                        <figure>
                                        <a href="index.html" title="Product Title">
                                            @php 
                                                $imagenes = json_decode($oferta->images);
                                            @endphp
                                            <img src="storage/{{$imagenes[0]}}" style="max-height: 150px;" alt="Product Thumbnail" class="tab-image">
                                        </a>
                                        </figure>
                                        <div class="d-flex flex-column text-center">
                                        <h3 class="fs-6 fw-normal">{{$oferta->name}}</h3>
                                        <div>
                                            <span class="rating">
                                            <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                            <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                            <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                            <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                                            <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                                            </span>
                                            <span>(222)</span>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <del>S/. {{$oferta->price * 1.10}}</del>
                                            <span class="text-dark fw-semibold">S/. {{$oferta->price}}</span>
                                            <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                                        </div>
                                        <div class="button-area p-3 pt-0">
                                            <div class="row g-1 mt-2">
                                            <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                                            <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to cart</a></div>
                                            <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><i class="fab fa-whatsapp"></i></a></div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                                                        
                                </div>
                            </div>
                            <!-- / products-carousel -->

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                            <div class="section-header d-flex justify-content-between my-4">
                                
                                <h2 class="section-title"></h2>

                                <div class="d-flex align-items-center">
                                <div class="swiper-buttons">
                                    <button class="swiper-prev products-carousel-prev btn btn-white">❮</button>
                                    <button class="swiper-next products-carousel-next btn btn-white">❯</button>
                                </div>  
                                </div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
        </div>
        </div>
    </div>
    
    </div>
</section>
@endif

<section class="pb-5">
    <div class="container-lg">

    <div class="row">
        <div class="col-md-12">

        <div class="section-header d-flex flex-wrap justify-content-between my-4">
            
            <h2 class="section-title">Productos más vendidos</h2>

            <div class="d-flex align-items-center">
            <a href="#" class="btn btn-primary rounded-1">Ver todos</a>
            </div>
        </div>
        
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">

        <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
            @foreach($products_vendidos as $product)
            <div class="col">
                <div class="product-item">
                    <figure>
                    <a href="index.html" title="Product Title">
                        @php
                            $images = json_decode($product->images);
                        @endphp
                        <img src="storage/{{$images[0]}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">{{$product->name}}</h3>
                    <div>
                        <span class="rating">
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                    </div>
                    <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach           
            
        </div>
        <!-- / product-grid -->


        </div>
    </div>
    </div>
</section>

<section class="pb-4 my-4">
    <div class="container-lg">

    <div class="pt-5 rounded-5" style="background-image: url('images/banner2.png');">
        <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
                <img src="images/licencias.png" alt="phone" class="img-fluid">
            </div>
            <div class="col-md-4">
                <h2 class="mt-5" style="font-weight: bold;">NUESTROS COMBOS</h2>
                <p class="text-black">Optimiza tu equipo con nuestros combos de licencias digitales originales, ideales para hogar, negocios y empresas.</p>
                <div class="d-flex gap-2 flex-wrap mb-5">
                    <a class="d-flex m-auto btn btn-primary" href="#">Conoce nuestros combos</a>
                </div>
            </div>            
        </div>
        </div>
    </div>
    
    </div>
</section>

@if($combos->count() > 0)
<section class="pb-5">
    <div class="container-lg">

    <div class="row">
        <div class="col-md-12">

        <div class="section-header d-flex flex-wrap justify-content-between my-4">
            
            <h2 class="section-title">Tus combos</h2>

            <div class="d-flex align-items-center">
            <a href="#" class="btn btn-primary rounded-1">Ver todos</a>
            </div>
        </div>
        
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">

        <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
              
            @foreach($combos as $combo)
            <div class="col">
                <div class="product-item">
                    <figure>
                    <a href="index.html" title="Product Title">
                        @php
                            $imagenes = json_decode($combo->images);
                        @endphp
                        <img src="storage/{{$imagenes[0]}}" alt="Product Thumbnail" class="tab-image">
                    </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                    <h3 class="fs-6 fw-normal">{{$combo->name}}</h3>
                    <div>
                        <span class="rating">
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                        <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <!-- <del>$24.00</del> -->
                        <span class="text-dark fw-semibold">S/. {{$combo->price}}</span>
                        <!-- <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span> -->
                    </div>
                    <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                        <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                        <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18"><use xlink:href="#cart"></use></svg> Add to Cart</a></div>
                        <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>    
            @endforeach
            
        </div>
        <!-- / product-grid -->


        </div>
    </div>
    </div>
</section>
@endif


<footer class="py-5 bg-warning1 px-4">
    <div class="container-lg">
    <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="footer-menu">
            <img src="images/logo-jf.png" width="150" height="70" alt="logo">
            <h5 class="text-white">JHONATAN FERNÁNDEZ</h5>
            <ul class="menu-list list-unstyled">
                <li class="menu-item">
                    <a href="#" class="nav-link">Inicio </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="nav-link">Tienda</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="nav-link">Contactos</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="nav-link">Blog</a>
                </li>
            </ul>            
        </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="footer-menu">
                <h5 class="widget-title text-white">Contáctanos</h5>
                <ul class="menu-list list-unstyled">
                    <li class="menu-item">
                        <a href="#" class="nav-link text-white"><i class="fa fa-map-marker-alt px-2"></i>Calle Constitución # 439</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="nav-link text-white"><i class="fa fa-phone px-2"></i>+1 (555)123-4567</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="nav-link text-white"><i class="fa fa-envelope px-2"></i>correoempresa@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer-menu">
            <h5 class="widget-title text-white text-center">Libro de reclamaciones</h5>
            <img class="d-flex m-auto" width="100" src="images/libro.png" alt="">
            <div class="social-links mt-3">
                <ul class="d-flex justify-content-center list-unstyled gap-2">
                    <li>
                    <a href="#" class="btn btn-outline-light">
                        <svg class="text-white" width="16" height="16"><use xlink:href="#facebook"></use></svg>
                    </a>
                    </li>
                    <li>
                    <a href="#" class="btn btn-outline-light">
                        <svg class="text-white" width="16" height="16"><use xlink:href="#twitter"></use></svg>
                    </a>
                    </li>                    
                    <li>
                    <a href="#" class="btn btn-outline-light">
                        <svg class="text-white" width="16" height="16"><use xlink:href="#instagram"></use></svg>
                    </a>
                    </li>
                    <li>
                    <a href="#" class="btn btn-outline-light">
                        <svg class="text-white" width="16" height="16"><use xlink:href="#youtube"></use></svg>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        
    </div>
    </div>
</footer>
<div id="footer-bottom" style="background-color: #021736;">
    <div class="container-lg pt-2">
        <div class="row">
            <div class="col-md-6 copyright">
            <p class="text-white">© 2026 GRUPO VESERGENPERU.</p>
            </div>
            <div class="col-md-6 credit-link text-start text-md-end">
                <a class="text-decoration-none text-white px-2" href="#">Políticas de privacidad</a>
                <a class="text-decoration-none text-white px-2" href="#">Políticas de reembolso</a>
                <a class="text-decoration-none text-white px-2" href="#">Términos del servicio</a>
                <a class="text-decoration-none text-white px-2" href="#">Políticas de envío</a>
            </div>
        </div>
    </div>
</div>
@endsection
