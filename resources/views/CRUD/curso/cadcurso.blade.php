@extends('layouts.main')

@section('title','Cadastrar novo curso')

@section('content')

<div id="curso-create-container" class="col-md-6 offset-md-3">
    <br>
    <h1>Crie um novo curso!</h1>
    <form action="/curso/cadastro" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <br>
            <h3>Informações do curso:</h3>

            </label>
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do curso" required>
        </div>

        <div class="form-group">
            <br>
            <label>Descrições:</label>
            <textarea name="compdesc" id="compdesc" placeholder="Descrição detalhada do curso" cols="15" rows="5" class="form-control" required></textarea>
            <br>
            <textarea name="simpdesc" id="simpdesc" placeholder="Descrição simplificada do curso" cols="10" rows="3" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <br>
            <h4>Dados do curso:</h4>
            <br>
            <label for="prof">Professor do curso:</label>
            <select name="prof" id="prof" required>
                <option value="NULL">Nenhum</option>
                @foreach($user as $prof)
                <option value="{{$prof->name}}">{{$prof->name}}</option>
                @endforeach
            </select>
            <br><br>

            <label>Número mínimo de alunos:</label>
            <input type="number" name="min" id="min" required>

            <br><br>
            
            <label>Número máximo de alunos:</label>
            <input type="number" name="max" id="max" required>
            
            <br><br>
            <h3>Escolha a imagem do curso:</h3>

            @foreach($img as $image)
            <img src="{{ $image->img }}" width="210" height="140">
            <input type="checkbox" value="{{ $image->img }}" name="imagem" id="imagem">
            @endforeach

            <br><br>
            <label for="data">Data do curso</label>
            <input type="date" name="data" id="data">

            <input type="hidden" name="status" id="status" value="0">

        </div>
        <br>
       <input type="submit" class="btn btn-primary" value="Criar curso!">
    </form>
</div>
@endsection



