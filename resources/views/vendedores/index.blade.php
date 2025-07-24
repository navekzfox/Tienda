@extends('layouts/plantilla')

@section('title','Vendedores|Gameplanet')

@section('contenido')

<main>

<div class="container py-4">

<h2>Ingresar</h2>
<a href="{{ url('vendedores/login')}}" class="btn btn-primary btn-sm">Iniciar con una cuenta existente</a>


<br>
<br>
<a href="{{ url('/')}}" class="btn btn-secondary">Regresar</a>
</div>

</main>
