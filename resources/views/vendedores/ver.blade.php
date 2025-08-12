@extends('layouts/ver')

@section('title','Productos|Playcity')

@section('contenido')

<main>
{{-- Mensaje de éxito --}}
@if(session('success'))
    <div class="Alerta-de-exito">
        <ul>
            <li>{{ session('success') }}</li>
        </ul>
        <button type="button" class="boton-exito" onclick="cerrarAlerta(this)" aria-label="Cerrar">x</button>
    </div>
@endif

    {{-- Mensaje de error --}}
    @if(session('error'))
<div class="Alerta-de-advertencia" role="alert">
  <ul>
    <li>{{ session('error') }}</li>
  </ul>
  <button type="button" class="boton-de-cierre" onclick="cerrarAlerta(this)" aria-label="Cerrar">x</button>
</div>
@endif


<table class="tabla-productos">

<thead>
 <tr>
    <th data-label="ID" style="display: none;">ID</th>
    <th data-label="Nombre">Nombre</th>
    <th data-label="Descripción">Descripción</th>
    <th data-label="Precio">Precio</th>
    <th data-label="Cantidad">Cantidad</th>
    <th data-label="Fecha de creación">Fecha de agregado</th>
 </tr>
 </thead>

 <tbody>
@foreach($objeto as $info)
 <tr>
    <td data-label="ID" style="display: none;">{{$info->id}}</td>
    <td data-label="Nombre">{{$info->nombre}}</td>
    <td data-label="Descripción">{{$info->descripcion}}</td>
    <td data-label="Precio">{{$info->precio}}</td>
    <td data-label="Cantidad">{{$info->cantidad}}</td>
    <td data-label="Fecha de creación">{{$info->created_at}}</td>
    <td>
        <a class="carrito" href="{{ route('carrito.agregar', $info->id) }}">Añadir al carrito</a>
    </td>

@endforeach
 </tbody>

</table>

</main>
@endsection
