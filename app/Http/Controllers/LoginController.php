<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Usuarios.iniciar');// Mostrar la vista de inicio de sesión
    }

    public function login(Request $request)
    {
        $request->validate([// Validar los campos de entrada
            'Usuario' => 'required',
            'contraseña' => 'required'
        ]);

        $usuario = Usuarios::where('Usuario', $request->Usuario)// Buscar el usuario por nombre de usuario
            ->where('contraseña', $request->contraseña) // y contraseña
            ->first();// Obtener el primer usuario que coincida

        if ($usuario) {
            Session::put('usuario_id', $usuario->id);
            Session::put('usuario_nombre', $usuario->Nombre);// Guardar el ID y nombre del usuario en la sesión
            return redirect('/Cuentapersonal');// Redirigir a la cuenta personal
        }

        return back()->withErrors(['Usuario o contraseña incorrectos'])->withInput();// Si no se encuentra el usuario, redirigir de vuelta con un error
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
