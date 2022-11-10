@extends('layouts.main')

@section('title', 'Visualizar e atualizar alunos')

@section('content')

<br>
<h1>Visualizar e atualizar o cadastro de usuarios</h1>
@for($i=0; $i<(count($user)); $i++) <br>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{$user[$i] -> Nome_Completo}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li class="dropdown-item">
                <ion-icon name="id-card-outline"></ion-icon>CPF: {{$user[$i] -> CPF}}
            </li>
            <li class="dropdown-item">
                <ion-icon name="navigate-outline"></ion-icon>Endereço:
            </li>
            <li>
                <ion-icon name="pin-outline"></ion-icon>Estado: {{$user[$i] -> Estado}}
            </li>
            <li>
                <ion-icon name="location-outline"></ion-icon>Cidade: {{$user[$i] -> Cidade}}
            </li>
            <li>
                <ion-icon name="locate-outline"></ion-icon>Bairro: {{$user[$i] -> Bairro}}
            </li>
            <li>
                <ion-icon name="navigate-circle-outline"></ion-icon>Rua: {{$user[$i] -> Rua_de_moradia}}
            </li>
            </li>
            <li class="dropdown-item">
                <ion-icon name="film-outline"></ion-icon>Filme: {{$user[$i] -> Filme_preferido}}
            </li>
            <li class="dropdown-item">
                <ion-icon name="person-circle-outline"></ion-icon>Nome de usuário: {{$user[$i] -> Nome_de_usuário}}
            </li>
            <div class="dropdown-divider"></div>
            <a href="atualizar/{{$user[$i] -> id}}" class="dropdown-item">
                <ion-icon name="pencil-outline"></ion-icon>Editar
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <ion-icon name="trash-outline"></ion-icon>Deletar
                </a>
        </div>
    </div>
    <br>
    @endfor
    @endsection