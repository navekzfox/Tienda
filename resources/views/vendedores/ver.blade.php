@extends('layouts/plantilla')

@section('title','Productos|Gameplanet')

@section('contenido')

<main>


<table class="table table-hover">

<thead>
 <tr>
    <th>id</th>
    <th>nombre</th>
    <th>descripcion</th>
    <th>precio</th>
    <th>cantidad</th>
    <th>fecha de creacion</th>
    <th></th>
    <th></th>
 </tr>
 </thead>

 <tbody>
@foreach($objeto as $info)
 <tr>
    <td>{{$info->id}}</td>
    <td>{{$info->nombre}}</td>
    <td>{{$info->descripcion}}</td>
    <td>{{$info->precio}}</td>
    <td>{{$info->cantidad}}</td>
    <td>{{$info->created_at}}</td>
    <td>
        <a href="{{ url('/Cuentapersonal')}}" class="btn btn-secondary">Regresar</a>
</td>
    <td></td>

@endforeach
 </tbody>

</table>

</main>
