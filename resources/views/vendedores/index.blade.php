@extends('layouts/inicio')

@section('title','Vendedores|Playcity')

@section('contenido')

<main>

<div class="cuadrodetexto-advertencia">

<h2>Esta ingresando en una cuenta de vendedores de Playcity de favor si no es vendedor regrese al Inicio</h2>
<p>Si no tienes una cuenta, puedes regresar al inicio a crear una de usuario.</p>
<br>
<a href="{{ url('/')}}" class="btn btn-secondary">Regresar</a>
<br>
<a href="{{ url('vendedores/login')}}" class="btn btn-primary btn-sm">Continuar si es vendedor</a>

</div>

</main>
@endsection
