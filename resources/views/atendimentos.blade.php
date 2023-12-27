@extends('layout.main')

@section('title', 'Atendimentos')

@section('content')
<link rel="stylesheet" href="/css/styles.css">

<div id="pacientes-container" class="col-md-12">
    <h2>Atendimentos</h2>
    <p class="subtitle">Atendimentos cadastrados</p>
    <div id="cards-container" class="row">
        @foreach ($atendimentos as $atendimento)
            <div class="card col-md-3">
                <img src="/img/pet's.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-nome">
                        <i class="fas fa-user"></i> {{ $atendimento->paciente->nome }}
                    </h5>
                    <p class="card-raca">
                        <i class="fas fa-paw"></i> {{ $atendimento->servico->nome }}
                    </p>
                    <p class="card-raca">
                        <i class="fas fa-paw"></i> {{ $atendimento->paciente->tutor }}
                    </p>
                    <p class="card-raca">
                        <i class="fas fa-paw"></i> {{ $atendimento->status }}
                    </p>

                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection