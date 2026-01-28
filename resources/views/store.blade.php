@extends('layouts.app')

@section('content')

@include('partials.menu')

<!-- <section class="py-5 overflow-hidden px-4">
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
                    <img src="storage/{{$cat->image}}" height="50" class="" alt="Category Thumbnail">
                    <h4 class="fs-6 mt-3 fw-normal category-title">{{$cat->name}}</h4>
                </a>
                @endforeach    
            </div>
        </div>

        </div>
    </div>
    </div>
</section> -->

<section class="py-2 px-4">
    <div class="container-lg">
        <div class="row g-3">

            @foreach($categories as $cat)
            <div class="col-6 col-md-2">
                <a href="{{ route('store.tienda', array_merge(request()->query(), ['category' => $cat->id])) }}"
                   class="text-decoration-none text-dark">

                    <div class="category-card {{ request('category') == $cat->id ? 'active' : '' }}">
                        <img src="{{ asset('storage/'.$cat->image) }}" class="p-0">
                        <div class="fw-semibold">{{ $cat->name }}</div>
                    </div>

                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="container">
    <div class="row py-2">

        <div class="col-md-3">
            <form method="GET" action="{{ route('store.tienda') }}">
            <div class="filter-card p-4">

                <h5 class="filter-title">Filtros</h5>

                {{-- CATEGORÍA --}}
                <input type="hidden" name="category" value="{{ request('category') }}">

                {{-- MARCAS --}}
                <div class="mb-4">
                    <p class="fw-semibold mb-2">Marcas</p>
                    @foreach($brands as $brand)
                    <div class="form-check filter-item">
                        <input class="form-check-input"
                            type="radio"
                            name="brand"
                            value="{{ $brand->id }}"
                            onchange="this.form.submit()"
                            {{ request('brand') == $brand->id ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $brand->name }}</label>
                    </div>
                    @endforeach
                </div>

                {{-- PRECIO --}}
                <div class="mb-3">
                    <p class="fw-semibold">Precio máximo</p>
                    <input type="range"
                        name="price"
                        min="0"
                        max="1000"
                        step="10"
                        value="{{ request('price', 1000) }}"
                        oninput="priceValue.innerText='S/ '+this.value"
                        onchange="this.form.submit()"
                        class="form-range">
                    <span id="priceValue">S/ {{ request('price',1000) }}</span>
                </div>

                <a href="{{ route('store.tienda') }}" class="btn btn-outline-secondary w-100 mt-3">
                    Limpiar filtros
                </a>

            </div>
            </form>
        </div>

        <div class="col-md-9">
            <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3">
                
                @foreach($products as $product)
                <div class="col pt-2">
                    <div class="product-item product-card"
                        data-price="{{ $product->price }}"
                        data-brand="{{ $product->brand_id }}">
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
                                
                                <div class="col-9">
                                    <button type="button"
                                        class="btn btn-success rounded-1 p-2 fs-7 btn-whatsapp w-100"
                                        data-name="{{ $product->name }}"
                                        data-price="{{ $product->price }}"
                                        data-id="{{ $product->id }}">
                                        
                                        <i class="bi bi-cart-fill"></i>
                                        Comprar
                                    </button>
                                </div>
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


@include('partials.footer')


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

<script>
    const products = document.querySelectorAll('.product-item');
    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');
    const brandRadios = document.querySelectorAll('input[name="brand"]');
    const clearBtn = document.getElementById('clearFilters');

    priceValue.textContent = 'S/ ' + priceRange.value;

    function filterProducts() {
        const maxPrice = parseFloat(priceRange.value);
        const selectedBrand = document.querySelector('input[name="brand"]:checked')?.value;

        products.forEach(product => {
            const price = parseFloat(product.dataset.price);
            const brand = product.dataset.brand;

            let visible = true;

            if (price > maxPrice) visible = false;
            if (selectedBrand && brand !== selectedBrand) visible = false;

            product.closest('.col').style.display = visible ? '' : 'none';
        });
    }

    priceRange.addEventListener('input', () => {
        priceValue.textContent = 'S/ ' + priceRange.value;
        filterProducts();
    });

    brandRadios.forEach(radio =>
        radio.addEventListener('change', filterProducts)
    );

    clearBtn.addEventListener('click', () => {
        priceRange.value = 1000;
        priceValue.textContent = 'S/ 1000';
        brandRadios.forEach(r => r.checked = false);
        filterProducts();
    });
</script>

<script>
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('.btn-whatsapp');
        if (!btn) return;

        const name = btn.dataset.name;
        const price = btn.dataset.price;
        const qty = btn.closest('.product-item')
                    .querySelector('.quantity')?.value || 1;

        const phone = "{{ preg_replace('/\D/', '', $company->phone) }}";

        const message = `
    Hola 👋, estoy interesado en este producto:

    📦 *Producto:* ${name}
    💰 *Precio:* S/ ${price}
    🔢 *Cantidad:* ${qty}

    ¿Está disponible?
        `.trim();

        const url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
        window.open(url, '_blank');
    });
</script>

@endsection
