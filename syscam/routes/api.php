<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerMedicamento;
use App\Http\Controllers\controllerUsuario;
use App\Http\Controllers\controllerLogin;
use App\Http\Controllers\controllerPaciente;
use App\Http\Controllers\controllerEnfermeiro;
use App\Http\Controllers\controllerEnfermeiroChefe;
use App\Models\log;
use App\Models\Logs_Alteracao;

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
    Route::get("/mostrar-usuarios", [controllerUsuario::class, "mostrarUsuarios"]);

    Route::post("/cadastrar-usuario", [controllerUsuario::class, "criarUsuario"]);
    
    Route::post("/cadastrar-paciente", [controllerPaciente::class, "cadastrarPaciente"]);
    
    Route::post("/cadastrar-medicamento", [controllerMedicamento::class, "cadastrarMedicamento"]);
    
    Route::get('/logs', [Logs_Alteracao::class, "mostrarLogs"]);
    
    Route::patch("/editar-cadastro", [controllerUsuario::class, "editarCadastro"]);

    Route::delete('/logout',[controllerLogin::class, "logout"]);
    
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
});

Route::post("/login", [controllerLogin::class, "login"]);
