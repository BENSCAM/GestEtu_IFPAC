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
        Schema::create('paiement', function (Blueprint $table) {
            $table->id();
            $table->integer('montant');
            $table->date('date_paiement');
            $table->unsignedBigInteger('id_ModePaiement');
            $table->unsignedBigInteger('id_Etudiant');
            $table->foreign('id_Etudiant')->references('id')->on('Etudiant');
            $table->foreign('id_ModePaiement')->references('id')->on('mode_paiement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiement');
    }
};
