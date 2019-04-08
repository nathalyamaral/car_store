<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:30:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Marca
 * 
 * @property int $idmarca
 * @property string $nome
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $carros
 *
 * @package App\Models
 */
class Marca extends Eloquent{
	
	protected $table = 'marca';
	protected $primaryKey = 'idmarca';

	protected $fillable = [
		'nome'
	];

	public function carros()
	{
		return $this->hasMany(\App\Models\Carro::class, 'marca_idmarca');
	}

	static function marcas(){
        $marca=self::all();
        return $marca;
    }
}
