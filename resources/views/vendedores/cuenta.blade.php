@extends('layouts.plantilla')
@section('title','Cuenta Vendedor')
@section('contenido')
<main class="container py-4">
    <h3>Bienvenido, {{ $vendedor->Nombre ?? 'Invitado' }}</h3>

    @if($vendedor)
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $vendedor->id }}</p>
                <p><strong>Apellido:</strong> {{ $vendedor->Nombre }}</p>
                <p><strong>Código:</strong> {{ $vendedor->Clave_ingreso }}</p>
                <a href="{{ route('vendedores.logout') }}" class="btn btn-danger">Cerrar sesión</a>
            </div>
        </div>
    @else
        <div class="alert alert-warning">No estás authentificado.</div>
    @endif

<table>

<thead>
    <th>
        <div class="boton">
        <a href="{{ url('vendedores/create') }}">Agregar productos</a>
        </div>
    </th>
    <th>
        <div class="boton">
        <a href="{{ url('vendedores/show') }}">Ver productos</a>
        </div>
    </th>
</thead>

</table>

</main>
