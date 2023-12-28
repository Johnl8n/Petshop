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

   public function destroy($id) {
        Servico::findOrFail($id)->delete();
        return redirect('/meusservicos');
   }

    public function editar($id) {
          $servico = Servico::findOrFail($id);
          return view('events.editarServicos', ['servico' => $servico]);
    }

    public function atualizar(Request $request, $id) {
        // dd($request->all());
        $servico = Servico::findOrFail($id);
        $servico->nome = $request->nome;
        $servico->valor = $request->valor;
        $servico->descricao = $request->descricao;
        $servico->save();
        
        return redirect('/meusservicos');
    }

}
