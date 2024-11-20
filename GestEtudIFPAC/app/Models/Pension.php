<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pension
 *
 * @property $id
 * @property $Montant
 * @property $MontantEnLettre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pension extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Montant', 'MontantEnLettre'];


}
