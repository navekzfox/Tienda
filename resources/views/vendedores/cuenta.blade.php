@extends('layouts.plantilla')
@section('title','Cuenta Vendedor')
@section('contenido')
<main class="container py-4">


    @if($vendedor)
    <div class="cuentavendor">
        <h3>Bienvenido, {{ $vendedor->Nombre ?? 'Invitado' }}</h3>
                <p style="display: none;"><strong>ID:</strong> {{ $vendedor->id }}</p>
                <p><strong>Nombre:</strong> {{ $vendedor->Nombre }}</p>
                <p><strong>Apellido:</strong> {{ $vendedor->Apellido}}</p>
    </div>

    @else
        <div class="Alerta-de-advertencia">No estás authentificado.</div>
    @endif
</main>
@endsection
