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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nascimento');
            $table->enum('sexo', ['Masculino', 'Feminino', 'Outro']);
            $table->string('rg')->nullable();
            $table->string('cpf')->unique();
            $table->string('endereco')->nullable();
            $table->string('telefone')->nullable();
            $table->text('doencas_alergias')->nullable();
            $table->boolean('alerta')->default(false);
            $table->json('vacinas')->nullable();
            $table->string('remedios')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
