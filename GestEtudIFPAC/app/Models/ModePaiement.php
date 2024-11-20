<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ModePaiement
 *
 * @property $id
 * @property $nom_mode
 * @property $reference
 * @property $montant
 * @property $etudiant_id
 * @property $date_paiement
 * @property $description
 * @property $devise
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Paiement[] $paiements
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ModePaiement extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nom_mode', 'reference', 'montant', 'etudiant_id', 'date_paiement', 'description', 'devise'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paiements()
    {
        return $this->hasMany(\App\Models\Paiement::class, 'id', 'id_ModePaiement');
    }
    
}
