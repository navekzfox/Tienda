<?php

use App\Http\Controllers\VendedorLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\UsuariosController;
use App\Models\Productos;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('vendedores/login', [VendedorLoginController::class, 'showLoginForm'])
    ->name('vendedores.login');
Route::post('vendedores/login', [VendedorLoginController::class, 'login'])
    ->name('vendedores.login.submit');
Route::get('vendedores/logout', [VendedorLoginController::class, 'logout'])
    ->name('vendedores.logout');
Route::get('vendedores/cuenta', [VendedorLoginController::class, 'showCuenta'])
    ->name('vendedores.cuenta');

Route::get('/Cuentapersonal', function () {
    $usuarioLogueado = null;

    if (Session::has('usuario_id')) {
        $usuarioLogueado = Usuarios::find(Session::get('usuario_id'));
    }

    return view('Usuarios.Cuentapersonal', [
        'usuarioLogueado' => $usuarioLogueado
    ]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/iniciar', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/cuentas', function () {
    $cuenta = \App\Models\Usuarios::all();

    $usuarioLogueado = null;
    if (Session::has('usuario_id')) {
        $usuarioLogueado = \App\Models\Usuarios::find(Session::get('usuario_id'));
    }

    return view('Cuentas', [
        'cuenta' => $cuenta,
        'usuarioLogueado' => $usuarioLogueado
    ]);
});

Route::get('/ver',function ()
    {
        $objeto = Productos::all();
    return view('vendedores.ver', ['objeto' => $objeto]);
    });

Route::resource('/Vendedores',VendedorController::class);

Route::resource('/Usuarios',UsuariosController::class);

