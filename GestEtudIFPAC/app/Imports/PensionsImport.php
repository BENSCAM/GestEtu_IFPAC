<?php

namespace App\Imports;

use App\Models\pension;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PensionsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Vérifiez si les clés  existent dans $row
        if (!isset($row['montant']) || !isset($row['MontantEnLettre'])) {
            // Ignorer la ligne si les clés sont manquantes
            return response()->json([
                'error' => "Les clés 'montant' ou 'MontantEnLettre' sont manquantes."
            ], 422);
        }

        // Vérifiez si les champs sont vide
        if (empty($row['montant']) || empty($row['MontantEnLettre'])) {
            // Ignorer la ligne si les valeurs sont vides
            return response()->json([
                'error' => "Les champs 'montant' ou 'MontantEnLettre' ne doivent pas être vides."
            ], 422);
        }
        
        return new pension([
            'montant' => $row['montant'],
            'MontantEnLettre' => $row['MontantEnLettre'],
        ]);
    }
}
