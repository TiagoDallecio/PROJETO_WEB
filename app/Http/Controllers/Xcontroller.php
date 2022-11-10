<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Curso;

class Xcontroller extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function matricula(){

        return view('CRUD.matricula');
    }

    public function store(Request $request) {

        $user = new User;

        $user->Nome_Completo = $request->title;
        $user->CPF = $request->CPF;
        $user->Nome_de_usuário = $request->Username;
        $user->Senha_de_acesso = $request->Senha;
        $user->Filme_preferido = $request->Movie;
        $user->CEP = $request->cep;
        $user->Rua_de_moradia = $request->rua;
        $user->Bairro = $request->bairro;
        $user->Cidade = $request->cidade;
        $user->Estado = $request->uf;
        $user->Tipo_de_Conta = $request->tipo;
        $user->Avatar = $request->avatar;

        $user->save();

        return redirect('/usuario/consulta')->with('msg', 'Usuário cadastrado com sucesso!');

    }

    public function db() {
        
        $user = User::all();

        return view('CRUD.consulta',['user' => $user]);
    }

    public function update($user_id){

        $user = User::findOrFail($user_id);

        return view('CRUD.atualiza',['user' => $user]);
    }


    /*Curso*/

public function cadcurso() {
    $user = User::where('Tipo_de_conta','Professor')->get();

    return view('CRUD.curso.cadcurso',['user' => $user]);
}

public function cdb(){
    $curso = Curso::all();

    return view('CRUD.curso.conscurso',['curso'=> $curso]);
}


public function cstore(Request $request){
    $curso = new Curso;

    $curso->Nome_do_curso = $request->title;
    $curso->Descrição_completa_do_curso = $request->compdesc;
    $curso->Descrição_simplificada_do_curso = $request->simpdesc;
    $curso->Professor = $request->prof;
    $curso->Número_mínimo_de_alunos = $request->min;
    $curso->Número_máximo_de_alunos = $request->max;
    $curso->Status = $request->status;
    
    //upload de imagem
    if($request->hasFile('image') && $request->file('image')->isValid()){
        
        $requestImage = $request->image;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->image->getClientOriginalName() . strtotime("now")) . "." . $extension ;

        $requestImage->move(public_path('img/cursos'), $imageName);

        $curso->Imagem_do_curso = $imageName;
    }

    $curso->save();

    return redirect('/curso/consulta')->with('msg','Curso criado com sucesso!');
}
}


