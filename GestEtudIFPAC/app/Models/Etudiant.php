<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Etudiant
 *
 * @property $id
 * @property $Matricule
 * @property $Nom
 * @property $Prenom
 * @property $Sexe
 * @property $DateNaissance
 * @property $Adresse
 * @property $Telephone
 * @property $Email
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Etudiant extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Matricule', 'Nom', 'Prenom', 'Sexe', 'DateNaissance', 'Adresse', 'Telephone', 'Email'];


}
