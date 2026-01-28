@extends('layouts.app')

@section('content')

@include('partials.menu')

<section class="blog-section py-4">
    <div class="container-xl">
        <div class="row g-4">

            {{-- ================= BLOG LIST ================= --}}
            <div class="col-md-9">
                <div class="row g-4">

                    @for($i = 1; $i <= 6; $i++)
                    <div class="col-lg-4 col-md-6 col-12">
                        <article class="blog-card">

                            <div class="blog-image">
                                <img src="https://denizhalil.com/wp-content/uploads/2024/05/Learning-Basic-Data-Types-in-Python-1024x580.png"
                                     alt="Blog Image">
                                <span class="blog-date">10 Jun 2024</span>
                            </div>

                            <div class="blog-content">
                                <h5 class="blog-title">
                                    Learning Basic Data Types in Python
                                </h5>

                                <p class="blog-excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel metus vel est fermentum consectetur.
                                </p>

                                <a href="#" class="blog-link">
                                    Leer más →
                                </a>
                            </div>

                        </article>
                    </div>
                    @endfor

                </div>
            </div>

            {{-- ================= SIDEBAR ================= --}}
            <div class="col-md-3">

                <div class="sidebar-card">
                    <h5 class="sidebar-title">Videos recomendados</h5>

                    <div class="ratio ratio-16x9 mb-3">
                        <iframe src="https://www.youtube.com/embed/m_8B_1aHfQA"
                                allowfullscreen></iframe>
                    </div>

                    <div class="ratio ratio-16x9 mb-3">
                        <iframe src="https://www.youtube.com/embed/JDXLOCTXdUo"
                                allowfullscreen></iframe>
                    </div>

                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/LYrgC-BKeyw"
                                allowfullscreen></iframe>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

@include('partials.footer')

@endsection
