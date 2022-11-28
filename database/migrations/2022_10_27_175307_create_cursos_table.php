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
            $table->string('Professor')->nullable();
            $table->integer('Número_mínimo_de_alunos');
            $table->integer('Número_de_alunos_inscritos')->default('0');
            $table->integer('Número_máximo_de_alunos');
            $table->json('Alunos')->nullable();
            $table->float('media')->nullable();
            $table->tinyInteger('Status')->default('0')->nullable();
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
