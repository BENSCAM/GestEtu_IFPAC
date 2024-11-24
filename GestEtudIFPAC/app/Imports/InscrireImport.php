<?php

namespace App\Imports;

use App\Models\inscrire;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InscrireImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Créer une nouvelle filière
        return new inscrire([
            'id_Etudiant' => $row['id_Etudiant'],
            'id_Filiere' => $row['id_Filiere'],
            'anneeAcademique' => $row['anneeAcademique'],
            
        ]);
    }
}
