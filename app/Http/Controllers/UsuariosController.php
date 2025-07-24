<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Usuarios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Usuario' => 'required|unique:usuarios|max:10',
            'contraseña' => 'required|unique:usuarios|max:12',
            'Nombre' => 'required|max:50',
            'Apellido' => 'required|max:50',
            'Fecha' => 'required|date',
            'email' => 'nullable|email'
        ]);

        $cuenta = new Usuarios();
        $cuenta->Usuario = $request->input('Usuario');
        $cuenta->contraseña = $request->input('contraseña');
        $cuenta->Nombre = $request->input('Nombre');
        $cuenta->Apellido = $request->input('Apellido');
        $cuenta->Fecha_nacimiento = $request->input('Fecha');
        $cuenta->email = $request->input('email');
        $cuenta->save();


        return view("Usuarios.mensaje",['msg' => "Se ha guardado la cuenta correctamente"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $cuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datos = Usuarios::find($id);
        return view('Usuarios.edit',['datos' => $datos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'Usuario' => 'required|max:10|unique:usuarios,Usuario,'.$id,
            'contraseña' => 'required|max:12|unique:usuarios'.$id,
            'Nombre' => 'required|max:50',
            'Apellido' => 'required|max:50',
            'Fecha' => 'required|date',
            'email' => 'nullable|email'
        ]);

        $cuenta = Usuarios::find($id);
        $cuenta->Usuario = $request->input('Usuario');
        $cuenta->contraseña = $request->input('contraseña');
        $cuenta->Nombre = $request->input('Nombre');
        $cuenta->Apellido = $request->input('Apellido');
        $cuenta->Fecha_nacimiento = $request->input('Fecha');
        $cuenta->email = $request->input('email');
        $cuenta->save();


        return view("Usuarios.mensaje",['msg' => "Se ha modificado la cuenta correctamente"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datos = Usuarios::find($id);
        $datos->delete();

        return redirect("Usuarios");
    }

}

