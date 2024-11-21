<?php

namespace App\Models;


use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EtudiantImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Vérifier si un etudiant existe déjà
        $existingCountry = Etudiant::where('name', $row['name'])->first();

        if ($existingCountry) {
            // Si un etudiant existe déjà, ne rien faire (ignorer la ligne)
            return null;
        }
        // Sinon, créer un nouveau Etudiant
        return new Etudiant([
            'name' => $row['name'],
            'abbr' => $row['abbr'],
        ]);
    }
}
