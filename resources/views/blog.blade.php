@extends('layouts.app')

@section('content')

@include('partials.menu')
<div class="container-xl">
    <div class="row">
        <div class="col-md-9">
            <!-- <div class="container"> -->
                <div class="row p-0">
                    <div class="col-lg-4 col-md-6 col-12 py-2">
                        <div class="blog">
                            <div class="blog-image">
                                <img src="https://denizhalil.com/wp-content/uploads/2024/05/Learning-Basic-Data-Types-in-Python-1024x580.png" alt="Blog Image 1">
                                <div class="date">June 10, 2024</div>
                            </div>
                            <div class="blog-content">
                                <h2>Blog Post 1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel metus vel est fermentum consectetur.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 py-2">
                        <div class="blog">
                            <div class="blog-image">
                                <img src="https://denizhalil.com/wp-content/uploads/2024/05/Learning-Basic-Data-Types-in-Python-1024x580.png" alt="Blog Image 1">
                                <div class="date">June 10, 2024</div>
                            </div>
                            <div class="blog-content">
                                <h2>Blog Post 1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel metus vel est fermentum consectetur.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 py-2">
                        <div class="blog">
                            <div class="blog-image">
                                <img src="https://denizhalil.com/wp-content/uploads/2024/05/Learning-Basic-Data-Types-in-Python-1024x580.png" alt="Blog Image 1">
                                <div class="date">June 10, 2024</div>
                            </div>
                            <div class="blog-content">
                                <h2>Blog Post 1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel metus vel est fermentum consectetur.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 py-2">
                        <div class="blog">
                            <div class="blog-image">
                                <img src="https://denizhalil.com/wp-content/uploads/2024/05/Learning-Basic-Data-Types-in-Python-1024x580.png" alt="Blog Image 1">
                                <div class="date">June 10, 2024</div>
                            </div>
                            <div class="blog-content">
                                <h2>Blog Post 1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel metus vel est fermentum consectetur.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>

        <div class="col-md-3">
            <h5 class="pb-4">Videos</h5>
            <div class="ratio ratio-16x9 my-2">
                <iframe style="border-radius: 10px;"
                    src="https://www.youtube.com/embed/m_8B_1aHfQA"
                    title="YouTube video player"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="ratio ratio-16x9 my-2">
                <iframe style="border-radius: 10px;"
                    src="https://www.youtube.com/embed/JDXLOCTXdUo?si=3Orz8nCbpU3k1mN3"
                    title="YouTube video player"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="ratio ratio-16x9 my-2">
                <iframe style="border-radius: 10px;"
                    src="https://www.youtube.com/embed/LYrgC-BKeyw?si=F4Ax7NwPFOhg_8nz"
                    title="YouTube video player"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection