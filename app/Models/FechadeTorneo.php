<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FechadeTorneo
 *
 * @property $id
 * @property $Torneo_id
 * @property $NumerodeJornada
 * @property $FechadeJuego
 * @property $created_at
 * @property $updated_at
 *
 * @property Torneo $torneo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FechadeTorneo extends Model
{
    
    static $rules = [
		'Torneo_id' => 'required',
		'NumerodeJornada' => 'required',
		'FechadeJuego' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Torneo_id','NumerodeJornada','FechadeJuego'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function torneo()
    {
        return $this->hasOne('App\Models\Torneo', 'id', 'Torneo_id');
    }
    

}
