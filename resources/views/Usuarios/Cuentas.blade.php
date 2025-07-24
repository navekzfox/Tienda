@extends('layouts/plantilla')

@section('title','Usuarios|Gameplanet')

@section('contenido')

<main>


<table class="table table-hover">

<thead>
 <tr>
    <th>id</th>
    <th>Usuario</th>
    <th>Contraseña</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Fecha de nacimiento</th>
    <th>email</th>
    <th></th>
    <th></th>
 </tr>
 </thead>

 <tbody>
@foreach($cuenta as $datos)
 <tr>
    <td>{{$datos->id}}</td>
    <td>{{$datos->Usuario}}</td>
    <td>{{$datos->contraseña}}</td>
    <td>{{$datos->Nombre}}</td>
    <td>{{$datos->Apellido}}</td>
    <td>{{$datos->Fecha_nacimiento}}</td>
    <td>{{$datos->email}}</td>
    <td> <form action="{{ url('Usuarios/'.$datos->id)}}" method="post">
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

</main>
@endsection
