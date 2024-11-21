<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampusImport extends Model
{
     /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Vérifier si un etudiant existe déjà
        $existingCountry = Campus::where('nom', $row['nom'])->first();

        if ($existingCountry) {
            // Si un etudiant existe déjà, ne rien faire (ignorer la ligne)
            return null;
        }
        // Sinon, créer un nouveau Etudiant
        return new Campus([
            'nom' => $row['nom'],
            'adresse' => $row['adresse'],
            'ville' => $row['ville'],
        ]);
    }
}
