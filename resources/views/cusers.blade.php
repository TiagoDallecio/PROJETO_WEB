@extends ('layouts.main')

@section('title', 'Cursos do usuário')

@section('content')

@if(Auth::user()->Tipo_de_conta == 'Aluno')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Inscrições realizadas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($cursos) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Aluno</th>
                <th scope="col">Participantes</th>
                <th scope="col">Média</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach(Auth::user()->curso as $ins)
            <tr>
                <td scropt="row">{{$loop->index + 1}}</td>
                <td><a href="/curso/consulta/{{$ins->id}}">{{$ins->Nome_do_curso}}</a></td>
                <td>{{Auth::user()->name}}</td>
                <td>{{count($ins->user)}}</td>
                <td>{{Auth::user()->Média}}</td>
                <td>
                    <form action="/curso/sair/{{$ins->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger delete-btn">
                            Cancelar inscrição
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @else
    <p>Você ainda não está inscrito em nenhum curso. <a href="/curso/consulta"> Clique aqui</a> para ver todos os cursos.</p>
</div>
@endif

@elseif(Auth::user()->Tipo_de_conta == 'Professor')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Cursos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($cursos) > 0) 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Aluno</th>
                <th scope="col">Média</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            @foreach($curso->user as $usuario)
            @if($usuario->Tipo_de_conta == 'Aluno')
            <tr>
                <td scropt="row">{{$loop->index + 1}}</td>
                <td><a href="/curso/consulta/{{$curso->id}}">{{$curso->Nome_do_curso}}</a></td>

                <td>{{$usuario->name}}</td>
                <td>{{$usuario->Média}}</td>
                <td>{{count($curso->user)}}</td>
                <td><a href="/usuario/atualizar/media/{{$usuario->id}}">Editar Média</a></td>
            </tr>
            @endif
            @endforeach
            @endforeach
        </tbody>
    </table>

    @else
    <p>Você ainda não está inscrito em nenhum curso. <a href="/cursos/consulta"> Clique aqui</a> para ver todos os cursos.</p>
</div>
@endif

@endif

@endsection