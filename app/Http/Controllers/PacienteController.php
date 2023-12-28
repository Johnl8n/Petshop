<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

use function Laravel\Prompts\search;

class PacienteController extends Controller
{
   public function index() {

     $search = request('search');

     if ($search) {
          
          $pacientes = Paciente::where([
               ['nome', 'like', '%' . $search . '%']
          ])->get();

     }else{
          $pacientes = Paciente::all();
     }
     
     return view('pacientes', ['pacientes' => $pacientes, 'search' => $search]);

        // $pacientes = Paciente::all();
        // return view('pacientes.index', compact('pacientes'));
   }

   public function create(){
        return view('events.create');
   }

   public function store(Request $request) {
        $paciente = new Paciente;
        $paciente->nome = $request->nome;
        $paciente->raca = $request->raca;
        $paciente->especie = $request->especie;
        $paciente->sexo = $request->sexo;
        $paciente->descricao = $request->descricao;
        $paciente->tutor = $request->tutor;
        $paciente->telefone = $request->telefone;

        if($request->hasFile('image') && $request->file('image')->isValid()){
          
          $requestImage = $request->image;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime(("now")) . "." . $extension);

          $requestImage->move(public_path('img/paciente'), $imageName);
          
          $paciente->image = $imageName;

          }

        $paciente->save();
        
        return redirect('/')->with('msg', 'Cadastro realizado com sucesso!');
   }

// No controller
     public function show($id){
          $paciente = Paciente::findOrFail($id);
          return view('events.show', ['paciente' => $paciente]);
     
     }

     public function destroy($id) {
          Paciente::findOrFail($id)->delete();
          return redirect('/');
     }

     public function editar($id) {
          $paciente = Paciente::findOrFail($id);
          return view('events.editarPaciente', ['paciente' => $paciente]);
    }

    public function atualizar(Request $request, $id) {
        $paciente = Paciente::findOrFail($id);
        $paciente->nome = $request->nome;
        $paciente->raca = $request->raca;
        $paciente->especie = $request->especie;
        $paciente->sexo = $request->sexo;
        $paciente->descricao = $request->descricao;
        $paciente->tutor = $request->tutor;
        $paciente->telefone = $request->telefone;
        $paciente->save();
        
        return redirect('/');
    }
     

}
    