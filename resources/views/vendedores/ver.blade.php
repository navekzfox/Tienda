@extends('layouts/ver')

@section('title','Productos|Playcity')

@section('contenido')

<main>


<table class="tabla-productos">

<thead>
 <tr>
    <th data-label="ID" style="display: none;">id</th>
    <th data-label="Nombre">nombre</th>
    <th data-label="Descripción">descripcion</th>
    <th data-label="Precio">precio</th>
    <th data-label="Cantidad">cantidad</th>
    <th data-label="Fecha de creación">fecha de creacion</th>
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
        <a href="{{ url('/Cuentapersonal')}}">Añadir al carrito</a>
</td>

@endforeach
 </tbody>

</table>

</main>
@endsection
