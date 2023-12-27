@extends('layout.main')

@section('title', 'Servicos')

@section('content')
<link rel="stylesheet" href="/css/styles.css">

<div id="pacientes-container" class="col-md-12">
  <h2>Serviços</h2>
  <p class="subtitle">Serviços cadastrados</p>
  <div id="cards-container" class="row">
    @foreach ($servicos as $servico)
      <div class="card col-md-3">
        <img src="/img/pet's.jpg" alt="">
        <div class="card-body">
          <h5 class="card-nome"> {{ $servico->nome }} </h5>
          <p class="card-raca"> {{ $servico->valor }} </p>
          <p class="card-tutor"> {{ $servico->descricao }} </p>
        </div>
      </div>
    @endforeach
  </div>

</div>


@endsection

