@extends('layouts.main')

@section('title', $user->Nome_Completo)

@section('content')

<div id="user-update-container" class="col-md-6 offset-md-3"> 
<br>
    <h1>Atualizar informações de {{ $user->Nome_Completo}}</h1>
    <form action="/usuario/atualizar/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <br>

            </label>
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="title" name="Nome_Completo" value="{{$user->Nome_Completo}}">
        </div>

        <div class="form-group">
            <label>CPF:</label>
            <input type="text" class="form-control" id="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" name="CPF" value="{{$user->CPF}}">
        </div>

            <label>Email:</label>
            <input type="email" class="form-control" name="Email" id="email" size="30" value="{{$user->Email}}">

            <input type="hidden" name="Senha_de_acesso" id="Senha" value="{{$user->Senha_de_acesso}}">

            <label>Filme preferido:</label>
            <input type="text" class="form-control" name="Filme_preferido" id="Movie" value="{{$user->Filme_preferido}}">

        <br>
        <h3>Endereço:</h3>
        <label>CEP:
            <input name="CEP" type="text" class="form-control" id="cep" value="{{$user->CEP}}" size="10" pattern="\d{5}-\d{3}" maxlength="9" onblur="pesquisacep(this.value);" /></label><br />

        <label>Rua:
            <input name="Rua_de_moradia" type="text" id="rua" size="60" class="form-control" value="{{$user->Rua_de_moradia}}" /></label><br />

        <label>Bairro:
            <input name="Bairro" type="text" id="bairro" class="form-control" size="40" value="{{$user->Bairro}}" /></label><br />

        <label>Cidade:
            <input name="Cidade" type="text" id="cidade" class="form-control" size="40" value="{{$user->Cidade}}" /></label><br />

        <label>Estado:
            <input name="Estado" type="text" id="uf" class="form-control" size="2" value="{{$user->Estado}}" /></label><br />

        <label>IBGE:
            <input name="ibge" type="text" id="ibge" class="form-control" size="8" /></label><br />
        <br>

        @if ($user->Tipo_de_conta == 'Professor')

        <br>
        <h3>Avatar:</h3>
        <select name="Avatar" id="avatar" class="fake-sel">
            <option value="/img/avatar/the_png">Chef</option>
            <option value="/img/avatar/">teste</option>
            <option value="/img/avatar/">teste2</option>
        </select>
        @endif

        @if ($user->Tipo_de_conta == 'Administrador' || $user->Tipo_de_conta == 'Secretaria')
        <h3>Tipo de conta</h3>
        <select class="form-control" name="Tipo_de_conta" id="tipo">
            <option value="Aluno">Aluno</option>
            <option value="Professor">Professor</option>
        </select>
        @endif

       <input type="submit" class="btn btn-primary" value="Atualizar cadastro"> 
    </form>
</div>
@endsection