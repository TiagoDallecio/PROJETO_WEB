@extends('layouts.main')

@section('content')

<title>Matricula de alunos</title>

<div id="aluno-create-container" class="col-md-6 offset-md-3">
    <br>
    <h1>Matricule um novo aluno</h1>
    <form action="/alunos/matricula" method="POST">
        @csrf
        <div class="form-group">
            <br>
            <h3>Informações de usuário:</h3>

            </label>
            <label for="title">Nome do aluno:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome Completo">
        </div>

        <div class="form-group">
            <label for="title">CPF:</label>
            <input type="text" class="form-control" id="CPF" name="CPF" placeholder="CPF (sem pontos nem traço)">
        </div>

            <label>Nome de usuário:</label>
            <input type="text" class="form-control" name="Username" id="Username" size="30" placeholder="Digite seu nome de usuário:">
            <div>
                <label>Senha:</label>
                <input type="password" class="form-control" name="Senha" id="Senha" size="20" placeholder="Digite sua senha:">
            </div>

            <label>Filme preferido:</label>
            <input type="text" class="form-control" name="Movie" id="Movie" placeholder="ex: Jurassic Park">

        <br>
        <h3>Endereço:</h3>
        <label>CEP:
            <input name="cep" type="text" class="form-control" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" /></label><br />

        <label>Rua:
            <input name="rua" type="text" id="rua" size="60" class="form-control" /></label><br />

        <label>Bairro:
            <input name="bairro" type="text" id="bairro" class="form-control" size="40" /></label><br />

        <label>Cidade:
            <input name="cidade" type="text" id="cidade" class="form-control" size="40" /></label><br />

        <label>Estado:
            <input name="uf" type="text" id="uf" class="form-control" size="2" /></label><br />

        <label>IBGE:
            <input name="ibge" type="text" id="ibge" class="form-control" size="8" /></label><br />
        <br>
       <input type="submit" class="btn btn-primary" value="Cadastrar aluno"> 
    </form>
</div>
@endsection