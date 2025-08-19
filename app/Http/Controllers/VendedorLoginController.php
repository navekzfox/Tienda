<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendedores;
use Illuminate\Support\Facades\Session;

class VendedorLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('vendedores.login');
    }

    public function login(Request $req)
    {
        $req->validate(['Clave_ingreso' => 'required']);
        $vend = vendedores::where('Clave_ingreso', $req->Clave_ingreso)->first();// Buscar el vendedor por clave de ingreso

        if ($vend) {
            Session::put('vendedor_id', $vend->id);
            Session::put('vendedor_nombre', $vend->nombre);
            return redirect()->route('vendedores.cuenta');
        }// Si el vendedor existe, guardar su ID y nombre en la sesión y redirigir a la cuenta del vendedor

        return back()->withErrors(['codigo' => 'Código incorrecto'])->withInput();// Si no se encuentra el vendedor, redirigir de vuelta con un error
    }

    public function logout()
    {
        Session::forget('vendedor_id');
        Session::forget('vendedor_nombre');
        return redirect('/');// Redirigir a la página principal al cerrar sesión
    }

   public function showCuenta()
{
    $vend = null;
    $layout = 'layouts.cuerpo';// Cambia al layout por defecto

    if (Session::has('vendedor_id')) {
        $vend = vendedores::find(Session::get('vendedor_id'));
        $layout = 'layouts.plantilla'; // Cambia al layout especial si está logueado
    }

    return view('vendedores.cuenta', [
        'vendedor' => $vend,
        'layout' => $layout
    ]);// Mostrar la cuenta del vendedor con el layout correspondiente
}

}
