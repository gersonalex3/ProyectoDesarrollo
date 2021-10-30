<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Torneo
 *
 * @property $id
 * @property $Nombre
 * @property $FechaInicio
 * @property $FechaFinal
 * @property $created_at
 * @property $updated_at
 *
 * @property Fechadetorneo[] $fechadetorneos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Torneo extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'FechaInicio' => 'required',
		'FechaFinal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','FechaInicio','FechaFinal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fechadetorneos()
    {
        return $this->hasMany('App\Models\Fechadetorneo', 'Torneo_id', 'id');
    }
    

}
