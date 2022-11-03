<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;

class Xcontroller extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function matriculaA(){

        return view('matricula');
    }

    public function astore(Request $request) {

        $aluno = new Aluno;

        $aluno->Nome_Completo = $request->title;
        $aluno->CPF = $request->CPF;
        $aluno->Nome_de_usuário = $request->Username;
        $aluno->Senha_de_acesso = $request->Senha;
        $aluno->Filme_preferido = $request->Movie;
        $aluno->Rua_de_moradia = $request->rua;
        $aluno->Bairro = $request->bairro;
        $aluno->Cidade = $request->cidade;
        $aluno->Estado = $request->uf;

        $aluno->save();

        return redirect('/alunos/matricula');

    }

    
}
