<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="website icon" type="png" href="{{ asset('imagen/Ellen2.png')}}" alt="Ir a la página de vendedores">
        <link rel="stylesheet" href="{{ asset('css/diseño.css')}}">
        <link rel="stylesheet" href="{{ asset('css/tablas.css')}}">
        <link rel="stylesheet" href="{{ asset('css/cuentas.css')}}">

</head>

<header>
<div class="encabezado">

    <img src="{{ asset('imagen/Ellen2.png')}}" alt="">
     <a href="{{ url('Vendedores') }}" class="">a</a>
<h2 class="Titulo">Playcity</h2>
</div>

</header>


<body>

@yield('contenido')

<script src="{{ asset('js/alertas.js') }}"></script>
</body>
</html>
