@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div id="login-container" class="col-md-12">
    @if(Auth::check())
    <h2>Bem Vindo {{Auth::user()->name}}!</h2>
    @if(Auth::user()->Tipo_de_conta == 'Administrador' || Auth::user()->Tipo_de_conta == 'Secretaria')
    <p class="subtitle">Que tal fazer um cadastro no sistema?</p>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <a href="usuario/cadastro" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                    <rect x="32" y="64" width="448" height="320" rx="32" ry="32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 448l-8-64h-80l-8 64h96z" />
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 448H144" />
                </svg>
            </a>
            <h4>Alunos/Professores</h4>
        </div>
        <div class="card col-md-3">
            <a href="curso/cadastro" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                    <title></title>
                    <rect x="32" y="96" width="64" height="368" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 224h128M112 400h128" />
                    <rect x="112" y="160" width="128" height="304" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                    <rect x="256" y="48" width="96" height="416" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                    <path d="M422.46 96.11l-40.4 4.25c-11.12 1.17-19.18 11.57-17.93 23.1l34.92 321.59c1.26 11.53 11.37 20 22.49 18.84l40.4-4.25c11.12-1.17 19.18-11.57 17.93-23.1L445 115c-1.31-11.58-11.42-20.06-22.54-18.89z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                </svg>
            </a>
            <h4>Cursos</h4>
        </div>
    </div>
</div>

@elseif(Auth::user()->Tipo_de_conta == 'Aluno')
<p class="subtitle">Que tal fazer se inscrever em um novo curso?</p>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <a href="/usuario/cursos/{{Auth::user()->id}}" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect x="64" y="176" width="384" height="256" rx="28.87" ry="28.87" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M144 80h224M112 128h288"/></svg>
            </a>
            <h4>Ver meus cursos</h4>
        </div>
        <div class="card col-md-3">
            <a href="curso/consulta" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Terminal</title><rect x="32" y="48" width="448" height="416" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M96 112l80 64-80 64M192 240h64"/></svg>
            </a>
            <h4>Cursos disponíveis</h4>
        </div>
    </div>
</div>

@elseif(Auth::user()->Tipo_de_conta == 'Professor')
<p class="subtitle">Tenha um bom dia!</p>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <a href="usuario/cursos/{{Auth::user()->id}}" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Chevron Forward</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
            </a>
            <h4>Ver cursos ministrados</h4>
        </div>
    </div>
</div>
@endif
@else

<h2>Bem Vindo!</h2>
    <h4>Por favor, realize o <a href="/login">login</a> para visualizar os cursos!</h4>
@endif

@endsection