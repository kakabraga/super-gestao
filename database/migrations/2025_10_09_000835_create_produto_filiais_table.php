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
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('filial_id');
            $table->decimal('preco_venda', 8,2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->timestamps();
        });

        Schema::table('produtos', function (Blueprint $table){
            $table->dropColumn(['estoque_minimo','estoque_maximo','preco_venda']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table){
            $table->decimal('preco_venda', 8,2);
            $table->integer('estoque_minimo', 8,2);
            $table->integer('estoque_maximo', 8,2);
        });
        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('produtos');
    }
};
