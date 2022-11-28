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
            $table->string('name')->nullable();
            $table->string('CPF')->nullable();
            $table->string('CEP')->nullable();
            $table->string('Rua_de_moradia')->nullable();
            $table->string('Bairro')->nullable();
            $table->string('Cidade')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Filme_preferido')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('Tipo_de_conta')->nullable();
            $table->string('Avatar')->nullable();
            $table->float('Média')->nullable();
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
