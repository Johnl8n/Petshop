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
use App\Models\Paciente;

Route::get('/', [PacienteController::class, 'index']);
Route::get('/pacientes/create', [PacienteController::class, 'create']);
Route::get('/pacientes/{id}', [PacienteController::class, 'show']);
Route::post('/pacientes', [PacienteController::class, 'store']);

Route::resource('servicos', 'ServicoController');
Route::resource('atendimentos', 'AtendimentoController');
