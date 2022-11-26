<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Nome_Completo' => 'Admin',
            'CPF'=> NULL,
            'CEP'=>NULL,
            'Rua_de_moradia'=>NULL,
            'Bairro'=>NULL,
            'Cidade'=>NULL,
            'Estado'=>NULL,
            'Filme_preferido'=>NULL,
            'Email'=>'admin@gmail.com',
            'Senha_de_acesso'=>bcrypt('admin123'),
            'Tipo_de_conta'=>'Administrador',
            'Avatar'=>NULL,
            'Cursos'=>NULL,
            'Média'=>NULL,
            'Aula'=>NULL,

        ]);

        DB::table('users')->insert([
            'Nome_Completo' => 'Secretaria',
            'CPF'=> NULL,
            'CEP'=>NULL,
            'Rua_de_moradia'=>NULL,
            'Bairro'=>NULL,
            'Cidade'=>NULL,
            'Estado'=>NULL,
            'Filme_preferido'=>NULL,
            'Email'=>'secretaria@gmail.com',
            'Senha_de_acesso'=>bcrypt('secret123'),
            'Tipo_de_conta'=>'Secretaria',
            'Avatar'=>NULL,
            'Cursos'=>NULL,
            'Média'=>NULL,
            'Aula'=>NULL,

        ]);
    }
}
