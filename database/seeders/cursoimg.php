<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;

class cursoimg extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            "img"=>"/img/cursos/curso1.jpg"
        ]);

        DB::table('images')->insert([
            "img"=>"/img/cursos/curso2.jpg"
        ]);

        DB::table('images')->insert([
            "img"=>"/img/cursos/curso3.jpg"
        ]);

        DB::table('images')->insert([
            "img"=>"/img/cursos/curso4.jpg"
        ]);

        DB::table('images')->insert([
            "img"=>"/img/cursos/curso5.jpg"
        ]);
    }
}
