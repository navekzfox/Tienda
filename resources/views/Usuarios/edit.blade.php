@extends('layouts/plantilla')

@section('title','Editar datos|Gameplanet')

@section('contenido')

<main>

<div class="container py-4">

<h2>Modo edicion</h2>

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

<form action="{{ url('Usuarios/'.$datos->id) }}" method="post">
@method("PUT")
@csrf

<div class="mb-3 row">
    <label for="Usuario" class="col-sm-2 col-form-label">Usuario:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="Usuario" id="Usuario" value="{{ $datos->Usuario }}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="contraseña" class="col-sm-2 col-form-label">Contraseña:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="contraseña" id="contraseña" value="{{ $datos->contraseña}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{$datos->Nombre}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="Apellido" class="col-sm-2 col-form-label">Apellido:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="Apellido" id="Apellido" value="{{ $datos->Apellido }}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="Fecha" class="col-sm-2 col-form-label">Fecha de nacimiento:</label>
<div class="col-sm-5">
<input type="date" class="form-control" name="Fecha" id="Fecha"  value="{{$datos->Fecha_nacimiento}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Correo electronico:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="email" id="email" value="{{$datos->email}}">
</div>
</div>

<a href="{{ url('/Cuentapersonal')}}" class="btn btn-secondary">Regresar</a>

<button type="submit" class="btn btn-success" >Modificar</button>

</form>
</div>
</main>
