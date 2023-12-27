@extends('layout.main')

@section('title', 'Cadastrar paciente')

@section('content')
<link rel="stylesheet" href="/css/styles.css">

    <div id="pacientes-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastro de Pacientes</h1>
        <form action="/pacientes" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Foto do pet: </label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do pet">
            </div>
            <div class="form-group">
                <label for="raca">Raça: </label>
                <input type="text" class="form-control" id="raca" name="raca" placeholder="Raça do pet">
            </div>
            <div class="form-group">
                <label for="especie">Especie: </label>
                <input type="text" class="form-control" id="especie" name="especie" placeholder="especie">
            </div>
            <div class="form-group">
                <label for="sexo">Sexo: </label>
                <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Sexo">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição"></textarea>
            </div>
            <div class="form-group">
                <label for="tutor">Tutor: </label>
                <input type="text" class="form-control" id="tutor" name="tutor" placeholder="Tutor do pet">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone: </label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone do tutor">
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar paciente">
        </form>
    </div>

@endsection