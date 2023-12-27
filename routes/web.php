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

Route::get('/meusservicos', [ServicoController::class, 'index']);
Route::get('/servicos/create', [ServicoController::class, 'create']);
Route::post('/servicos', [ServicoController::class, 'store']);

Route::get('/atendimentos/show', [AtendimentoController::class, 'index']);
Route::get('/atendimento/create', [AtendimentoController::class, 'create']);
Route::post('/atendimentos', [AtendimentoController::class, 'store']);
