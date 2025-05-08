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
        Schema::create('comprovantes', function (Blueprint $table) {
            $table->id();
            $table->float('horas');
            $table->string('atividade');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('categoria_id')->references(columns: 'id')->on('categorias')->onDelete('cascade');
            $table->foreign('aluno_id')->references(columns: 'id')->on('alunos')->onDelete('cascade');
            $table->foreign('user_id')->references(columns: 'id')->on('users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprovantes');
    }
};
