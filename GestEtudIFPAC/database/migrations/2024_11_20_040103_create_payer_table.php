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
        Schema::create('payers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Etudiant');
            $table->unsignedBigInteger('id_Pension');
            $table->unsignedBigInteger('id_Campus');
            $table->foreign('id_Etudiant')->references('id')->on('Etudiant');
            $table->foreign('id_Pension')->references('id')->on('Pension');
            $table->foreign('id_Campus')->references('id')->on('Campus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payer');
    }
};
