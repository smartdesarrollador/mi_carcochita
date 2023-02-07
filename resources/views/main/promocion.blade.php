@extends('layout.layout.layout')

@section('titulo', 'Inicio')

@section('meta_title', 'Bienvenidos a Mi Carcochita')

@section('librerias-inicio')

    <meta property="og:image" content="https://micarcochita.com.pe/assets/img/OpenGraph/ogCarta.png" />

    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta https-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Carcochita - Carta</title>
    <?php include 'shared/libraries.php'; ?>
    <link rel="stylesheet" href="assets/css/cards.css">
    <link rel="stylesheet" href="assets/css/seleccion_multiple.css">
    <link rel="stylesheet" href="vendor/swiper/swiper.min.css">
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

@section('contenido')



@endsection

@section('scripts')



@endsection
