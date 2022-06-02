<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\GerenteController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\RegistroUsuarioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'create'])->name('logins.create');
Route::post('logins', [LoginController::class, 'store'])->name('logins.store');
Route::get('registers', [RegistroUsuarioController::class, 'create'])->name('registers.create');
Route::post('registers', [RegistroUsuarioController::class, 'store'])->name('registers.store');
Route::get('users/cliente', [UserController::class, 'cliente'])->name('users.cliente');
Route::get('users', [UserController::class, 'create'])->name('users.create');
Route::get('users-anonimo', [UserController::class, 'anonimo'])->name('users.anonimo');
Route::get('eventos-viewcreate', [EventoController::class, 'viewcreate'])->name('eventos.viewcreate');
Route::post('eventos-create/{paquetes}', [EventoController::class, 'create'])->name('eventos.create');
Route::get('users/gerente', [UserController::class, 'gerente'])->name('users.gerente');
Route::get('registers/view', [RegistroUsuarioController::class, 'view'])->name('registers.view');
Route::get('paquetes-create', [PaqueteController::class, 'create'])->name('paquetes.create');
Route::post('gerente/registers', [RegistroUsuarioController::class, 'registrar'])->name('gerente.registrar');
Route::get('passwords/view-update/{usuario}', [UserController::class, 'viewUpdate'])->name('passwords.viewUpdate');
Route::put('passwords/update', [UserController::class, 'update'])->name('passwords.update');
Route::get('paquetes',[GerenteController::class,'viewNuevoPaquete'])->name('paquetes.viewNuevoPaquete');
Route::post('paquetes-create',[GerenteController::class,'nuevoPaquete'])->name('paquetes.nuevoPaquete');
Route::get('eventos-informacion/{id_evento}',[GerenteController::class,'infoEvento'])->name('eventos.infoEvento');
Route::put('eventos/actualizar/{evento}',[GerenteController::class,'updateEvento'])->name('evento.updateEvento');
Route::get('eventos/gastos/{id_evento}',[GerenteController::class,'gastosEvento'])->name('eventos.gastoEvento');
Route::post('regitros/gastos{id_evento}',[GerenteController::class,'registroGasto'])->name('registros.registroGasto');
Route::get('view-eventos',[GerenteController::class,'ListarEventos'])->name('view-eventos.ListarEventos');
Route::get('eventos/{id}',[EventoController::class, 'mostrarEventos'])->name('Eventos.mostrarEventos');
Route::put('images/{imagen}/{evento}',[ImageController::class, 'update'])->name('images.update');

