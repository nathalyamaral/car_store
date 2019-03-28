<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:26:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Categoria
 * 
 * @property int $idcategoria
 * @property string $nome
 * @property string $descricao
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $carros
 *
 * @package App\Models
 */
class Categoria extends Eloquent
{
	protected $primaryKey = 'idcategoria';

	protected $fillable = [
		'nome',
		'descricao'
	];

	public function carros()
	{
		return $this->hasMany(\App\Models\Carro::class, 'categoria_idcategoria');
	}
}
