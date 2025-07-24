@extends('layouts/plantilla')

@section('title','Usuario|Gameplanet')

@section('contenido')

<main class="container py-4">

    <h3>Información personal</h3>

    @if ($usuarioLogueado)
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $usuarioLogueado->id }}</td>
                <td>{{ $usuarioLogueado->Usuario }}</td>
                <td>{{ $usuarioLogueado->contraseña }}</td>
                <td>{{ $usuarioLogueado->Nombre }}</td>
                <td>{{ $usuarioLogueado->Apellido }}</td>
                <td>{{ $usuarioLogueado->Fecha_nacimiento }}</td>
                <td>{{ $usuarioLogueado->email }}</td>
                <td>
                    <a href="{{ url('Usuarios/' . $usuarioLogueado->id . '/edit') }}" class="btn btn-warning btn-sm">
                        Editar
                    </a>
                </td>
                <td>
                    <form action="{{ url('Usuarios/' . $usuarioLogueado->id) }}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
                 <td>

        <a href="{{ url('/ver') }}" class="btn btn-warning btn-sm">Ver productos</a>

                </td>
                <td>
                    <a href="{{ url('Usuarios')}}" class="btn btn-secondary">Regresar</a>
                </td>

            </tr>


        </tbody>
    </table>
    @else
        <div class="alert alert-warning">No hay un usuario logueado.</div>
    @endif

</main>


