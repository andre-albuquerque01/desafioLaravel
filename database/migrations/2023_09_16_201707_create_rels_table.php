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
        Schema::create('rels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alunos_id'); 
            $table->foreign('alunos_id')->references('id')->on('alunos');
            $table->unsignedBigInteger('turmas_id'); 
            $table->foreign('turmas_id')->references('id')->on('turmas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rels');
    }
};
