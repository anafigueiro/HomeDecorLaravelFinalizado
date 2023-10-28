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
        Schema::create('ouvidoria', function (Blueprint $table) {
            $table->id();
            $table->string('sugestao',200);
            $table->date('dataRegistro')->nullable();
            $table->string('observacao', 200);
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();

        Schema::table('ouvidoria', function (Blueprint $table) {
            $table->foreignId('contato_id')->nullable()
                 ->constrained('contato')->default(null)->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ouvidoria');
    }
};
