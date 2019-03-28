<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:31:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Telefone
 * 
 * @property int $idtelefone
 * @property string $numero
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\AgenciaHasTelefone $agencia_has_telefone
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Telefone extends Eloquent
{
	protected $table = 'telefone';
	protected $primaryKey = 'idtelefone';

	protected $fillable = [
		'numero'
	];

	public function agencia_has_telefone()
	{
		return $this->hasOne(\App\Models\AgenciaHasTelefone::class, 'telefone_idtelefone');
	}

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'users_has_telefone', 'telefone_idtelefone', 'users_cpf')
					->withTimestamps();
	}
}
