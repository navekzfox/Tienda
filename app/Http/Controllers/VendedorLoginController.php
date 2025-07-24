<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
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
        return redirect()->route('vendedores.login');
    }

    public function showCuenta()
    {
        $vend = null;
        if (Session::has('vendedor_id')) {
            $vend = vendedores::find(Session::get('vendedor_id'));
        }
        return view('vendedores.cuenta', ['vendedor' => $vend]);
    }
}
