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
        Schema::create('declaracoes', function (Blueprint $table) {
            $table->id();
            $table->string('hash');
            $table->dateTime('data');
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('comprovante_id');
            $table->foreign('aluno_id')->references(columns: 'id')->on('alunos')->onDelete('cascade');
            $table->foreign('comprovante_id')->references(columns: 'id')->on('comprovantes')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declaracoes');
    }
};
