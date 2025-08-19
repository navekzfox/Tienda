<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\vendedores;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vendedores.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
         $request->validate([
            'nombre' => 'required|max:50',
            'descripcion' => 'max:500',
            'precio' => 'required|max:15',
            'cantidad' => 'required|max:50'
        ]);// Validar los campos de entrada

        $objeto = new Productos();
        $objeto-> nombre= $request->input('nombre');
        $objeto->descripcion = $request->input('descripcion');
        $objeto->precio = $request->input('precio');
        $objeto->cantidad = $request->input('cantidad');
        $objeto->save();// Guardar los datos del producto en la base de datos

        return view("vendedores.mensaje",['msg' => "Se ha guardado el producto correctamente"]);// Redirigir a una vista de mensaje de éxito
    }

    /**
     * Display the specified resource.
     */
    public function show(vendedores $vendedores)
    {
        $objeto = Productos::all();
    return view('vendedores.productos', ['objeto' => $objeto]);// Mostrar todos los productos disponibles
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $objeto = Productos::find($id);
        return view('vendedores.edit',['objeto' => $objeto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'descripcion' => 'max:500',
            'precio' => 'required|max:15',
            'cantidad' => 'required|max:50'
        ]);// Validar los campos de entrada

        $objeto = Productos::find($id);
        $objeto-> nombre= $request->input('nombre');
        $objeto->descripcion = $request->input('descripcion');
        $objeto->precio = $request->input('precio');
        $objeto->cantidad = $request->input('cantidad');
        $objeto->save();// Guardar los cambios en la base de datos

        return view("vendedores.mensaje",['msg' => "Se ha modificado el producto correctamente"]);// Redirigir a una vista de mensaje de éxito
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datos = Productos::find($id);
        $datos->delete();

        return redirect("Vendedores/show");// Redirigir a la lista de productos después de eliminar uno
    }
}
