@extends('layouts.cuerpo')
@section('title','Login Vendedor')
@section('contenido')
<main class="formulario">
    <h2>Ingreso Vendedor</h2>
    <form action="{{ route('vendedores.login.submit') }}" method="POST">
        @if ($errors->any())
            <div class="Alerta-de-advertencia" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="boton-de-cierre" onclick="cerrarAlerta(this)" aria-label="Cerrar">x</button>
            </div>
        @endif
        @csrf
            <label for="Clave_ingreso" class="form-label">Código de ingreso</label>
            <input type="password" id="Clave_ingreso" name="Clave_ingreso" class="controls" value="{{ old('codigo') }}">

        <button class="botons">Ingresar</button>
    </form>

    <a href="{{ url('Vendedores')}}" class="btn btn-secondary">Regresar</a>

</main>
@endsection
