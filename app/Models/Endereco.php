<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:28:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Endereco
 * 
 * @property int $idendereco
 * @property string $bairro
 * @property string $cep
 * @property string $cidade
 * @property string $estado
 * @property string $numero
 * @property string $logradouro
 * @property string $complemento
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\AgenciaHasEndereco $agencia_has_endereco
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Endereco extends Eloquent
{
	protected $table = 'endereco';
	protected $primaryKey = 'idendereco';

	protected $fillable = [
		'bairro',
		'cep',
		'cidade',
		'estado',
		'numero',
		'logradouro',
		'complemento'
	];

	public function agencia_has_endereco()
	{
		return $this->hasOne(\App\Models\AgenciaHasEndereco::class, 'endereco_idendereco');
	}

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'users_has_endereco', 'endereco_idendereco', 'users_cpf')
					->withTimestamps();
	}
}
