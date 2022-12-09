@extends('layouts.main')

@section('title', $curso->Nome_do_curso)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row"> 
        <div id="image-container" class="col-md-6">
            <br><br><br>
            <img src="{{ $curso->Imagem_do_curso }}" class="img-fluid" alt="{{ $curso->Nome_do_curso }}">
        </div>
        <div id="info-container" class="col-md-6">
            <br><br><br>
            <h1>{{ $curso->Nome_do_curso }}</h1>

            @if($curso->Status == 0)
            <p>Matrículas Abertas - Mínimo de alunos não atingido!</p>
            @elseif($curso->Status == 1)
            <p>Matrículas Abertas - Curso acontecerá!</p>
            <p>Dia: {{ $curso->data }}</p>
            @endif
            <p>Número de alunos inscritos: {{count($curso->user)}}</p>
            <p>Número mínimo de alunos: {{$curso->Número_mínimo_de_alunos}} &nbsp &nbsp &nbsp Número máximo de alunos: {{$curso->Número_máximo_de_alunos}}</p>
            @if($curso->Professor != 'NULL')
            <p>Professor: {{ $curso->Professor }}</p>
            @else
            <p>Professor: Sem atribuição de professor até o momento!</p>
            @endif

            @if(Auth::user()->Tipo_de_conta == 'Aluno')
            @if($curso->Status < 2)
            <form action="/curso/participar/{{$curso->id}}" method="POST">
                @csrf
                <a href="/curso/participar/{{$curso->id}}" class="btn btn-primary" onclick="event.preventDefault();this.closest('form').submit()">Inscreva-se</a>
            </form>
            @endif
            @endif
            
            @if(Auth::user()->Tipo_de_conta == 'Administrador' || Auth::user()->Tipo_de_conta == 'Secretaria')
            <a href="/curso/atualizar/{{$curso->id}}" class="btn btn-primary">Editar curso</a>
            <form action="/curso/consulta/{{$curso->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn">Deletar curso</button>
            </form>
            @endif
       </div>
       <div class="col-md-12" id="description-container">
        <br>
        <h3>Sobre o Curso:</h3>
        <p class="description">{{ $curso->Descrição_completa_do_curso }}</p>
       </div>
    </div>
</div>




@endsection