<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\httpCuidadorasController;
use App\Http\Controllers\httpCategoriaServicios;
use App\Http\Controllers\httpServicios;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* ruta para pedir que la cuidadora pida un servicio */
Route::get('/serviciosPropuestos', [AdminController::class, 'solicitud'])->name('solicitud');
Route::get('/ubicacion', [AdminController::class, 'localidad'])->name('localidad');
Route::get('/admin/perfil', [AdminController::class, 'perfil'])->name('admin.perfil');
Route::get('/admin/registroMunicipio', [AdminController::class, 'registerMunicipio'])->name('admin.registroMunicipio');
Route::get('/admin/registroManzana', [AdminController::class, 'registerManzana'])->name('admin.registroManzana');
Route::get('/admin/registroServicio', [AdminController::class, 'registerServicio'])->name('admin.registroServicio');
Route::get('/admin/registroEstablecimiento', [AdminController::class, 'registerEstablecimiento'])->name('admin.registroEstablecimiento');
Route::get('/admin/registroCuidadoras', [AdminController::class, 'registerCuidadora'])->name('admin.registroCuidadoras');


