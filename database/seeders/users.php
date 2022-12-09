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
            'name' => 'Renan Rohers Salvador',
            'CPF'=> '431.294.688-46',
            'CEP'=>'13092-133',
            'Rua_de_moradia'=>'Avenida Doutor Hermas Braga',
            'Bairro'=>'Nova Campinas',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Homem Aranha',
            'email'=>'rerohers@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Aluno',
            'Avatar'=>NULL,
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Tiago Brandolis Mello',
            'CPF'=> '431.294.688-46',
            'CEP'=>'13092-133',
            'Rua_de_moradia'=>'Avenida Doutor Hermas Braga',
            'Bairro'=>'Nova Campinas',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Homem Aranha',
            'email'=>'tiagom@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Aluno',
            'Avatar'=>NULL,
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Leo',
            'CPF'=> '431.294.688-46',
            'CEP'=>'13092-133',
            'Rua_de_moradia'=>'Avenida Doutor Hermas Braga',
            'Bairro'=>'Nova Campinas',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Homem Aranha',
            'email'=>'leo@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Aluno',
            'Avatar'=>NULL,
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Maria',
            'CPF'=> '431.294.688-46',
            'CEP'=>'13092-133',
            'Rua_de_moradia'=>'Avenida Doutor Hermas Braga',
            'Bairro'=>'Nova Campinas',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Homem Aranha',
            'email'=>'maria@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Aluno',
            'Avatar'=>NULL,
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Lucio',
            'CPF'=> '431.294.688-46',
            'CEP'=>'13092-133',
            'Rua_de_moradia'=>'Avenida Doutor Hermas Braga',
            'Bairro'=>'Nova Campinas',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Homem Aranha',
            'email'=>'lucio@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Aluno',
            'Avatar'=>NULL,
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Gabriel',
            'CPF'=> '431.294.688-46',
            'CEP'=>'13092-133',
            'Rua_de_moradia'=>'Avenida Doutor Hermas Braga',
            'Bairro'=>'Nova Campinas',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Homem Aranha',
            'email'=>'gabriel@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Aluno',
            'Avatar'=>NULL,
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Daniel',
            'CPF'=> '431.294.688-46',
            'CEP'=>'13092-133',
            'Rua_de_moradia'=>'Avenida Doutor Hermas Braga',
            'Bairro'=>'Nova Campinas',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Homem Aranha',
            'email'=>'daniel@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Aluno',
            'Avatar'=>NULL,
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Valdemar',
            'CPF'=> '431.294.688-46',
            'CEP'=>'13092-133',
            'Rua_de_moradia'=>'Avenida Doutor Hermas Braga',
            'Bairro'=>'Nova Campinas',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Homem Aranha',
            'email'=>'valdemar@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Aluno',
            'Avatar'=>NULL,
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Thomas',
            'CPF'=> '431.294.688-46',
            'CEP'=>'13092-133',
            'Rua_de_moradia'=>'Avenida Doutor Hermas Braga',
            'Bairro'=>'Nova Campinas',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Homem Aranha',
            'email'=>'thomas@gmail.com',
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

        DB::table('users')->insert([
            'name' => 'Mario',
            'CPF'=> '123.456.789-10',
            'CEP'=>'13097-130',
            'Rua_de_moradia'=>'Rua Amalia Della Coletta',
            'Bairro'=>'Bairro Imperador',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Jurassic Park',
            'email'=>'mario@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Professor',
            'Avatar'=>'/img/avatar/guaxinim-terno.png',
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Angela',
            'CPF'=> '123.456.789-10',
            'CEP'=>'13097-130',
            'Rua_de_moradia'=>'Rua Amalia Della Coletta',
            'Bairro'=>'Bairro Imperador',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Jurassic Park',
            'email'=>'angela@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Professor',
            'Avatar'=>'/img/avatar/guaxinim-terno.png',
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Pedro',
            'CPF'=> '123.456.789-10',
            'CEP'=>'13097-130',
            'Rua_de_moradia'=>'Rua Amalia Della Coletta',
            'Bairro'=>'Bairro Imperador',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Jurassic Park',
            'email'=>'pedro@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Professor',
            'Avatar'=>'/img/avatar/guaxinim-terno.png',
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Luciana',
            'CPF'=> '123.456.789-10',
            'CEP'=>'13097-130',
            'Rua_de_moradia'=>'Rua Amalia Della Coletta',
            'Bairro'=>'Bairro Imperador',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Jurassic Park',
            'email'=>'luciana@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Professor',
            'Avatar'=>'/img/avatar/guaxinim-terno.png',
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Henrique',
            'CPF'=> '123.456.789-10',
            'CEP'=>'13097-130',
            'Rua_de_moradia'=>'Rua Amalia Della Coletta',
            'Bairro'=>'Bairro Imperador',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Jurassic Park',
            'email'=>'henrique@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Professor',
            'Avatar'=>'/img/avatar/guaxinim-terno.png',
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Eduardo',
            'CPF'=> '123.456.789-10',
            'CEP'=>'13097-130',
            'Rua_de_moradia'=>'Rua Amalia Della Coletta',
            'Bairro'=>'Bairro Imperador',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Jurassic Park',
            'email'=>'eduardo@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Professor',
            'Avatar'=>'/img/avatar/guaxinim-terno.png',
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Roger',
            'CPF'=> '123.456.789-10',
            'CEP'=>'13097-130',
            'Rua_de_moradia'=>'Rua Amalia Della Coletta',
            'Bairro'=>'Bairro Imperador',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Jurassic Park',
            'email'=>'roger@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Professor',
            'Avatar'=>'/img/avatar/guaxinim-terno.png',
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Douglas',
            'CPF'=> '123.456.789-10',
            'CEP'=>'13097-130',
            'Rua_de_moradia'=>'Rua Amalia Della Coletta',
            'Bairro'=>'Bairro Imperador',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Jurassic Park',
            'email'=>'douglas@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Professor',
            'Avatar'=>'/img/avatar/guaxinim-terno.png',
            'Média'=>NULL,
           

        ]);

        DB::table('users')->insert([
            'name' => 'Roberto',
            'CPF'=> '123.456.789-10',
            'CEP'=>'13097-130',
            'Rua_de_moradia'=>'Rua Amalia Della Coletta',
            'Bairro'=>'Bairro Imperador',
            'Cidade'=>'Campinas',
            'Estado'=>'SP',
            'Filme_preferido'=>'Jurassic Park',
            'email'=>'roberto@gmail.com',
            'password'=>bcrypt('12345678'),
            'Tipo_de_conta'=>'Professor',
            'Avatar'=>'/img/avatar/guaxinim-terno.png',
            'Média'=>NULL,
           

        ]);
    }
}
