@extends('layouts.plantilla')
@section('title','Login Vendedor')
@section('contenido')
<main class="container py-4">
    <h2>Ingreso Vendedor</h2>
    <form action="{{ route('vendedores.login.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Clave_ingreso" class="form-label">Código de ingreso</label>
            <input id="Clave_ingreso" name="Clave_ingreso" class="form-control" value="{{ old('codigo') }}" required>
            @error('Clave_ingreso')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Ingresar</button>
    </form>

    <a href="{{ url('vendedores')}}" class="btn btn-secondary">Regresar</a>

</main>
