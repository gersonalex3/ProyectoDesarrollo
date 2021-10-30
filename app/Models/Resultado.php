<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resultado
 *
 * @property $id
 * @property $Jornada_Id
 * @property $Torneo_Id
 * @property $Resultado
 * @property $Gano
 * @property $Perdio
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @property Equipo $equipo
 * @property Programacione $programacione
 * @property Torneo $torneo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Resultado extends Model
{
    
    static $rules = [
		'Jornada_Id' => 'required',
		'Torneo_Id' => 'required',
		'Resultado' => 'required',
		'Gano' => 'required',
		'Perdio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Jornada_Id','Torneo_Id','Resultado','Gano','Perdio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'Gano');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipop()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'Perdio');
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
    public function torneo()
    {
        return $this->hasOne('App\Models\Torneo', 'id', 'Torneo_Id');
    }
    

}
