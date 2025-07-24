@extends('layouts/cuerpo')

@section('title','Iniciar|Gameplanet')

@section('contenido')
<main>

<div class="formulario">

<h2>Iniciar sesion</h2>

@if ($errors->any())

<div class="Alerta-de-advertencia" role="alert">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
  <button type="button" class="boton-de-cierre" onclick="cerrarAlerta(this)" aria-label="Cerrar">x</button>
</div>

@endif

 <form method="POST" action="{{ route('login') }}">
    @csrf

        <label for="Usuario">Usuario:</label>
        <input class="controls" type="text" name="Usuario">



        <label for="contraseña">Contraseña:</label>
        <input  class="controls" type="password" name="contraseña">



    <button class="botons" type="submit">Iniciar sesión</button>
    <a href="/" class="btn btn-secondary">Regresar</a>
</div>
</form>

</main>
@endsection
