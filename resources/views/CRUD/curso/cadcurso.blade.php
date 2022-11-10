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
                @foreach($user as $prof)
                <option value="{{$prof->Nome_Completo}}">{{$prof->Nome_Completo}}</option>
                @endforeach
            </select>
            <br><br>

            <label>Número mínimo de alunos:</label>
            <input type="number" name="min" id="min" required>

            <br><br>
            
            <label>Número máximo de alunos:</label>
            <input type="number" name="max" id="max" required>
            
            <br><br>
            
            <label for="image">Imagem do curso:</label>
            <input type="file" name="image" id="image" class="form-control-file">

        </div>
        <br>
       <input type="submit" class="btn btn-primary" value="Criar curso!">
    </form>
</div>
@endsection



