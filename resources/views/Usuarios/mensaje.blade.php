@extends('layouts/plantilla')

@section('title','Registro|Gameplanet')

@section('contenido')

<main>
 <div class="container_py-4">

 <h2>{{$msg}}</h2>

 <a href="{{ url('Usuarios') }}" class="btn btn-secondary">Regresar</a>

 </div>

</main>
