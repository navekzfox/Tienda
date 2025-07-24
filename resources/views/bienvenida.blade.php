@extends('layouts/Inicio')

@section('title','Inicio|Playcity')

@section('contenido')

<main>
<h1 class="titulo">Playcity</h1>


<div class="cuadrodetexto">
<p>Bienvenido a Playcity. El lugar donde podrás encontrar una amplia variedad de juegos. En esta tienda virtual podrás explorar y adquirir los mejores títulos del mercado. Tanto físicos como digitales.</p>
<br>
<p>¡Explora nuestra colección y encuentra tu próximo juego favorito!</p>
<br>
<p>Recuerda registrarte para obtener acceso a ofertas exclusivas y contenido adicional.</p>
<br>
<h2>Ingresar</h2>
<a href="{{ url('/iniciar')}}" class="btn btn-primary btn-sm">Iniciar con una cuenta existente</a>
<br>
<h2>Crear nueva cuenta</h2>
<a href="{{ url('Usuarios/create') }}" class="btn btn-primary btn-sm">Ingresar nuevo usuario</a>
<br>
</div>

</main>

@endsection
