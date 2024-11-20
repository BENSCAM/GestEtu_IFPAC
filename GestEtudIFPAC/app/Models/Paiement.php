<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paiement
 *
 * @property $id
 * @property $montant
 * @property $date_paiement
 * @property $id_ModePaiement
 * @property $id_Etudiant
 * @property $created_at
 * @property $updated_at
 *
 * @property Etudiant $etudiant
 * @property ModePaiement $modePaiement
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paiement extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['montant', 'date_paiement', 'id_ModePaiement', 'id_Etudiant'];


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
    public function modePaiement()
    {
        return $this->belongsTo(\App\Models\ModePaiement::class, 'id_ModePaiement', 'id');
    }
    
}
