<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*Run the migrations.*/
    public function up(): void
    {
        Schema::create('desejo', function (Blueprint $table) {
            $table->id();
            $table->string('nome',150);
            $table->string('desc',250);
            $table->date('dataEntrada')->nullable();
            $table->integer('qtdItens');
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();

        Schema::table('desejo', function (Blueprint $table) {
            $table->foreignId('produto_id')->nullable()
                 ->constrained('produto')->default(null)->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /* Reverse the migrations */
    public function down(): void
    {
        Schema::dropIfExists('desejo');
    }
};
