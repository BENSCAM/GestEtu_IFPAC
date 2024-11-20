<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Payer
 *
 * @property $id
 * @property $id_Etudiant
 * @property $id_Pension
 * @property $id_Campus
 * @property $created_at
 * @property $updated_at
 *
 * @property Campus $campus
 * @property Etudiant $etudiant
 * @property Pension $pension
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Payer extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_Etudiant', 'id_Pension', 'id_Campus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function campus()
    {
        return $this->belongsTo(\App\Models\Campus::class, 'id_Campus', 'id');
    }

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
    public function pension()
    {
        return $this->belongsTo(\App\Models\Pension::class, 'id_Pension', 'id');
    }

}
