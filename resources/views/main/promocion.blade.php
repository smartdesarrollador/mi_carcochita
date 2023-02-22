@extends('layout.layout.layout')

@section('titulo', 'Inicio')

@section('meta_title', 'Bienvenidos a Mi Carcochita')

@section('metas_adicionales')
<meta property="og:image" content="https://micarcochita.com.pe/assets/img/OpenGraph/ogCarta.png" />
@endsection

@section('links_adicionales')

    <link rel="stylesheet" href="{{ asset('assets/css/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/seleccion_multiple.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper.min.css') }}">

@endsection

@section('styles_adicionales')
<style>
    del {

        text-decoration: none;
        position: relative;
    }

    del:before {
        content: " ";
        display: block;
        width: 100%;
        border-top: 3px solid rgba(255, 0, 0, 0.8);
        height: 16px;
        position: absolute;
        bottom: 0;
        left: 0;
        transform: rotate(-16deg);
    }

    .tarjeta {
        cursor: pointer;
        transition-duration: 0.5s;
    }

    .tarjeta:hover {
        transform: scale(1.03);
        box-shadow: 3px 3px 3px 3px #ecf0f1;
    }
</style>
@endsection

@section('scripts_head_adicionales')
    
@endsection

@section('contenido')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#"><img src="{{ asset('assets/img/index/30_-Descuento.png') }}" class="d-none d-md-block w-100" alt="banner senshi"></a>
            <a href="#"><img src="{{ asset('assets/img/index/30_-Descuento.png') }}assets/img/index/30_-Descuento.png" class="d-block d-md-none w-100" alt="banner senshi"></a>

        </div>
        <div class="carousel-item">
            <a href="#"><img src="{{ asset('assets/img/index/Hamburguesas.png') }}" class="d-none d-md-block w-100" alt="banner senshi"></a>
            <a href="#"><img src="{{ asset('assets/img/index/Hamburguesas.png') }}" class="d-block d-md-none w-100" alt="banner senshi"></a>

        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="row mb-3 mt-4">
    <div class="col">
        <h3 style="color:#000000;" class="text-center">LO MÁS VENDIDO</h3>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 col-xl-4 mt-4">
            <h3 style="color:#000000;" class="text-center mb-3">Tacos</h3>
            <div class="card p-2 mb-4 tarjeta">
                <img class="card-img-top" style="border-radius:10px" onclick="window.location='micarcochita-carta.php?valor=ordena&categoria=tacos'" style="-webkit-filter: brightness(70%);filter: brightness(70%);" loading="lazy" onerror="this.onerror = null; this.src='assets/images/carta/categorias/default.jpg'" src="{{ asset('assets/images/carta/categoria/tacos.jpg') }}" />
            </div>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 col-xl-4 mt-4">
            <h3 style="color:#000000;" class="text-center mb-3">Salchipapas</h3>
            <div class="card p-2 mb-4 tarjeta">
                <img class="card-img-top" style="border-radius:10px" onclick="window.location='micarcochita-carta.php?valor=ordena&categoria=salchipapas'" style="-webkit-filter: brightness(70%);filter: brightness(70%);" loading="lazy" onerror="this.onerror = null; this.src='assets/images/carta/categorias/default.jpg'" src="{{ asset('assets/images/carta/categoria/salchipapas.jpg') }}" />
            </div>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 col-xl-4 mt-4">
            <h3 style="color:#000000;" class="text-center mb-3">Hamburguesas</h3>
            <div class="card p-2 mb-4 tarjeta">
                <img class="card-img-top" style="border-radius:10px" onclick="window.location='micarcochita-carta.php?valor=ordena&categoria=sandwich'" style="-webkit-filter: brightness(70%);filter: brightness(70%);" loading="lazy" onerror="this.onerror = null; this.src='assets/images/carta/categorias/default.jpg'" src="{{ asset('assets/images/carta/categoria/hamburguesas.jpg') }}" />
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="">
                <a href="micarcochita.php">
                    <img class="img-fluid d-none d-md-block w-100" src="{{ asset('assets/img/index/Platos-a-la-carta.png') }}" alt="">
                    <img class="img-fluid d-block d-md-none w-100" src="{{ asset('assets/img/index/Platos-a-la-carta.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 col-xl-4 mt-4">
            <h3 style="color:#000000;" class="text-center mb-3">Menú Especial</h3>
            <div class="card p-2 mb-4 tarjeta">
                <img class="card-img-top" style="border-radius:10px" onclick="window.location='micarcochita-carta.php?valor=ordena&categoria=menu_especial'" style="-webkit-filter: brightness(70%);filter: brightness(70%);" loading="lazy" onerror="this.onerror = null; this.src='assets/images/carta/categorias/default.jpg'" src="{{ asset('assets/images/carta/categoria/MENU_ESPECIAL_IMG.jpg') }}" />
            </div>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 col-xl-4 mt-4">
            <h3 style="color:#000000;" class="text-center mb-3">Combos</h3>
            <div class="card p-2 mb-4 tarjeta">
                <img class="card-img-top" style="border-radius:10px" onclick="window.location='micarcochita-carta.php?valor=ordena&categoria=combos'" style="-webkit-filter: brightness(70%);filter: brightness(70%);" loading="lazy" onerror="this.onerror = null; this.src='assets/images/carta/categorias/default.jpg'" src="{{ asset('assets/images/carta/categoria/COMBOS_IMG.jpg') }}" />
            </div>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 col-xl-4 mt-4">
            <h3 style="color:#000000;" class="text-center mb-3">La Carta</h3>
            <div class="card p-2 mb-4 tarjeta">
                <img class="card-img-top" style="border-radius:10px" onclick="window.location='micarcochita-carta.php?valor=ordena&categoria=la_carta'" style="-webkit-filter: brightness(70%);filter: brightness(70%);" loading="lazy" onerror="this.onerror = null; this.src='assets/images/carta/categorias/default.jpg'" src="{{ asset('assets/images/carta/categoria/LA-CARTA_IMG.jpg') }}" />
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 col-xl-4 mt-4">
            <h3 style="color:#000000;" class="text-center mb-3">Piqueos</h3>
            <div class="card p-2 mb-4 tarjeta">
                <img class="card-img-top" style="border-radius:10px" onclick="window.location='micarcochita-carta.php?valor=ordena&categoria=piqueos'" style="-webkit-filter: brightness(70%);filter: brightness(70%);" loading="lazy" onerror="this.onerror = null; this.src='assets/images/carta/categorias/default.jpg'" src="{{ asset('assets/images/carta/categoria/PIQUEOS_IMG.jpg') }}" />
            </div>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 col-xl-4 mt-4">
            <h3 style="color:#000000;" class="text-center mb-3">Ofertas</h3>
            <div class="card p-2 mb-4 tarjeta">
                <img class="card-img-top" style="border-radius:10px" onclick="window.location='micarcochita-carta.php?valor=ordena&categoria=ofertas'" style="-webkit-filter: brightness(70%);filter: brightness(70%);" loading="lazy" onerror="this.onerror = null; this.src='assets/images/carta/categorias/default.jpg'" src="{{ asset('assets/images/carta/categoria/OFERTAS.jpg') }}" />
            </div>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 col-xl-4 mt-4">
            <h3 style="color:#000000;" class="text-center mb-3">Bebidas</h3>
            <div class="card p-2 mb-4 tarjeta">
                <img class="card-img-top" style="border-radius:10px" onclick="window.location='micarcochita-carta.php?valor=ordena&categoria=bebidas'" style="-webkit-filter: brightness(70%);filter: brightness(70%);" loading="lazy" onerror="this.onerror = null; this.src='assets/images/carta/categorias/default.jpg'" src="{{ asset('assets/images/carta/categoria/BEBIDAS.jpg') }}" />
            </div>
        </div>
    </div>
</div>

<br>
<br>


@endsection

@section('scripts_adicionales')



@endsection
