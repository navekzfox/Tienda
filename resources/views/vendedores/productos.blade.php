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
    <td></td>
    <td>
                    <a href="{{ url('vendedores/' . $info->id . '/edit') }}" class="btn btn-warning btn-sm">
                        Editar
                    </a>
                </td>
    <td> <form action="{{ url('vendedores/'.$info->id)}}" method="post">
        @method("DELETE")
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </form>
    </td>
    <td></td>
 </tr>
@endforeach
 </tbody>

</table>

<a href="{{ url('vendedores/cuenta')}}" class="btn btn-secondary">Regresar</a>

</main>
