<?php

use App\Http\Controllers\VendedorLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\UsuariosController;
use App\Models\Ventas;
use App\Models\Productos;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CarritoController;

/** Rutas del carrito */
Route::get('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('/carrito', [CarritoController::class, 'mostrar'])->name('carrito.mostrar');
Route::get('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::get('/carrito/comprar', [CarritoController::class, 'comprar'])->name('carrito.comprar');

/** Rutas del login de los vendedores */
Route::get('Vendedores/login', [VendedorLoginController::class, 'showLoginForm'])
    ->name('vendedores.login');
Route::post('Vendedores/login', [VendedorLoginController::class, 'login'])
    ->name('vendedores.login.submit');
Route::get('Vendedores/logout', [VendedorLoginController::class, 'logout'])
    ->name('vendedores.logout');
Route::get('Vendedores/cuenta', [VendedorLoginController::class, 'showCuenta'])
    ->name('vendedores.cuenta');

/** Rutas del login de los usuarios*/
Route::get('/Cuentapersonal', function () {
    $usuarioLogueado = null;

    if (Session::has('usuario_id')) {
        $usuarioLogueado = Usuarios::find(Session::get('usuario_id'));
    }

    return view('Usuarios.Cuentapersonal', [
        'usuarioLogueado' => $usuarioLogueado
    ]);
});

Route::get('/iniciar', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




/** Rutas para la gestión de las cuentas */
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

/** Rutas para la visualización de los productos */
Route::get('/ver',function ()
    {
        $objeto = Productos::all();
    return view('vendedores.ver', ['objeto' => $objeto]);
    });

    Route::get('/ventas', function ()
    {
        $Venta = Ventas::all();
        return view('vendedores.ventas', ['Venta' => $Venta]);
    });

    /** Rutas de la página de inicio*/
Route::get('/', function () {
    return view('bienvenida');
});

Route::resource('/Vendedores',VendedorController::class);

Route::resource('/Usuarios',UsuariosController::class);

