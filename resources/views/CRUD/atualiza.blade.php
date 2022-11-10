@extends('layouts.main')

@section('title', $user->Nome_Completo)

@section('content')

<!--Utilizar outro método de update, tentar usar dashboard-->
<div id="aluno-update-container" class="col-md-6 offset-md-3"> 
<br>
    <h1>Atualizar informações de {{ $user->Nome_Completo}}</h1>
    <form action="/usuario/atualizar/{{$user->id}}" method="POST">
        @csrf
        @method("PATCH")
        <div class="form-group">
            <br>

            </label>
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$user->Nome_Completo}}">
        </div>

        <div class="form-group">
            <label for="title">CPF:</label>
            <input type="text" class="form-control" id="CPF" name="CPF" value="{{$user->CPF}}">
        </div>

            <label>Nome de usuário:</label>
            <input type="text" class="form-control" name="Username" id="Username" size="30" value="{{$user->Nome_de_usuário}}">

            <input type="hidden" name="Senha" id="Senha" value="{{$user->Senha_de_acesso}}">

            <label>Filme preferido:</label>
            <input type="text" class="form-control" name="Movie" id="Movie" value="{{$user->Filme_preferido}}">

        <br>
        <h3>Endereço:</h3>
        <label>CEP:
            <input name="cep" type="text" class="form-control" id="cep" value="{{$user->CEP}}" size="10" maxlength="9" onblur="pesquisacep(this.value);" /></label><br />

        <label>Rua:
            <input name="rua" type="text" id="rua" size="60" class="form-control" placeholder="{{$user->Rua_de_moradia}}" /></label><br />

        <label>Bairro:
            <input name="bairro" type="text" id="bairro" class="form-control" size="40" placeholder="{{$user->Bairro}}" /></label><br />

        <label>Cidade:
            <input name="cidade" type="text" id="cidade" class="form-control" size="40" placeholder="{{$user->Cidade}}" /></label><br />

        <label>Estado:
            <input name="uf" type="text" id="uf" class="form-control" size="2" placeholder="{{$user->Estado}}" /></label><br />

        <label>IBGE:
            <input name="ibge" type="text" id="ibge" class="form-control" size="8" /></label><br />
        <br>

        <input type="hidden" name="tipo" id="tipo" value="{{$user->Tipo_de_conta}}">

       <input type="submit" class="btn btn-primary" value="Atualizar cadastro"> 
    </form>
</div>
@endsection