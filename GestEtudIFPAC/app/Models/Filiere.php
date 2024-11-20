<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Filiere
 *
 * @property $id
 * @property $nom
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Filiere extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nom', 'description'];


}
