<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Suspensione
 *
 * @property $id
 * @property $Jugador_Id
 * @property $Jornada_Id
 * @property $Tarjeta_Id
 * @property $Motivo
 * @property $Estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property Jugadore $jugadore
 * @property Programacione $programacione
 * @property Tarjeta $tarjeta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Suspensione extends Model
{
    
    static $rules = [
		'Jugador_Id' => 'required',
		'Jornada_Id' => 'required',
		'Tarjeta_Id' => 'required',
		'Motivo' => 'required',
		'Estatus' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Jugador_Id','Jornada_Id','Tarjeta_Id','Motivo','Estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jugadore()
    {
        return $this->hasOne('App\Models\Jugadore', 'id', 'Jugador_Id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programacione()
    {
        return $this->hasOne('App\Models\Programacione', 'id', 'Jornada_Id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tarjeta()
    {
        return $this->hasOne('App\Models\Tarjeta', 'id', 'Tarjeta_Id');
    }
    

}
