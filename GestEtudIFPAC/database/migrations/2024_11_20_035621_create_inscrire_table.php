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
        Schema::create('inscrires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Etudiant');
            $table->unsignedBigInteger('id_Filiere');
            $table->foreign('id_Etudiant')->references('id')->on('Etudiant');
            $table->foreign('id_Filiere')->references('id')->on('Filiere');
            $table->Year('anneeAcademique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscrire');
    }
};
