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
            'name' => 'Admin',
            'CPF'=> NULL,
            'CEP'=>NULL,
            'Rua_de_moradia'=>NULL,
            'Bairro'=>NULL,
            'Cidade'=>NULL,
            'Estado'=>NULL,
            'Filme_preferido'=>NULL,
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'Tipo_de_conta'=>'Administrador',
            'Avatar'=>NULL,
            'Média'=>NULL,
            

        ]);

        DB::table('users')->insert([
            'name' => 'Secretaria',
            'CPF'=> NULL,
            'CEP'=>NULL,
            'Rua_de_moradia'=>NULL,
            'Bairro'=>NULL,
            'Cidade'=>NULL,
            'Estado'=>NULL,
            'Filme_preferido'=>NULL,
            'email'=>'secretaria@gmail.com',
            'password'=>bcrypt('secret123'),
            'Tipo_de_conta'=>'Secretaria',
            'Avatar'=>NULL,
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Tiago Oliveira Dallecio',
            'CPF'=> '431.294.688-46',
            'CEP'=>'13092-133',
            'Rua_de_moradia'=>'Avenida Doutor Hermas Braga',
            'Bairro'=>'Nova Campinas',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Homem Aranha',
            'email'=>'tidallecio@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Aluno',
            'Avatar'=>NULL,
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Xastre',
            'CPF'=> '123.456.789-10',
            'CEP'=>'13097-130',
            'Rua_de_moradia'=>'Rua Amalia Della Coletta',
            'Bairro'=>'Bairro Imperador',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Jurassic Park',
            'email'=>'xastre@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Professor',
            'Avatar'=>'/img/avatar/guaxinim-terno.png',
            'Média'=>NULL,
           

        ]);
    }
}
