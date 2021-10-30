<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarjeta
 *
 * @property $id
 * @property $Nombre
 * @property $Decripcion
 * @property $DiasSuspencion
 * @property $created_at
 * @property $updated_at
 *
 * @property Suspensione[] $suspensiones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarjeta extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Decripcion' => 'required',
		'DiasSuspencion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Decripcion','DiasSuspencion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suspensiones()
    {
        return $this->hasMany('App\Models\Suspensione', 'Tarjeta_Id', 'id');
    }
    

}
