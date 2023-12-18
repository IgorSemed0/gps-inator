<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Servicos extends Migration
{
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->string('servico');
            $table->text('descricao');
            $table->string('endereco');
            $table->string('provincia');
            $table->string('bilhete_identidade');
            $table->string('fotografia');
            $table->string('curriculum');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicos');
    }

};
