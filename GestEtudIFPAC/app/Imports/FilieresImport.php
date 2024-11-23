<?php

namespace App\Imports;

use App\Models\Filiere;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FilieresImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Vérifiez si les clés 'nom' et 'description' existent dans $row
            if (!isset($row['nom']) || !isset($row['description'])) {
                // Ignorer la ligne si les clés sont manquantes
                return null;
            }

            // Vérifiez si le champ est vide
            if (empty($row['nom']) || empty($row['description'])) {
                // Ignorer la ligne si les valeurs sont vides
                return null;
            }

            // Vérifiez si la filière existe déjà
            $existingFiliere = Filiere::where('nom', $row['nom'])->first();
            if ($existingFiliere) {
                return null; // Ignorer la ligne si la filière existe déjà
            }

            // Créer une nouvelle filière
            return new Filiere([
                'nom' => $row['nom'],
                'description' => $row['description'],
            ]);
    }
}
