<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="website icon" type="png" href="{{ asset('imagen/Ellen2.png')}}">
        <link rel="stylesheet" href="{{ asset('css/diseño.css')}}">
        <link rel="stylesheet" href="{{ asset('css/tablas.css')}}">
        <link rel="stylesheet" href="{{ asset('css/cuentas.css')}}">

</head>

<header>
<div class="encabezado">

    <img src="{{ asset('imagen/Ellen2.png')}}" alt="">
<h2 class="Titulo">Playcity</h2>
</div>

<nav class="navegacion">

<ul class="menu" id="menu">
         <li><a href="{{ url('/Cuentapersonal')}}">Regresar</a></li>
        <li><a href="{{ url('logout') }}">Cerrar Sesión</a></li>
    </ul>
</nav>
</div>

</header>


<body>

@yield('contenido')

<script src="{{ asset('js/alertas.js') }}"></script>
</body>
</html>
