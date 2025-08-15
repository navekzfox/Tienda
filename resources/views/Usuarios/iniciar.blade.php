@extends('layouts/cuerpo')

@section('title','Iniciar|Playcity')

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

 <form method="POST" action="{{ route('login') }}" autocomplete="off">
    @csrf

        <label for="Usuario">Usuario:</label>
        <input class="controls" type="text" name="Usuario">



        <label for="contraseña">Contraseña:</label>
         <div class="contenedor-contraseña">
    <input type="password" class="controls" name="contraseña" id="contraseña" value="{{old('contraseña')}}">
    <button onclick="togglePassword()" type="button">
        <img src="{{ asset('imagen/Oculto.png') }}">
    </button>
    </div>


    <button class="botons" type="submit">Iniciar sesión</button>
    <a href="/" class="btn btn-secondary">Regresar</a>
</div>
</form>

</main>
@endsection
