<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:28:44 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Imagem
 * 
 * @property int $idimagem
 * @property string $imagem
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $carros
 *
 * @package App\Models
 */
class Imagem extends Eloquent
{
	protected $table = 'imagem';
	protected $primaryKey = 'idimagem';

	protected $fillable = [
		'imagem'
	];

	public function carros()
	{
		return $this->belongsToMany(\App\Models\Carro::class, 'carro_has_imagem', 'imagem_idimagem', 'carro_placa')
					->withTimestamps();
	}
}
