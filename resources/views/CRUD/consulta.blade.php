@extends('layouts.main')

@section('title', 'Visualizar e atualizar alunos')

@section('content')

<br>
<h1>Visualizar e atualizar o cadastro de usuarios</h1>
<br><br>
@for($i=0; $i<(count($users)); $i++) <br>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{$users[$i] -> name}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li class="dropdown-item">
                <ion-icon name="id-card-outline"></ion-icon>CPF: {{$users[$i] -> CPF}}
            </li>
            <li class="dropdown-item">
                <ion-icon name="navigate-outline"></ion-icon>Endereço:
            </li>
            <li>
                <ion-icon name="pin-outline"></ion-icon>Estado: {{$users[$i] -> Estado}}
            </li>
            <li>
                <ion-icon name="location-outline"></ion-icon>Cidade: {{$users[$i] -> Cidade}}
            </li>
            <li>
                <ion-icon name="locate-outline"></ion-icon>Bairro: {{$users[$i] -> Bairro}}
            </li>
            <li>
                <ion-icon name="navigate-circle-outline"></ion-icon>Rua: {{$users[$i] -> Rua_de_moradia}}
            </li>
            </li>
            <li class="dropdown-item">
                <ion-icon name="film-outline"></ion-icon>Filme: {{$users[$i] -> Filme_preferido}}
            </li>
            <li class="dropdown-item">
                <ion-icon name="person-circle-outline"></ion-icon>Email: {{$users[$i] -> email}}
            </li>
            <div class="dropdown-divider"></div>
            <a href="atualizar/{{$users[$i] -> id}}" class="dropdown-item">
                <ion-icon name="pencil-outline"></ion-icon>Editar</a>
                <div class="dropdown-divider"></div>
                <form action="/usuario/consulta/{{$users[$i]->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                </form>
        </div>
    </div>
    <br>
    @endfor
    @endsection