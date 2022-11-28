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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id('user_id');
            $table->timestamps();
            $table->string('Nome_Completo');
            $table->string('CPF',14);
            $table->string('Rua_de_moradia');
            $table->string('Bairro');
            $table->string('Cidade');
            $table->string('Estado');
            $table->string('Filme_preferido');
            $table->string('Nome_de_usuário');
            $table->string('Senha_de_acesso');
            $table->datetime('Ultimo_acesso')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
