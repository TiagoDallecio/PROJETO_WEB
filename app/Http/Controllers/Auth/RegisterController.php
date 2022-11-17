<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Nome_Completo' => ['required', 'string', 'max:255'],
            'CPF' => ['required', 'string', 'max:15'],
            'Email' => ['required', 'string'],
            'Filme_preferido' => ['required', 'string'],
            'CEP' => ['required', 'string'],
            'Rua_de_moradia' => ['required', 'string'],
            'Bairro' => ['required', 'string'],
            'Cidade' => ['required', 'string'],
            'Estado' => ['required', 'string'],
            'Senha_de_acesso' => Hash::make($data['password']),

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'Nome_Completo' => $data['Nome_Completo'],
            'CPF' => $data['CPF'],
            'Email' => $data['email'],
            'Filme_preferido' => $data['Movie'],
            'CEP' => $data['cep'],
            'Rua_de_moradia' => $data['rua'],
            'Bairro' => $data['bairro'],
            'Cidade' => $data['cidade'],
            'Estado' => $data['uf'],
            'Senha_de_acesso' => Hash::make($data['password']),

        ]);
    }
}
