<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('titulo')</title>

    @include('layout.layout.metas')
    <meta name="title" content="@yield('meta_title')">
    @section('metas_adicionales')  
    @show

    @include('layout.layout.links')
    @section('links_adicionales')
    @show
    @section('styles_adicionales')
    @show

    @include('layout.layout.scripts_head')
    @section('scripts_head_adicionales')
    @show

</head>

<body>
    @include('layout.layout.alerts')
    
    @include('layout.layout.menu')



    @yield('contenido')


    @include('layout.layout.footer')

    @include('layout.layout.scripts')
    @section('scripts_adicionales')
    @show

</body>

</html>
