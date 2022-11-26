@extends('layouts.main')

@section('title','Ver cursos')

@section('content')

<div class="search-container">
    <h1>Busque um curso!</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div class="col-md-12">
    <br><br><br>
    <h2>Cursos com matrículas abertas!</h2>
    <p>Dê um passo a mais na sua carreira!</p>
    <div id="cards-container" class="row">
        @foreach($cursos as $curso)
        @if($curso->Status == 1 || $curso->Status ==0)
        <br><br><br>
        <div class="card col-md-3">
            <img src="{{ $curso->Imagem_do_curso }}" alt="{{ $curso->Nome_do_curso }}">
            <div class="card-body">
            @if($curso->Status == 1)
                <p class="card-date"> Data: {{ $curso->data }}</p>
                @elseif($curso->Status == 0) 
                <p class="card-date"> Data: A ser definida! (Número mínimo de alunos não atingido)</p>
                @endif
                <h5 class="card-title">{{ $curso->Nome_do_curso }}</h5>
                <p class="card-participants">Número de participantes: {{ $curso->Número_de_alunos_inscritos }}</p>
                <p class="card-description">{{ $curso->Descrição_simplificada_do_curso }}</p>
                <a href="consulta/{{$curso->id}}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endif
        @endforeach
    </div>

    
    <div class="col-md-12">
    <br><br><br>
    <h2>Matrículas fechadas!</h2>
    <p>Cursos indisponíveis</p>
    <div id="cards-container" class="row">
        @foreach($cursos as $fechado)
        @if($fechado->Status == 2)
        <br><br><br>
        <div class="card col-md-3">
            <img src="{{ $fechado->Imagem_do_curso }}" alt="{{ $fechado->Nome_do_curso }}">
            <div class="card-body">
                <p class="card-date">Data de início: {{ $fechado->data }}</p>
                <h5 class="card-title">{{ $fechado->Nome_do_curso }}</h5>
                <p class="description">{{ $fechado->Descrição_simplificada_do_curso}}</p>
                <p class="card-participants">Número de participantes: {{ $fechado->Número_de_alunos_inscritos }}</p>
                <a href="consulta/{{$curso->id}}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>





@endsection