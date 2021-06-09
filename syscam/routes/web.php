<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerMedicamento;
use App\Http\Controllers\controllerEnfermeiroChefe;
use App\Http\Controllers\controllerUsuario;
use App\Http\Controllers\controllerLogin;
use App\Http\Controllers\controllerPaciente;
use App\Http\Controllers\controllerEnfermeiro;
use App\Models\log;

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

//rotas que necessitam de autenticação para serem acessadas
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get("/mostrar-usuarios", [controllerUsuario::class, "mostrarUsuarios"]);
    Route::patch("/editar-cadastro", [controllerUsuario::class, "editarCadastro"]);
    Route::get("/logs", [log::class, "mostrarLogs"]);
});



Route::post("/cadastrar-usuario", [controllerUsuario::class, "criarUsuario"]);

Route::post("/login", [controllerLogin::class, "login"]);

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
Route::post("/Designar_Agendamento", [controllerEnfermeiroChefe::class, "Alocar_Enfermeiro"]);
Route::post("/Bater_Ponto", [controllerEnfermeiroChefe::class, "armazenar_Plantao"]);
/*
 Em processo Enfermeiro
Route::get("/AgendamentoBaixados", [controllerEnfermeiro::class, "historicoAgendamentos"]);
Route::get("/MedicamentosPendentes", [controllerEnfermeiro::class, "MedicamentoPendentes"]);
*/