<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servico;

class ServicoController extends Controller
{

    public function index() {
        $servicos = Servico::all();
        return view('servicos', ['servicos' => $servicos]);
    }

    public function create() {
        return view('events.createServicos');
    }

   public function store(Request $request) {
        $servico = new Servico;
        $servico->nome = $request->nome;
        $servico->valor = $request->valor;
        $servico->descricao = $request->descricao;

        $servico->save();

        return redirect('/meusservicos');
   }

}
