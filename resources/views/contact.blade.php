@extends('layouts.app')

@section('content')

@include('partials.menu')

<section id="contact" class="section-bg wow fadeInUp">

    <div class="container">

    <div class="section-header">
        <!-- <h2>Contáctanos</h2> -->
        <!-- <p>Lorem Ipsum is simply dummy text of the printing.</p> -->
    </div>

    <div class="row contact-info">

        <div class="col-md-4">
        <div class="contact-address">
            <i class="fa fa-map-marker"></i>
            <h3>Oficina</h3>
            <address>Virtual</address>
        </div>
        </div>

        <div class="col-md-4">
        <div class="contact-phone">
            <i class="fa fa-phone"></i>
            <h3>Teléfono</h3>
            <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
        </div>
        </div>

        <div class="col-md-4">
        <div class="contact-email">
            <i class="fa fa-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com">info@example.com</a></p>
        </div>
        </div>

    </div>

    <div class="row container-lg">
        <div class="col-md-6">
            <h5>Message us</h5>
            <p>Estamos listos para ayudarte a activar y optimizar tus equipos con licencias digitales originales y seguras.
                Si tienes consultas, deseas una cotización o necesitas asesoría para elegir la licencia ideal para tu PC, nuestro equipo te atenderá de manera rápida y personalizada.</p>
        </div>
        <div class="col-md-6">
            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                    <div class="form-group py-2">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group py-2">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                    </div>
                </div>
                <div class="form-group py-2">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
                <div class="form-group py-2">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Enviar mensaje</button></div>
                </form>
            </div>
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
@endsection