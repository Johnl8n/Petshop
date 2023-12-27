@extends('layout.main')

@section('title', $paciente->nome)

@section('content')
<link rel="stylesheet" href="/css/styles.css">

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/paciente/{{ $paciente->image }}" class="img-fluid" alt="{{ $paciente->nome }}">
            </div>
            <div id="image-container" class="col-md-6">
                <h1>{{ $paciente->nome }}</h1>
                <p class="paciente-raca">Raça: {{ $paciente->raca }}</p>
                <p class="paciente-especie">Especie: {{ $paciente->especie }}</p>
                <p class="paciente-sexo">Sexo: {{ $paciente->sexo }}</p>
                <p class="paciente-descricao">Descrição: {{ $paciente->descricao }}</p>
                <p class="paciente-tutor">Tutor: {{ $paciente->tutor }}</p>
                <p class="paciente-telefone">Contato: {{ $paciente->telefone }}</p>
            </div>
            <a href="/atendimento/create" class="btn btn-primary">Fazer atendimento</a>


        </div>
    </div>

@endsection