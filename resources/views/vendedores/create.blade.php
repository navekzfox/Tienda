@extends('layouts/plantilla')

@section('title','Registra un Producto|Gameplanet')

@section('contenido')

<main>

<div class="container py-4">

<h2>Agregar Producto</h2>

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

<form action="{{ url('vendedores') }}" method="post">

@csrf

<div class="mb-3 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre del Producto:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion del Producto:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{old('descripcion')}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="precio" id="precio" value="{{old('precio')}}" required>
</div>
</div>

<div class="mb-3 row">
    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad:</label>
<div class="col-sm-5">
    <input type="text" class="form-control" name="cantidad" id="cantidad" value="{{old('cantidad')}}" required>
</div>
</div>

<a href="{{ url('vendedores/cuenta')}}" class="btn btn-secondary">Regresar</a>

<button type="submit" class="btn btn-success" >Guardar</button>

</form>
</div>
</main>
