<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promocao', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->nullable()
                ->constrained('produto')->default(null);
            $table->string('descricao');
            $table->float('novo_valor');
            $table->string('imagem',150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promocao');
    }
};
