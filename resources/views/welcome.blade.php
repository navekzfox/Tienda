@extends('layouts/plantilla')

@section('title','Usuarios|Gameplanet')

@section('contenido')

<main>
<h1 class="logo">Gameplanet</h1>

<div class="container py-4">

<h2>Ingresar como usuario</h2>
<a href="{{ url('Usuarios')}}" class="btn btn-primary btn-sm">Usuario</a>

</div>

<div class="container py-4">

<h2>Ingresar como vendedor</h2>
<a href="{{ url('vendedores') }}" class="btn btn-primary btn-sm">Vendedor</a>

</div>

</main>

@endsection
