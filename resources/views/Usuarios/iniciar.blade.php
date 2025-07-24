@extends('layouts/plantilla')

@section('title','Iniciar|Gameplanet')

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

 <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3 row">
        <label for="Usuario">Usuario:</label>
        <input type="text" name="Usuario" required>
    </div>

    <div class="mb-3 row">
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" required>
    </div>

    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    <a href="{{ url('Usuarios') }}" class="btn btn-secondary">Regresar</a>
</form>

</main>
