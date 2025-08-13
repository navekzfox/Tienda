<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Productos;
use App\Models\Usuarios;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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




public function comprar()
{
    $carrito = session()->get('carrito', []);

    if (empty($carrito)) {
        return redirect()->route('carrito.mostrar')->with('error', 'El carrito está vacío.');
    }

    $usuario = session('usuario_id'); // Asegúrate de que este valor existe en sesión

    DB::beginTransaction(); // Iniciar transacción para asegurar integridad, (DB::beginTransaction): garantizan que si ocurre un error (por ejemplo, stock insuficiente), todo se revierte.

    try {
        foreach ($carrito as $productoId => $item) {
            $producto = Productos::findOrFail($productoId);

            // Verificar si hay suficiente stock
            if ($producto->cantidad < $item['cantidad']) {
                DB::rollBack();
                return redirect()->route('carrito.mostrar')->with('error', "Stock insuficiente para el producto {$producto->nombre}.");
            }

            // Registrar la venta
            Ventas::create([
                'Producto' => $producto->nombre,
                'Usuario' => $usuario,
                'Cantidad' => $item['cantidad'],
                'Total' => $item['precio'] * $item['cantidad'],
                'fecha_venta' => Carbon::now()
            ]);

            // Actualizar stock del producto
            $producto->cantidad -= $item['cantidad'];
            $producto->save();
        }

        DB::commit(); // Confirmar transacción

        // Limpiar carrito
        session()->forget('carrito');

        return redirect()->route('carrito.mostrar')->with('success', 'Compra realizada con éxito.');

    } catch (\Exception $e) {
        DB::rollBack(); // Revertir si hay error
        return redirect()->route('carrito.mostrar')->with('error', 'Error al procesar la compra: ' . $e->getMessage());
    }
}


}
