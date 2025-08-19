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

    <img src="{{ asset('imagen/polistation.jpg')}}" alt="">
<h2 class="Titulo">Playcity</h2>
</div>

<nav class="navegacion">

<ul class="menu" id="menu">
    @if($usuarioLogueado)
    <li><a href="/logout">Cerrar sesión</a></li>
    <li><a href="{{ url('Usuarios/' . $usuarioLogueado->id . '/edit') }}">Editar cuenta</a></li>
    <li><a href="{{ url('/ver') }}">Ver productos</a></li>
    <li><a class="carrito" href="{{ route('carrito.mostrar') }}">Ver carrito</a></li>
    <li><form action="{{ url('Usuarios/' . $usuarioLogueado->id) }}" method="POST">
                    @method("DELETE")
                        @csrf
                        <button type="submit" class="advertencia" onclick="return confirm('¿Estás seguro?')">Eliminar cuenta</button>
                    </form></li>
                    @else
                    <li><a href="{{ url('/')}}">Inicio</a></li>
    <li><a href="{{ url('/login') }}">Iniciar sesión</a></li>
    <li><a href="{{ url('/register') }}">Registrarse</a></li>
    @endif
    </ul>
</nav>
</div>

</header>


<body>

@yield('contenido')

<script src="{{ asset('js/alertas.js') }}"></script>
<script src="{{ asset('js/acciones.js') }}"></script>
</body>
</html>
