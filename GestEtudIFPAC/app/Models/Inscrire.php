<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscrire
 *
 * @property $id
 * @property $id_Etudiant
 * @property $id_Filiere
 * @property $anneeAcademique
 * @property $created_at
 * @property $updated_at
 *
 * @property Etudiant $etudiant
 * @property Filiere $filiere
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscrire extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_Etudiant', 'id_Filiere', 'anneeAcademique'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etudiant()
    {
        return $this->belongsTo(\App\Models\Etudiant::class, 'id_Etudiant', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function filiere()
    {
        return $this->belongsTo(\App\Models\Filiere::class, 'id_Filiere', 'id');
    }
    
}
