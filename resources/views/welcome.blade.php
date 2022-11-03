@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div>
    <h1>Bem Vindo!</h1>
        <h3>Secretaria</h3>
</div>
<div id="login-container" class="col-md-12">
    <h2>Login</h2>
    <p class="subtitle">Como desejar logar no sistema?</p>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <a href="alunos/matricula" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><rect x="32" y="64" width="448" height="320" rx="32" ry="32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 448l-8-64h-80l-8 64h96z"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 448H144"/></svg>
                <div class="card-body">
                    <h5 class="card-title">
                        ALUNOS
                    </h5>
                </div>
            </a>
        </div>
    <div class="card col-md-3"> 
    <a href="professores/cadastrar" class="btn">  
    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Glasses</title><path d="M224 232a32 32 0 0164 0M448 200h16M64 200H48M64 200c0 96 16 128 80 128s80-32 80-128c0 0-16-16-80-16s-80 16-80 16zM448 200c0 96-16 128-80 128s-80-32-80-128c0 0 16-16 80-16s80 16 80 16z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
            <div class="card-body">
                <h5 class="card-title">
                    Professor
                </h5>
            </div>
        </a>
    </div>
    </div>
</div>


@endsection