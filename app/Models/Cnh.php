<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:27:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cnh
 * 
 * @property int $numero_cnh
 * @property int $numero_registro
 * @property \Carbon\Carbon $data_validade
 * @property string $rg
 * @property \Carbon\Carbon $data_nascimento
 * @property string $uf
 * @property string $users_cpf
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Cnh extends Eloquent
{
	protected $table = 'cnh';
	public $incrementing = false;

	protected $casts = [
		'numero_cnh' => 'int',
		'numero_registro' => 'int'
	];

	protected $dates = [
		'data_validade',
		'data_nascimento'
	];

	protected $fillable = [
		'numero_registro',
		'data_validade',
		'rg',
		'data_nascimento',
		'uf'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'users_cpf');
	}
}
