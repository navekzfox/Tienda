@extends('layouts.ver')

@section('title', 'Carrito de Compras | Playcity')

@section('contenido')
<main class="container py-4">

    <h3 class="titulo">🛒 Carrito de Compras</h3>

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="cuadrodetexto-advertencia">
            {{ session('success') }}
        </div>
    @endif

    {{-- Mensaje de error --}}
    @if(session('error'))
<div class="Alerta-de-advertencia" role="alert">
  <ul>
    <li>{{ session('error') }}</li>
  </ul>
  <button type="button" class="boton-de-cierre" onclick="cerrarAlerta(this)" aria-label="Cerrar">x</button>
</div>
@endif


    @php $total = 0; @endphp

    @if(session('carrito') && count(session('carrito')) > 0)
        <table class="tabla-estilo">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th style="display: none;">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carrito as $id => $producto)
                    @php
                        $precio = floatval($producto['precio']);
                        $cantidad = intval($producto['cantidad']);
                        $subtotal = $precio * $cantidad;
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td data-label="Producto">{{ $producto['nombre'] }}</td>
                        <td data-label="Precio">${{ number_format($precio, 2) }}</td>
                        <td data-label="Cantidad">{{ $cantidad }}</td>
                        <td data-label="Subtotal">${{ number_format($subtotal, 2) }}</td>
                        <td>
                            <a href="{{ route('carrito.eliminar', $id) }}" class="carrito">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"><strong>Total:</strong></td>
                    <td colspan="2"><strong>${{ number_format($total, 2) }}</strong></td>
                </tr>
            </tfoot>
        </table>


    @else
        <div class="cuadrodetexto">
            <p>No hay productos en el carrito.</p>
        </div>
    @endif

    <div class="continuar-compra">
        <a class="carrito" href="{{ url('/ver') }}">Seguir comprando</a>
    </div>
</main>
@endsection
