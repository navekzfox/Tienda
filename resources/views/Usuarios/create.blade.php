@extends('layouts/plantilla')

@section('title','Registrate|Gameplanet')

@section('contenido')

<main>

<div class="container py-4">

<h2>Registrate</h2>

@if ($errors->any())

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

<form action="{{ url('Usuarios') }}" method="post">

@csrf

<div class="mb-3 row">
    <label for="Usuario" class="col-sm-2 col-form-label">Usuario:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="Usuario" id="Usuario" value="{{old('Usuario')}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="contraseña" class="col-sm-2 col-form-label">Contraseña:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="contraseña" id="contraseña" value="{{old('contraseña')}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{old('Nombre')}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="Apellido" class="col-sm-2 col-form-label">Apellido:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="Apellido" id="Apellido" value="{{old('Apellido')}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="Fecha" class="col-sm-2 col-form-label">Fecha de nacimiento:</label>
<div class="col-sm-5">
<input type="date" class="form-control" name="Fecha" id="Fecha"  value="{{old('Fecha')}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Correo electronico:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}">
</div>
</div>

<a href="{{ url('Usuarios')}}" class="btn btn-secondary">Regresar</a>

<button type="submit" class="btn btn-success" >Guardar</button>

</form>
</div>
</main>
