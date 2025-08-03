<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Usuarios.iniciar');
    }

    public function login(Request $request)
    {
        $request->validate([
            'Usuario' => 'required',
            'contraseña' => 'required'
        ]);

        $usuario = Usuarios::where('Usuario', $request->Usuario)
            ->where('contraseña', $request->contraseña) // En sistemas reales usar bcrypt
            ->first();

        if ($usuario) {
            Session::put('usuario_id', $usuario->id);
            Session::put('usuario_nombre', $usuario->Nombre);
            return redirect('/Cuentapersonal'); // o cualquier página protegida
        }

        return back()->withErrors(['Usuario o contraseña incorrectos'])->withInput();
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
