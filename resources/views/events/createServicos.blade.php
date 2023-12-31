<!-- createServivos -->

@extends('layout.main')

@section('title', 'Cadastrar paciente')

@section('content')
<link rel="stylesheet" href="/css/styles.css">

    <div id="pacientes-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastro de Pacientes</h1>
        <form action="/servicos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do serviço">
            </div>
            <div class="form-group">
                <label for="valor">Valor: </label>
                <input class="form-control" type="number" id="valor" name="valor" id="valor" placeholder="Valor do serviço">         
            </div>
            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição do serviço"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar Serviço">
        </form>
    </div>

@endsection