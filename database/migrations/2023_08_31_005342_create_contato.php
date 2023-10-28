<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*Run the migrations*/
    public function up(): void
    {
        Schema::create('contato', function (Blueprint $table) {
            $table->id();
            $table->string('nome',150);
            $table->string('sobrenome',150);
            $table->string('email',150);
            $table->string('des',250);
            $table->string('endereco',250);
            $table->timestamps();
        });
    }

    /*Reverse the migrations*/
    public function down(): void
    {
        Schema::dropIfExists('contato');
    }
};
