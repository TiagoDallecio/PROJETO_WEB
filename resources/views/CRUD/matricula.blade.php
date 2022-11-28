@extends('layouts.main')

@section('content')

@section('title','Matricula de usuarios')

<div id="user-create-container" class="col-md-6 offset-md-3">
    <br>
    <h1>Matricule um novo usuário</h1>
    <form action="/usuario/cadastro" method="POST">
        @csrf
        <div class="form-group">
        <br>
            
        <h3>Tipo de conta:</h3>
        <select name="tipo" id="tipo" class="form-control" required>
            <option value="Aluno">Aluno</option>
            <option value="Professor">Professor</option>
        </select>

        <br>
            <h3>Informações de usuário:</h3>

            </label>
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome Completo" required>
        </div>

        <div class="form-group">
            <label for="title">CPF:</label>
            <input type="text" class="form-control" id="CPF" name="CPF" placeholder="___.___.___-__" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>
        </div>

            <label>Email:</label>
            <input type="email" class="form-control" name="email" id="email" size="30" required>
            <div>
                <label>Senha:</label>
                <input type="password" class="form-control" name="Senha" id="Senha" size="20" placeholder="Digite sua senha:" required>
            </div>

            <label>Filme preferido:</label>
            <input type="text" class="form-control" name="Movie" id="Movie" placeholder="ex: Jurassic Park" required>

        <br>
        <h3>Endereço:</h3>
        <label>CEP:
            <input name="cep" type="text" class="form-control" id="cep" placeholder="_____-___" value="" size="10" maxlength="9" pattern="\d{5}-\d{3}" onblur="pesquisacep(this.value);" required /></label><br />

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
        <h3>Avatar (Apenas professores podem ter um avatar):</h3>
        
        @for($i=0; $i<(count($avatares)); $i++)
        <label for="$avatares[$i]"><img src="{{ $avatares[$i]->code }}" height="70" width="50"></label>
        <input type="checkbox" name="$avatares[$i]" value="{{ $avatares[$i]->code }}" id="avatar">
        @endfor

        <br>
       <input type="submit" class="btn btn-primary" value="Cadastrar usuario">

       

    </form>
</div>
@endsection