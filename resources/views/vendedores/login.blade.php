@extends('layouts.cuerpo')
@section('title','Login Vendedor')
@section('contenido')
<main class="formulario">
    <h2>Ingreso Vendedor</h2>
    <form action="{{ route('vendedores.login.submit') }}" method="POST">
        @csrf
            <label for="Clave_ingreso" class="form-label">Código de ingreso</label>
            <input type="password" id="Clave_ingreso" name="Clave_ingreso" class="controls" value="{{ old('codigo') }}" required>
            @error('Clave_ingreso')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <button class="botons">Ingresar</button>
    </form>

    <a href="{{ url('Vendedores')}}" class="btn btn-secondary">Regresar</a>

</main>
@endsection
