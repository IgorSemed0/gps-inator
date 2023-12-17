<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Documentos extends Migration
{
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('bilhete_identidade');
            $table->string('fotografia');
            $table->string('curriculum');
            $table->timestamps();

        });

    }

    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}

