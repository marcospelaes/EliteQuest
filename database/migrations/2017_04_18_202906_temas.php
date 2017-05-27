<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Temas extends Migration
{
    public function up(){
        Schema::create('temas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('temas');
    }
}
