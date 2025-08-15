@extends('layouts/cuenta')

@section('title','Usuario|Playcity')

@section('contenido')

    <h3 class="titulo">Información personal</h3>

    @if ($usuarioLogueado)
    <table class="tabla-estilo">
        <thead>
            <tr>
                <th style="display:none">ID</th>
                <th>Usuario</th>
                <th style="display: none;">Contraseña</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td data-label="ID" style="display:none">{{ $usuarioLogueado->id }}</td>
                <td data-label="Usuario">{{ $usuarioLogueado->Usuario }}</td>
                <td data-label="Contraseña" style="display: none;">{{ $usuarioLogueado->contraseña }}</td>
                <td data-label="Nombre">{{ $usuarioLogueado->Nombre }}</td>
                <td data-label="Apellido">{{ $usuarioLogueado->Apellido }}</td>
                <td data-label="Fecha de nacimiento">{{ $usuarioLogueado->Fecha_nacimiento }}</td>
                <td data-label="Email">{{ $usuarioLogueado->email }}</td>
            </tr>

        </tbody>
    </table>
    @else
        <div class="Alerta-de-advertencia">No hay un usuario logueado.</div>
    @endif


@endsection
