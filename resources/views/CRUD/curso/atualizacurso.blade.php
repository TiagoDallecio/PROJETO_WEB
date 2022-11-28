@extends('layouts.main')

@section('title','Atualizar Curso')

@section('content')

<div id="curso-update-container" class="col-md-6 offset-md-3">
    <br>
    <h1>Atualize o curso!</h1>
    <form action="/curso/atualizar/{{$curso->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <br>
            <h3>Informações do curso:</h3>

            </label>
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="title" name="Nome_do_curso" value="{{$curso->Nome_do_curso}}" placeholder="Nome do curso" required>
        </div>

        <div class="form-group">
            <br>
            <label>Descrições:</label>
            <textarea name="Descrição_completa_do_curso" id="compdesc"  placeholder="Descrição detalhada do curso" cols="15" rows="5" class="form-control" required>{{$curso->Descrição_completa_do_curso}}</textarea>
            <br>
            <textarea name="Descrição_simplificada_do_curso" id="simpdesc"  placeholder="Descrição simplificada do curso" cols="10" rows="3" class="form-control" required>{{$curso->Descrição_simplificada_do_curso}}</textarea>
        </div>

        <div class="form-group">
            <br>
            <h4>Dados do curso:</h4>
            <br>
            <label for="prof">Professor do curso:</label>
            <select name="Professor" id="prof" required>
                    <option value="NULL">Nenhum</option>
                @foreach($user as $prof)
                    <option value="{{$prof->name}}">{{$prof->name}}</option>
                @endforeach
            </select>
            <br><br>

            <label>Número mínimo de alunos:</label>
            <input type="number" value="{{$curso->Número_mínimo_de_alunos}}" name="Número_mínimo_de_alunos" id="min" required>

            <br><br>
            
            <label>Número máximo de alunos:</label>
            <input type="number" value="{{$curso->Número_máximo_de_alunos}}" name="Número_máximo_de_alunos" id="max" required>

            <br><br>
            <label for="data">Data do curso</label>
            <input type="date" value="{{$curso->data}}" name="data" id="data">
            <br><br><br>

            <h3>Status do curso:</h3>
            <label for="min n atingido">Matrículas Abertas - Mínimo de alunos não atingido!</label>
            <input type="radio"  name="Status" value="0" id="min n atingido">
            <br><br>
            
            <label for="min atingido">Matículas Abertas - Curso acontecerá!</label>
            <input type="radio"  name="Status" value="1" id="min atingido">
            <br><br>

            <label for="max atingido">Matrículas encerradas</label>
            <input type="radio" name="Status" value="2" id="max atingido">

            <input type="hidden" value="{{$curso->Imagem_do_curso}}" name="Imagem_do_curso" id="img">

        </div>
        <br>
       <input type="submit" class="btn btn-primary" value="Atualizar curso!">
    </form>
</div>

@endsection

