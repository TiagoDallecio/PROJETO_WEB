@extends('layouts.main')

@section('title', 'Editar media')

@section('content')
<div id="user-update-container" class="col-md-6 offset-md-3"> 
<br>
    <h1>Atualizar media de {{ $user->name}}</h1>
    <form action="/usuario/atualizar/media/{{$user->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <br>

            </label>
            <label for="Média">Inserir valor da media atual:</label>
            <input type="text" class="form-control" id="Média" name="Média" value="{{$user->Média}}">
        </div>

@endsection