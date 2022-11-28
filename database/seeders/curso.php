<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class curso extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'Nome_do_curso' => 'Desenvolvimento De Sistemas Web',
            'Descrição_completa_do_curso' => 'Estuda conceitos de arquitetura web. Apresenta conceitos de desenvolvimento de projetos web. Apresenta e aplica frameworks e arquiteturas para desenvolvimento de sistemas web. Estuda tecnologias para front-end: CSS, HTML, Javascript e Ajax/JSON. Estuda conceitos de usabilidade em aplicações Web. Desenvolve atividades práticas integradoras que articulam as disciplinas do módulo.',
            'Descrição_simplificada_do_curso' =>'Aqui você vai aprender muito sobre Sistemas Web!',
            'Professor' => 'Xastre',
            'Número_mínimo_de_alunos' => '1',
            'Número_máximo_de_alunos' => '3',
            'Número_de_alunos_inscritos'=>'0',
            'Alunos' =>NULL,
            'media'=>NULL,
            'Status' => '0',
            'Imagem_do_curso'=>'/img/cursos/curso3.jpg',
            'data'=>'2022-12-08',
        ]);
    }
}
