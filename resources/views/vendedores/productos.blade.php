@extends('layouts.productos')

@section('title','Productos|Gameplanet')

@section('contenido')

<main>

<table class="tabla-productos">

<thead>
 <tr>
    <th style="display: none;">id</th>
    <th >nombre</th>
    <th >descripcion</th>
    <th >precio</th>
    <th >cantidad</th>
    <th >fecha de creacion</th>

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
    <td data-label="Fecha de Creación">{{$info->created_at}}</td>
    <td>
                    <a href="{{ url('Vendedores/' . $info->id . '/edit') }}" class="editar">
                        Editar
                    </a>
                </td>
    <td> <form action="{{ url('Vendedores/'.$info->id)}}" method="post">
        @method("DELETE")
        @csrf
        <button type="submit" class="advertencia">Eliminar</button>
        </form>
    </td>
    <td></td>
 </tr>
@endforeach
 </tbody>

</table>
</main>
@endsection
