@extends('layouts/plantilla_base')
@section('titulo_pagina', 'ITMA II')
@section('encabezado')
<div class="container-xxl bg-success hero-header">
    <div class="container px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">TecNM<br>Campus Milpa Alta II</h1>
                <p class="text-white pb-3 animated slideInDown">
                    Es un plantel con 12 años de
                    experiencia dentro del sistema educativo implementado en la CDMX por la entonces
                    Dirección General de Educación Superior Tecnológica (DGEST).
                </p>
                <a href="#mas" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft"><i class="fa-solid fa-book-open-reader me-2"></i>Leer más</a>
            </div>
            <div class="col-lg-6 text-center">
                <img class="animated zoomIn" src="{{ asset('static/img/logotipos/itma2.png') }}" height="300px" alt="Cargando...">
            </div>
        </div>
    </div>
</div>
@endsection
@section('principal')
<div class="container-xxl" id="mas">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary">Acerca de nosotros<span></span></p>
                <h1 class="mb-5 text-success"><i class="fa-solid fa-bullseye me-2"></i>Misión</h1>
                <p class="mb-4">
                    Ofrecer servicios de Educación Superior Tecnológica de calidad, con cobertura nacional, pertinente y
                    equitativa, que coayude a la conformación de una sociedad justa y humana, con una perspectiva de sustentabilidad.
                </p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded shadow-lg wow zoomIn" data-wow-delay="0.5s" src="{{ asset('static/img/fototeca/SomosLinces08.png') }}">
            </div>
        </div>
    </div>
</div>
<div class="container-xxl">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid rounded shadow-lg wow zoomIn" data-wow-delay="0.5s" src="{{ asset('static/img/fototeca/SomosLinces07.png') }}">
            </div>
            <div class="col-lg-6 text-end wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary">Acerca de nosotros<span></span></p>
                <h1 class="mb-5 text-success"><i class="fa-solid fa-eye me-2"></i>Visión</h1>
                <p class="mb-4">
                    Ser una institución de Educación Superior Tecnológica de calidad, con alcance internacional y comprometida a ser
                    uno de los pilares fundamentales del desarrollo sostenido, sustentable y equitativo de la nación.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-xxl shadow-lg fact wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="card bg-dark text-white rounded-0">
                    <video class="card-img" autoplay loop>
                        <source src="{{ asset('static/video/lince.mp4') }}" type="video/mp4">
                    </video>
                    <div class="card-img-overlay background-overlay d-flex align-items-center">
                        <div class="px-5">
                            <h5 class="card-title text-start mb-5 pet-title"><i class="fa-solid fa-paw me-4"></i>Nuestra Mascota</h5>
                            <p class="card-text text-end pt-5 pet-text">
                                El Lince es un felino que puede habitar en selvas húmedas, zonas montañosas y zonas semidesérticas
                                así como su capacidad de adaptarse y por la tenacidad que tiene al defender su territorio es por
                                eso que representa a la comunidad estudiantil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Carreras<span></span>
            </p>
            <h1 class="text-center mb-5 text-success">¿Cual es nuestra oferta educativa?</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column text-center rounded shadow">
                    <div class="mb-3">
                        <img src="{{ asset('static/img/carteles/cartel_IGE.jpg') }}" class="w-100 rounded" alt="">
                    </div>
                    <h5>Ingeniería en Gestión Empresarial</h5>
                    <a class="btn btn-square" href="ges"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded shadow">
                    <div class="mb-3">
                        <img src="{{ asset('static/img/carteles/cartel_IIND.jpg') }}" class="w-100 rounded" alt="">
                    </div>
                    <h5>Ingeniería Industrial</h5>
                    <a class="btn btn-square" href="ind"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column text-center rounded shadow">
                    <div class="mb-3">
                        <img src="{{ asset('static/img/carteles/cartel_ISIC.jpg') }}" class="w-100 rounded" alt="">
                    </div>
                    <h5>Ingeniería en Sistema Computacionales</h5>
                    <a class="btn btn-square" href="sis"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@section('fondo-redes-sociales', 'bg-success')
@include('layouts/redes_sociales')
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>¿Quiénes somos?<span></span>
            </p>
            <h1 class="text-center mb-5 text-secondary">¡Somos TecNM!</h1>
        </div>
        <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="shadow-lg rounded">
                    <div class="text-center border-bottom p-4">
                        <div className="iframe-container">
                            <iframe className="responsive-iframe" width="100%" height="400px" src="https://www.youtube.com/embed/1fysHX-IgHo" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" target="_blank" rel="noreferrer" href="https://www.tecnm.mx/"><i class="fas fa-globe"></i></a>
                        <a class="btn btn-square mx-1" target="_blank" rel="noreferrer" href="https://www.facebook.com/SomosTecNM"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" target="_blank" rel="noreferrer" href="https://twitter.com/TecNM_MX"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" target="_blank" rel="noreferrer" href="https://www.youtube.com/c/TecNMMXMexico"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('fondo_footer', 'bg-success')