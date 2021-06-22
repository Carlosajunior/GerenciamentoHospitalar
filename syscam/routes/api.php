<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerMedicamento;
use App\Http\Controllers\controllerUsuario;
use App\Http\Controllers\controllerLogin;
use App\Http\Controllers\controllerPaciente;
use App\Http\Controllers\controllerEnfermeiro;
use App\Http\Controllers\controllerEnfermeiroChefe;
use App\Http\Controllers\controllerBanco;
use App\Models\Logs_Alteracao;
use App\Models\Prontuario;

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
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get("/mostrar-usuarios", [controllerUsuario::class, "mostrarUsuarios"]);

    Route::post("/cadastrar-usuario", [controllerUsuario::class, "criarUsuario"]);

    Route::post("/AgendamentosPendentesEnf", [controllerEnfermeiro::class, "AgendamentosPendentes"]);

    Route::post("/cadastrar-paciente", [controllerPaciente::class, "cadastrarPaciente"]);

    Route::post("/cadastrar-medicamento", [controllerMedicamento::class, "cadastrarMedicamento"]);

    Route::get('/logs', [Logs_Alteracao::class, "mostrarLogs"]);

    Route::patch("/editar-cadastro", [controllerUsuario::class, "editarCadastro"]);

    Route::post('/logout', [controllerLogin::class, "logout"]);

    // Banco de dados
    Route::get("/Backup", [controllerBanco::class, "Backup"]);

    // Rotas Enfermeiro e Estagiario :
    Route::get("/EstoqueMedicamentosEnf", [controllerMedicamento::class, "mostrarMedicamentos"]);
    Route::get("/ListaPacientesEnf", [controllerEnfermeiro::class, "ListarPacientes"]);
    Route::get("/VerificarAgendamentoEnf", [controllerEnfermeiro::class, "verificarAgendamento"]);
    Route::get("/RelatorioPacienteEnf", [controllerEnfermeiro::class, "emitirRelatorioPaciente"]);

    Route::patch("/PrepararMedicacaoEnf", [controllerEnfermeiro::class, "prepararMedicacao"]);

    Route::post("/baixarAgendamentoEnf", [controllerEnfermeiro::class, "baixarAgendamento"]);
    Route::post("/cadastrarPacienteEnf", [controllerEnfermeiro::class, "cadastrarPacienteEnf"]);
    Route::post("/Designar_Agendamento", [controllerEnfermeiroChefe::class, "Alocar_Enfermeiro"]);
    Route::post("/Bater_Ponto", [controllerEnfermeiroChefe::class, "armazenar_Plantao"]);
    Route::get("/agendamentosPendentes", [controllerEnfermeiroChefe::class, "agendamentosPendentes"]);
    Route::post("/cadastrarAgendamento", [controllerEnfermeiroChefe::class, "Criar_Agendamento"]);
    Route::post("/cadastrarProntuario", [controllerEnfermeiroChefe::class, 'Criar_Prontuario']);
    Route::get("/agendamentosConcluidos", [controllerEnfermeiroChefe::class, 'agendamentosConcluidos']);
    Route::get("/mostrarProntuarios", [Prontuario::class, 'mostrarProntuarios']);
    Route::post("/baixaProntuario", [controllerEnfermeiroChefe::class, 'baixaProntuario']);
});

Route::post("/login", [controllerLogin::class, "login"]);
