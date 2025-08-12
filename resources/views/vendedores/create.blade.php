@extends('layouts/cuerpo')

@section('title','Registra un Producto|Playcity')

@section('contenido')

<main>

<div class="formulario">

<h2>Agregar Producto</h2>

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

<form action="{{ url('Vendedores') }}" method="post">

@csrf


    <label for="nombre" class="col-sm-2 col-form-label">Nombre del Producto:</label>

    <input type="text" class="controls" name="nombre" id="nombre" value="{{old('nombre')}}" required>


    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion del Producto:</label>

    <input type="text" class="controls" name="descripcion" id="descripcion" value="{{old('descripcion')}}" required>


    <label for="precio" class="col-sm-2 col-form-label">Precio:</label>

    <input type="text" class="controls" name="precio" id="precio" value="{{old('precio')}}" required>


    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad:</label>

    <input type="text" class="controls" name="cantidad" id="cantidad" value="{{old('cantidad')}}" required>

<button type="submit" class="botons" >Guardar</button>

<a href="{{ url('vendedores/cuenta')}}">Regresar</a>

</form>
</div>
</main>
@endsection
