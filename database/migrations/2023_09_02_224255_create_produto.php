<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*Run the migrations*/
    public function up(): void
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome',150);
            $table->string('descricao',250);
            $table->float('valor',8,2);
            $table->string('imagem',150)->nullable();
            $table->timestamps();
        });
    }

    /*Reverse the migrations*/
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
