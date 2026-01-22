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

@include('partials.footer')
@endsection