<?php

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

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\AtendimentoController;
use App\Models\Atendimento;
use App\Models\Paciente;
use App\Models\Servico;

Route::get('/', [PacienteController::class, 'index']);
Route::get('/pacientes/create', [PacienteController::class, 'create']);
Route::get('/pacientes/{id}', [PacienteController::class, 'show']);
Route::post('/pacientes', [PacienteController::class, 'store']);
Route::patch('/paciente/editar/{id}', [PacienteController::class, 'editar']);
Route::patch('/paciente/atualizar/{id}', [PacienteController::class, 'atualizar']);
Route::delete('/paciente/delete/{id}', [PacienteController::class, 'destroy']);

Route::get('/meusservicos', [ServicoController::class, 'index']);
Route::get('/servicos/create', [ServicoController::class, 'create']);
Route::post('/servicos', [ServicoController::class, 'store']);
Route::patch('/servico/editar/{id}', [ServicoController::class, 'editar']);
Route::patch('/servico/atualizar/{id}', [ServicoController::class, 'atualizar']);
Route::delete('/servico/delete/{id}', [ServicoController::class, 'destroy']);


Route::get('/atendimentos/show', [AtendimentoController::class, 'index']);
Route::get('/atendimento/create', [AtendimentoController::class, 'create']);
Route::post('/atendimentos', [AtendimentoController::class, 'store']);
Route::patch('/atendimento/status/{atendimento}', [AtendimentoController::class, 'updateStatus']);
Route::delete('/atendimento/delete/{id}', [AtendimentoController::class, 'destroy']);
