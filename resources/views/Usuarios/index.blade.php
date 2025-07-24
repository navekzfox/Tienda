@extends('layouts/plantilla')

@section('title','Usuarios|Gameplanet')

@section('contenido')

<main>

<div class="container py-4">

<h2>Ingresar</h2>
<a href="{{ url('/iniciar')}}" class="btn btn-primary btn-sm">Iniciar con una cuenta existente</a>

</div>

<div class="container py-4">

<h2>Crear nueva cuenta</h2>
<a href="{{ url('Usuarios/create') }}" class="btn btn-primary btn-sm">Ingresar nuevo usuario</a>
<br>
<br>
<a href="{{ url('/')}}" class="btn btn-secondary">Regresar</a>
</div>

</main>

@endsection
