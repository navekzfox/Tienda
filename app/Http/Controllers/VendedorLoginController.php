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
        $vend = vendedores::where('Clave_ingreso', $req->Clave_ingreso)->first();

        if ($vend) {
            Session::put('vendedor_id', $vend->id);
            Session::put('vendedor_nombre', $vend->nombre);
            return redirect()->route('vendedores.cuenta');
        }

        return back()->withErrors(['codigo' => 'Código incorrecto'])->withInput();
    }

    public function logout()
    {
        Session::forget('vendedor_id');
        Session::forget('vendedor_nombre');
        return redirect('/');
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
    ]);
}

}
