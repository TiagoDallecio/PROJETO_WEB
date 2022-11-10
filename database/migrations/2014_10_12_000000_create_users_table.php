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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Nome_Completo');
            $table->string('CPF',14);
            $table->string('CEP');
            $table->string('Rua_de_moradia');
            $table->string('Bairro');
            $table->string('Cidade');
            $table->string('Estado');
            $table->string('Filme_preferido')->nullable();
            $table->string('Nome_de_usuário');
            $table->string('Senha_de_acesso');
            $table->string('Tipo_de_conta');
            $table->string('Avatar')->nullable();
            $table->datetime('Ultimo_acesso')->useCurrent();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
