<?php

namespace App\Imports;


use App\Models\Campus;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class CampusImport implements ToModel,WithHeadingRow 
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function  model(array $row)
    {
                // Vérification si le champ 'nom' est vide
            if (empty($row['nom']) || empty($row['adresse']) || empty($row['ville'])) {
                // Ignorer cette ligne si des données obligatoires sont manquantes
                return null;
            }
         // Vérifier si le pays existe déjà
         $existingCampus = Campus::where('nom', $row['nom'])->first();

         if ($existingCampus) {
             // Si le pays existe déjà, ne rien faire (ignorer la ligne)
             return null;
         }
         // Sinon, créer un nouveau campus
         return new Campus([
             'nom' => $row['nom'],
             'adresse' => $row['adresse'],
             'ville' => $row['ville'],
         ]);
    }
}
