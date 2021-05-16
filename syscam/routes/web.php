<?php
use App\Http\Controllers\cadastroController;
use App\Http\Controllers\loginController;
use App\Models\Usuario;
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

Route::post("/cadastrar-usuario", [cadastroController::class, "criarUsuario"]);

Route::get("/mostrar-usuarios", [Usuario::class, "mostrarUsuarios"]);

Route::post("/login", [loginController::class, "login"]);

Route::get("/usuario/editar/{id}", [editarController::class, "edit"])->name('usuario-edit');
Route::post("/usuario/editar/{id}", [editarController::class, "Update"])->name('usuario-update');
