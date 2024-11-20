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
        Schema::create('mode_paiement', function (Blueprint $table) {
            $table->id();
            $table->string('nom_mode')->unique();                 // ex: Espèces, Chèque, Carte bancaire, Virement
            $table->string('reference')->nullable();              // Numéro de chèque, référence de transaction
            $table->decimal('montant', 10, 2);                   // Montant avec 2 décimales
            $table->unsignedBigInteger('etudiant_id');            // Utilisez unsignedBigInteger pour correspondre à l'ID de la table etudiant
            $table->dateTime('date_paiement')->default(now());   // Date et heure du paiement
            $table->text('description')->nullable();             // Description ou notes supplémentaires
            $table->string('devise')->default('XFA');           // Devise du paiement
            $table->timestamps();                               // created_at et updated_at
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mode_paiement');
    }
};
