@extends('layouts/plantilla_base')
@section('titulo_pagina', 'ITMA II | ISIC')
@section('encabezado')
<div class="card text-white rounded-0">
    <video class="card-img rounded-0" autoplay loop>
        <source src="{{ asset('static/video/sis.mp4') }}" type="video/mp4">
    </video>
    <div class="card-img-overlay background-overlay-sis d-flex align-items-center">
        <div class="px-5">
            <h5 class="card-title text-start mb-5 pet-title">Ingeniería en Sistema Computacionales</h5>
            <p class="card-text text-end pt-5 pet-text">
                Especializate con nosotros en Desarrollo Web Full Stack
            </p>
        </div>
    </div>
</div>
@endsection
@section('principal')
<div class="container-xxl mt-5" id="mas">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary">Acerca de la carrera<span></span></p>
                <h1 class="mb-5 text-sis"><i class="fa-solid fa-comment me-2"></i>Descripción</h1>
                <p class="mb-4">
                    La Ingeniería de Sistemas Computacionales es la encargada de desarrollar las aplicaciones o programas (software) basándose en estándares internacionales y en las tecnologías actuales sobre cómputo, microprocesadores y que son de mucha utilidad para el mundo. 
                </p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded shadow-lg wow zoomIn" data-wow-delay="0.5s" src="{{ asset('static/img/sis/descripcion.jpg') }}">
            </div>
        </div>
    </div>
</div>
<div class="container-xxl">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid rounded shadow-lg wow zoomIn" data-wow-delay="0.5s" src="{{ asset('static/img/sis/objetivo.jpg') }}">
            </div>
            <div class="col-lg-6 text-end wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary">Acerca de la carrera<span></span></p>
                <h1 class="mb-5 text-sis"><i class="fa-solid fa-bullseye me-2"></i>Objetivo general</h1>
                <p class="mb-4">
                    Formar profesionistas líderes con visión estratégica y amplio sentido ético; capaz de diseñar, desarrollar, implementar y administrar tecnología computacional para aportar soluciones innovadoras en beneficio de la sociedad; en un contexto global, multidisciplinario y sostenible.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-xxl shadow-lg fact wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-start"><span></span>Documentación<span></span>
                    </p>
                    <h1 class="text-start mb-5 text-sis"><i class="fa-solid fa-table me-2"></i>Retícula</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div className="iframe-container">
                            <iframe className="responsive-iframe" title="reticula gestion" src="{{ asset('static/pdf/reticula_sistemas.pdf') }}" width="100%" height="400" allowFullScreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
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
            <h1 class="text-center mb-5 text-sis">Podría interesarte...</h1>
        </div>
        <div class="row g-4 justify-content-around">
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
        </div>
    </div>
</div>
@section('fondo-redes-sociales', 'background-social-networks')
@include('layouts/redes_sociales')
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Areas de oportunidad<span></span>
            </p>
            <h1 class="text-center mb-5 text-secondary">Titulate y desenvuelvete en areas como:</h1>
        </div>
        <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                <div id="carouselExampleCaptions" class="carousel slide shadow-lg" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('static/img/sis/oportunidad_01.jpg') }}" class="d-block w-100 rounded" alt="...">
                            <div class="carousel-caption d-none d-sm-block rounded shadow-lg bg-primary">
                                <h5 class="fs-4 fw-light">Empresas públicas o privadas.</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('static/img/sis/internacional.jpg') }}" class="d-block w-100 rounded" alt="...">
                            <div class="carousel-caption d-none d-sm-block rounded shadow-lg bg-primary">
                                <h5 class="fs-4 fw-light">Empresas nacionales e internacionales.</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('fondo_footer', 'background-footer-sis')