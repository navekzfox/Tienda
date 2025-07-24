@extends('layouts/productos')

@section('title','Editar Productos|Gameplanet')

@section('contenido')

<main>

<div class="formulario">

<h2>Modificar Producto</h2>

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

<form action="{{ url('Vendedores/'.$objeto->id) }}" method="post">
@method("PUT")
@csrf


    <label for="nombre" class="col-sm-2 col-form-label">Nombre del Producto:</label>

    <input type="text" class="controls" name="nombre" id="nombre" value="{{$objeto->nombre}}">



    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion del Producto:</label>

    <input type="text" class="controls" name="descripcion" id="descripcion" value="{{$objeto->descripcion}}">



    <label for="precio" class="col-sm-2 col-form-label">Precio:</label>

    <input type="text" class="controls" name="precio" id="precio" value="{{$objeto->precio}}">



    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad:</label>

    <input type="text" class="controls" name="cantidad" id="cantidad" value="{{$objeto->cantidad}}">

<button type="submit" class="botons" >Modificar</button>

<a href="{{ url('/Vendedores/show')}}" >Regresar</a>

</form>
</div>
</main>

@endsection
