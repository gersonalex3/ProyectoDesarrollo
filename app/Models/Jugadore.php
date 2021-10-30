<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Jugadore
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $DPI
 * @property $FotoDPI
 * @property $NumeroCamisola
 * @property $FechadeNacimiento
 * @property $equipos_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Jugadore extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'DPI' => 'required',
		'FotoDPI' => 'required',
		'NumeroCamisola' => 'required',
		'FechadeNacimiento' => 'required',
		'equipos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','DPI','FotoDPI','NumeroCamisola','FechadeNacimiento','equipos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'equipos_id');
    }
    

}
