<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Productos;

class CarritoController extends Controller
{
    public function agregar($id)
{
    $producto = Productos::findOrFail($id);

    // Obtener el carrito de la sesión
    $carrito = session()->get('carrito', []);

    // Verificar si ya existe en el carrito
    if (isset($carrito[$id])) {
        // Verificar si se puede agregar una unidad más
        if ($carrito[$id]['cantidad'] < $producto->cantidad) {
            $carrito[$id]['cantidad']++;
        } else {
            return redirect()->back()->with('error', 'No hay suficiente stock para agregar más unidades de este producto.');
        }
    } else {
        // Si no está en el carrito, verificar que haya al menos 1 en stock
        if ($producto->cantidad > 0) {
            $carrito[$id] = [
                "nombre" => $producto->nombre,
                "precio" => floatval($producto->precio),
                "cantidad" => 1
            ];
        } else {
            return redirect()->back()->with('error', 'Producto sin stock.');
        }
    }

    session()->put('carrito', $carrito);

    return redirect()->back()->with('success', 'Producto añadido al carrito');
}


    public function mostrar()
    {
        $carrito = session()->get('carrito', []);
        return view('carrito.index', compact('carrito'));
    }

    public function eliminar($id)
    {
        $carrito = session()->get('carrito');

        if (isset($carrito[$id])) {
            unset($carrito[$id]);
            session()->put('carrito', $carrito);
        }

        return redirect()->back()->with('error', 'Producto eliminado del carrito');
    }
}
