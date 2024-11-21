<?php

namespace App\Imports;

use App\Models\Filiere;
use Maatwebsite\Excel\Concerns\ToModel;

class FilieresImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         // Vérifier si la filiere existe déjà
         $existingFiliere = Filiere::where('nom', $row['nom'])->first();

         if ($existingFiliere || (empty($row['nom']) || empty($row['description']))) {
            // Si le pays existe déjà, ne rien faire (ignorer la ligne)
            return null;
        }
        //sinon
        return new Filiere([
            'nom' => $row['nom'],   
            'description' => $row['description'],
        ]);
    }
}
