@extends('layouts/cuerpo')

@section('title','Registrate|Gameplanet')

@section('contenido')

<main>

<div class="formulario">

<h2>Registrate</h2>

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

<form action="{{ url('Usuarios') }}" method="post">

@csrf


    <label for="Usuario" class="col-sm-2 col-form-label">Usuario:</label>

    <input type="text" class="controls" name="Usuario" id="Usuario" value="{{old('Usuario')}}">

    <label for="contraseña" class="col-sm-2 col-form-label">Contraseña:</label>

    <input type="text" class="controls" name="contraseña" id="contraseña" value="{{old('contraseña')}}">


    <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>

    <input type="text" class="controls" name="Nombre" id="Nombre" value="{{old('Nombre')}}">


    <label for="Apellido" class="col-sm-2 col-form-label">Apellido:</label>

    <input type="text" class="controls" name="Apellido" id="Apellido" value="{{old('Apellido')}}" >

    <label for="Fecha" class="col-sm-2 col-form-label">Fecha de nacimiento:</label>

<input type="date" class="controls" name="Fecha" id="Fecha"  value="{{old('Fecha')}}" >


    <label for="email" class="col-sm-2 col-form-label">Correo electronico:</label>

    <input  type="text" class="controls" name="email" id="email" value="{{old('email')}}">

    <button class="botons" type="submit">Guardar</button>

    <a href="/" class="btn btn-secondary">Regresar</a>

</form>
</div>
</main>
@endsection
