<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerMedicamento;
use App\Http\Controllers\controllerUsuario;
use App\Http\Controllers\controllerLogin;
use App\Http\Controllers\controllerPaciente;
use App\Http\Controllers\controllerEnfermeiro;
use App\Models\log;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//rotas protegidas que requerem autenticação para serem acessadas
Route::group(['middleware' => ['auth:sanctum']], function(){
});

Route::post("/cadastrar-usuario", [controllerUsuario::class, "criarUsuario"]);

Route::get("/mostrar-usuarios", [controllerUsuario::class, "mostrarUsuarios"]);

Route::post("/login", [controllerLogin::class, "login"]);

Route::patch("/editar-cadastro", [controllerUsuario::class, "editarCadastro"]);

Route::get("/logs", [log::class, "mostrarLogs"]);

Route::post("/cadastrar-paciente", [controllerPaciente::class, "cadastrarPaciente"]);

Route::post("/cadastrar-medicamento", [controllerMedicamento::class, "cadastrarMedicamento"]);


// Rotas Enfermeiro e Estagiario :
Route::get("/EstoqueMedicamentosEnf", [controllerEnfermeiro::class, "EstoqueMedicamentos"]);
Route::get("/ListaPacientesEnf", [controllerEnfermeiro::class, "ListarPacientes"]);
Route::get("/VerificarAgendamentoEnf", [controllerEnfermeiro::class, "verificarAgendamento"]);
Route::get("/RelatorioPacienteEnf", [controllerEnfermeiro::class, "emitirRelatorioPaciente"]);

Route::patch("/PrepararMedicacaoEnf", [controllerEnfermeiro::class, "prepararMedicacao"]);

Route::post("/baixarAgendamentoEnf", [controllerEnfermeiro::class, "baixarAgendamento"]);
Route::post("/cadastrarPacienteEnf", [controllerEnfermeiro::class, "cadastrarPacienteEnf"]);

/*
 Em processo Enfermeiro
Route::get("/AgendamentoBaixados", [controllerEnfermeiro::class, "historicoAgendamentos"]);
Route::get("/MedicamentosPendentes", [controllerEnfermeiro::class, "MedicamentoPendentes"]);
*/