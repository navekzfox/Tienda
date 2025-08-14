@extends('layouts.plantilla')

@section('title','Ventas|Playcity')

@section('contenido')

<main>

<h2 class="titulo">Ventas</h2>

<table class="tabla-productos">

<thead>
 <tr>
    <th style="display: none;">id</th>
    <th >Usuario</th>
    <th >Cantidad</th>
    <th >Productos</th>
    <th >Total</th>
    <th >Fecha de Compra</th>

 </tr>
 </thead>

 <tbody>
@foreach($Venta as $info)
 <tr>
    <td data-label="ID" style="display: none;">{{$info->id}}</td>
    <td data-label="Usuario">{{$info->Usuario}}</td>
    <td data-label="Cantidad">{{$info->Cantidad}}</td>
    <td data-label="Productos">{{$info->Productos}}</td>
    <td data-label="Total">{{$info->Total}}</td>
    <td data-label="Fecha de Compra">{{$info->fecha_venta}}</td>
 </tr>
@endforeach
 </tbody>

</table>

</main>

@endsection
