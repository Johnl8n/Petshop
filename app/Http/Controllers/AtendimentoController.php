<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Atendimento;
use App\Models\Paciente;
use App\Models\Servico;

class AtendimentoController extends Controller
{

    public function index() {
        
        $atendimentos = Atendimento::with('paciente', 'servico')->get();
        return view('atendimentos', ['atendimentos' => $atendimentos]);

    }

    public function create(){
        $servicos = Servico::all();
        $pacientes = Paciente::all();

        return view('events.createAtendimento', ['servicos' => $servicos, 'pacientes' => $pacientes]);
   }

    public function store(Request $request) {
          $atendimento = new Atendimento;
          $atendimento->paciente_id = $request->nome;
          $atendimento->servico_id = $request->servico;
    
          $atendimento->save();
    
          return redirect('/atendimentos/show');
    }

    public function updateStatus(Request $request, $atendimentoId)
    {
        $atendimento = Atendimento::findOrFail($atendimentoId);
        $atendimento->update(['status' => 'concluido']);
    
        // Move o atendimento para o final da lista no banco de dados
        Atendimento::orderBy('id', 'desc')->get()->each(function ($atendimento, $index) {
            $atendimento->update(['status' => $index + 1]);
        });
    
        return redirect()->back(); // Redireciona de volta à página de atendimentos
    }
    

}