<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Image;
use App\Models\Curso;
use Auth;

class Xcontroller extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function matricula(){

        $avatares = Avatar::all();

        return view('CRUD.matricula',['avatares'=> $avatares]);
    }

    public function store(Request $data) {

        if($data['tipo']=='Aluno') 
        
        {
        User::create([
        'name' => $data['title'],
        'CPF' => $data['CPF'],
        'email' => $data['email'],
        'CEP' =>$data['cep'],
        'Filme_preferido' =>$data['Movie'],
        'Rua_de_moradia' =>$data['rua'],
        'Cidade' =>$data['cidade'],
        'Bairro' =>$data['bairro'],
        'Estado' =>$data['uf'],
        'Tipo_de_conta' =>$data['tipo'],
        'Avatar'=>NULL,
        'password' => bcrypt($data['Senha']),
            ]);
        }

        else
        
        {
            User::create([
                'name' => $data['title'],
                'CPF' => $data['CPF'],
                'email' => $data['email'],
                'CEP' =>$data['cep'],
                'Filme_preferido' =>$data['Movie'],
                'Rua_de_moradia' =>$data['rua'],
                'Cidade' =>$data['cidade'],
                'Bairro' =>$data['bairro'],
                'Estado' =>$data['uf'],
                'Tipo_de_conta' =>$data['tipo'],
                'Avatar'=>$data['avatar'],
                'password' => bcrypt($data['Senha']),
                    ]);
        }

        return redirect('/usuario/consulta')->with('msg', 'Usuário cadastrado com sucesso!');

    }

    public function db() {
        
        $users = User::all();

        return view('CRUD.consulta',['users' => $users]);
    }

    public function edit($id){

        $user = User::findOrFail($id);

        $avatares = Avatar::all();

        return view('CRUD.atualiza',['user' => $user],['avatares'=>$avatares]);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $users = User::find($id)->update($request->all());

       if(Auth::user()->Tipo_de_conta == 'Aluno' || Auth::user()->Tipo_de_conta == 'Professor'){
        
        return redirect('/')->with('msg','Informações atualizadas com sucesso!');
       }
        return redirect('/usuario/consulta')->with('msg','Usuário atualizado com sucesso!');
    }

    public function destroy($id){

        $user = User::find($id);
        $user->delete();

        return redirect('/usuario/consulta')->with('msg','Usuário removido com sucesso!');
    }


    /*Curso*/

public function cadcurso() {
    $user = User::where('Tipo_de_conta','Professor')->get();
    $img = DB::table('images')->select('img')->get();

    

    return view('CRUD.curso.cadcurso',['user' => $user],['img'=>$img]);
}

public function cdb(){
   
    $curso = Curso::all();
foreach($curso as $cursos){
    if($cursos->Número_mínimo_de_alunos <= count($cursos->user)){
        $cursos->Status = 1;
    }
}
foreach($curso as $num){
    if($num->Número_máximo_de_alunos == count($num->user)){
        $num->Status = 2;
    }
}
    return view('CRUD.curso.conscurso',['cursos'=> $curso]);
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
    $curso->Imagem_do_curso = $request->imagem;
    $curso->data = $request->data;

    $curso->save();

    return redirect('/curso/consulta')->with('msg','Curso criado com sucesso!');
}
public function read($id){
    
    $curso = Curso::findOrFail($id);
    
    if($curso->Número_mínimo_de_alunos <= count($curso->user)){
        $curso->Status = 1;
    }

    if($curso->Número_máximo_de_alunos == count($curso->user)){
        $curso->Status = 2;
    }

    return view ('CRUD.curso.viewcurso', ['curso'=> $curso]);
}

public function cedit($id){


    $user = User::where('Tipo_de_conta','Professor')->get();

    $curso = Curso::findOrFail($id);

    return view ('CRUD.curso.atualizacurso', ['curso'=>$curso], ['user'=>$user]);
}

public function cupdate(Request $request, $id){


    Curso::find($id)->update($request->all());    

    return redirect('curso/consulta')->with('msg','Curso atualizado com sucesso!');
}

public function cdestroy($id){

    $curso = Curso::find($id);
    $curso->delete();

    return redirect('curso/consulta')->with('msg','Curso excluído com sucesso!');
}

public function join($id){
    $user = Auth::user();

    $user-> curso()->attach($id);

    $curso = Curso::findOrFail($id);

    Auth::user()::findOrFail($id);

    return redirect ('/')->with('msg','Inscrição realizada com sucesso!');
}

public function usercourses(){

    $user = User::findOrFail(Auth::user()->id);
    $cursos = $user->curso;

    return view('cusers',['user'=>$user],['cursos'=>$cursos]);
    
}

public function leave($id){
    $user = Auth::user();

    $user-> curso()->detach($id);

    $curso = Curso::findOrFail($id);

    return redirect ('/')->with('msg','Inscrição cancelada com sucesso!');
}

public function media($id){

    $user = User::findOrFail($id);

    return view('editmedia',['user'=>$user]);
}

public function updatemedia(Request $request, $id)
{
   $users = User::find($id)->update($request->all());

    return redirect('/')->with('msg','Média atualizada com sucesso!');
}

}



