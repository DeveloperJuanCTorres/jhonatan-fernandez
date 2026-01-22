@extends('layouts.app')

@section('content')

@include('partials.menu')

<section class="py-5 overflow-hidden px-4">
    <div class="container-lg">
    <div class="row">
        <div class="col-md-12">

        <div class="section-header d-flex flex-wrap justify-content-end mb-5">

            <div class="d-flex align-items-center">
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
            <div class="swiper-wrapper">
                @foreach($categories as $cat)
                <a href="#" class="nav-link swiper-slide text-center">
                    <img src="storage/{{$cat->image}}" width="70" class="" alt="Category Thumbnail">
                    <h4 class="fs-6 mt-3 fw-normal category-title">{{$cat->name}}</h4>
                </a>
                @endforeach    
            </div>
        </div>

        </div>
    </div>
    </div>
</section>

<section class="py-5 px-4">
    <div class="row container-lg">
        <div class="col-md-3">
            <div class="row align-items-center py-2">
                <div class="col d-flex justify-content-between">
                    <p class="mb-0">Filtro</p>
                    <a href="#" class="btn btn-primary">Borrar todo</a>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Marcas
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Marca 1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Marca 2
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Precio
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="price-filter">
                        <label class="form-label fw-semibold">Rango</label>

                        <input type="range"
                            class="form-range"
                            min="0"
                            max="1000"
                            step="10"
                            id="priceRange">

                        <div class="d-flex justify-content-between">
                            <span>S/ 0</span>
                            <span id="priceValue">S/ 500</span>
                            <span>S/ 1000</span>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3">
                
                @foreach($products as $product)
                <div class="col">
                    <div class="product-item">
                        <figure>
                        <a href="index.html" title="Product Title">
                            <img src="images/licencias.png" width="100%" alt="Product Thumbnail" class="tab-image">
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
                            <span class="text-dark fw-semibold">S/. {{$product->price}}</span>
                            <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                        </div>
                        <div class="button-area p-3 pt-0">
                            <div class="row g-1 mt-2">
                            <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                            
                            <div class="col-7">
                                <button href="" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"
                                    data-id="{{ $product->id }}"
                                    data-qty="1">

                                    <svg width="18" height="18">
                                        <use xlink:href="#cart"></use>
                                    </svg> 
                                    Agregar al carrito
                                </button>
                            </div>

                            <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>       
                @endforeach
                
            </div>
        </div>
    </div>
</section>


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


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const range = document.getElementById('priceRange');
    const value = document.getElementById('priceValue');

    value.textContent = 'S/ ' + range.value;

    range.addEventListener('input', () => {
        value.textContent = 'S/ ' + range.value;
    });
</script>

<script>
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('.btn-cart');
        if (!btn) return;

        e.preventDefault();

        // 🔄 LOADING
        Swal.fire({
            title: 'Agregando al carrito...',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        fetch("{{ route('cart.add') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                id: btn.dataset.id,
                qty: btn.dataset.qty
            })
        })
        .then(res => res.json())
        .then(data => {
            Swal.close();

            if (data.status) {
                // ✅ TOAST ÉXITO
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Producto agregado al carrito',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true
                });

                // 🛒 actualizar contador
                const count = document.getElementById('cart-count');
                if (count) count.innerText = data.count;

            } else {
                Swal.fire('Error', data.msg, 'error');
            }
        })
        .catch(() => {
            Swal.close();
            Swal.fire('Error', 'Ocurrió un problema al agregar el producto', 'error');
        });
    });
</script>
@endsection
