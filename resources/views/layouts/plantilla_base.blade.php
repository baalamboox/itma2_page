<!DOCTYPE html>
<html lang="es-MX" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('titulo_pagina')</title>
        <link rel="shortcut icon" href="{{ asset('static/img/logotipos/itma2.png') }}" type="image/x-icon">
        
        <link rel="stylesheet" href="{{ asset('static/vendor/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('static/vendor/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('static/vendor/animate/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('static/vendor/owlcarousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('static/vendor/lightbox/css/lightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('static/css/paleta_colores.css') }}">
    </head>
    <body>
        <div class="container-xxl bg-white p-0">
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <header>
                <ul class="nav d-none d-md-flex justify-content-between px-3 py-1 shadow-lg">
                    <div class="d-inline-flex">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="mailto:dir_milpaalta2@tecnm.mx"><i class="fa-solid fa-envelope me-2"></i>dir_milpaalta2@tecnm.mx</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="tel:5558446824"><i class="fa-solid fa-phone me-2"></i>55 5844 6824</a>
                        </li>
                    </div>
                    <div class="d-inline-flex">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" target="_blank" rel="noreferrer" href="https://www.facebook.com/tecmilpaalta2"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" target="_blank" rel="noreferrer" href="https://twitter.com/TecNMMilpaAlta2"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" target="_blank" rel="noreferrer" href="https://www.youtube.com/channel/UCXJVuz9lnFc03mObS-0wYOg"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" target="_blank" rel="noreferrer" href="https://github.com/itma2"><i class="fa-brands fa-github"></i></a>
                        </li>
                    </div>
                </ul>
                <div class="container-xxl position-relative p-0">
                    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                        <a href="/" class="navbar-brand p-0"><h1 class="m-0">ITMA II</h1></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto py-0">
                                <a href="index.html" class="nav-item nav-link"><i class="fa-solid fa-user-plus me-2"></i>Admisión</a>
                                <a href="about.html" class="nav-item nav-link"><i class="fa-solid fa-address-card me-2"></i>Preregistro</a>
                                <a href="service.html" class="nav-item nav-link"><i class="fa-solid fa-globe me-2"></i>Web oficial</a>
                            </div>
                        </div>
                    </nav>
                    @yield('encabezado')
                </div>
            </header>
            @yield('principal')
            <div class="container-fluid @yield('fondo_footer') text-light footer wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-md-6">
                            <p class="section-title text-white h5 mb-4">Contacto<span></span></p>
                            <p><i class="fa fa-map-marker-alt me-3"></i>Calle Guerrero Sur 171, Pueblo de San Juan Tepenahuac, Milpa Alta, Ciudad de México, C.P. 12800</p>
                            <p><i class="fa fa-phone-alt me-3"></i>55 5844 6824 (lunes a vienes de 09:00 a 15:00 hrs)</p>
                            <p><i class="fa fa-envelope me-3"></i>dir_milpaalta2@tecnm.mx</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" target="_blank" rel="noreferrer" href="https://www.facebook.com/tecmilpaalta2"><i class="fa-brands fa-facebook"></i></a>
                                <a class="btn btn-outline-light btn-social" target="_blank" rel="noreferrer" href="https://twitter.com/TecNMMilpaAlta2"><i class="fa-brands fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" target="_blank" rel="noreferrer" href="https://www.youtube.com/channel/UCXJVuz9lnFc03mObS-0wYOg"><i class="fa-brands fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" target="_blank" rel="noreferrer" href="https://github.com/itma2"><i class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="iframe-container w-100">
                                <iframe class="responsive-iframe w-100 rounded shadow" height="250px" title="ubicacion itma ii" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7536.1324327013745!2d-98.991919!3d19.19231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96655dc58eb54b5c!2sInstituto%20Tecnol%C3%B3gico%20de%20Milpa%20Alta%20II!5e0!3m2!1ses-419!2smx!4v1652394701901!5m2!1ses-419!2smx" allowFullScreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="fa-solid fa-angle-up"></i></a>
        </div>
        <script src="{{ asset('static/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('static/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('static/vendor/wow/wow.min.js') }}"></script>
        <script src="{{ asset('static/vendor/easing/easing.min.js') }}"></script>
        <script src="{{ asset('static/vendor/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('static/vendor/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('static/vendor/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('static/vendor/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('static/vendor/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('static/js/main.js') }}"></script>
    </body>
</html>