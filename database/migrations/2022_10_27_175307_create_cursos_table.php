<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('Nome_do_curso');
            $table->text('Descrição_completa_do_curso');
            $table->tinyText('Descrição_simplificada_do_curso');
            $table->string('Professor');
            $table->integer('Número mínimo_de_alunos');
            $table->integer('Número_de_alunos_inscritos');
            $table->integer('Número_máximo_de_alunos');
            $table->integer('Status');
            $table->string('Imagem_do_curso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
