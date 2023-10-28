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
        Schema::create('categoria_produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome',200);
            $table->string('tipo', 200);
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();

        Schema::table('categoria_produto', function (Blueprint $table) {
            $table->foreignId('produto_id')->nullable()
                 ->constrained('produto')->default(null)->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_produto');
    }
};
