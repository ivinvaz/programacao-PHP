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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('name', 124); // Nome do produto
            $table->text('description')->nullable(); // Descrição (pode ser nula)
            $table->decimal('price', 8, 2); // Preço (8 dígitos no total, 2 casas decimais)
            $table->integer('stock')->default(0); // Estoque (inteiro, padrão 0)
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
