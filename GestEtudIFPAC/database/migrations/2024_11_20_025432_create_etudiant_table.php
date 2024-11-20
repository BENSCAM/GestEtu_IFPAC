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
        Schema::create('etudiant', function (Blueprint $table) {
            $table->id();
            $table->string('Matricule')->unique();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Sexe');
            $table->date('DateNaissance');
            $table->string('Adresse')->nullable();
            $table->integer('Telephone');
            $table->string('Email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant');
    }
};
