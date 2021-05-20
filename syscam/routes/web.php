<?php
use App\Http\Controllers\controllerMedicamento;
use App\Http\Controllers\controllerUsuario;
use App\Http\Controllers\controllerLogin;
use App\Http\Controllers\controllerPaciente;
use App\Models\log;
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

Route::post("/cadastrar-usuario", [controllerUsuario::class, "criarUsuario"]);

Route::get("/mostrar-usuarios", [controllerUsuario::class, "mostrarUsuarios"]);

Route::post("/login", [controllerLogin::class, "login"]);

Route::patch("/editar-cadastro", [controllerUsuario::class, "editarCadastro"]);

Route::get("/logs", [log::class, "mostrarLogs"]);

Route::post("/cadastrar-paciente", [controllerPaciente::class, "cadastrarPaciente"]);

Route::post("/cadastrar-medicamento", [controllerMedicamento::class, "cadastrarMedicamento"]);