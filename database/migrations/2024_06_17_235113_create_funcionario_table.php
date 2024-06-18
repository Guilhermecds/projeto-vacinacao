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
        Schema::create('funcionario', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignId('profissao_id')->constrained('profissao');
            $table->date('data_admissao')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable()->unique();
            $table->string('endereco')->nullable();
            $table->string('telefone')->nullable();
            $table->enum('sexo', ['Masculino', 'Feminino', 'Outro'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionario');
    }
};
