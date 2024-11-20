<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Campus
 *
 * @property $id
 * @property $nom
 * @property $adresse
 * @property $ville
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Campus extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nom', 'adresse', 'ville'];


}
