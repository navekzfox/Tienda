@extends('layouts/cuerpo')

@section('title','Editar datos|Playcity')

@section('contenido')

<main>

<div class="formulario">

<h2>Modo edicion</h2>

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

<form action="{{ url('Usuarios/'.$datos->id) }}" method="post" autocomplete="off">
@method("PUT")
@csrf

    <label for="Usuario" class="col-sm-2 col-form-label">Usuario:</label>
    <input type="text" class="controls" name="Usuario" id="Usuario" value="{{ $datos->Usuario }}" required>



    <label for="contraseña" class="col-sm-2 col-form-label">Contraseña:</label>
     <div class="contenedor-contraseña">
    <input type="password" class="controls" name="contraseña" id="contraseña" value="{{$datos->contraseña}}" autocomplete="new-password" required>
    <button onclick="togglePassword()" type="button">
        <img src="{{ asset('imagen/Oculto.png') }}">
    </button>
    </div>


    <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
    <input type="text" class="controls" name="Nombre" id="Nombre" value="{{$datos->Nombre}}" required>



    <label for="Apellido" class="col-sm-2 col-form-label">Apellido:</label>
    <input type="text" class="controls" name="Apellido" id="Apellido" value="{{ $datos->Apellido }}" required>



    <label for="Fecha" class="col-sm-2 col-form-label">Fecha de nacimiento:</label>
<input type="date" class="controls" name="Fecha" id="Fecha"  value="{{$datos->Fecha_nacimiento}}" required>



    <label for="email" class="col-sm-2 col-form-label">Correo electronico:</label>
    <input type="text" class="controls" name="email" id="email" value="{{$datos->email}}">



<button type="submit" class="botons" >Modificar</button>

<a href="{{ url('/Cuentapersonal')}}">Regresar</a>

</form>
</div>
</main>
@endsection
