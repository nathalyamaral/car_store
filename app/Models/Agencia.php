<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:22:17 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Agencia
 * 
 * @property string $cnpj
 * @property string $razao_social
 * @property string $users_cpf
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\User $user
 * @property \App\Models\AgenciaHasEndereco $agencia_has_endereco
 * @property \App\Models\AgenciaHasTelefone $agencia_has_telefone
 *
 * @package App\Models
 */
class Agencia extends Eloquent
{
	public $incrementing = false;

	protected $fillable = [
		'razao_social'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'users_cpf');
	}

	public function agencia_has_endereco()
	{
		return $this->hasOne(\App\Models\AgenciaHasEndereco::class, 'agencia_cnpj');
	}

	public function agencia_has_telefone()
	{
		return $this->hasOne(\App\Models\AgenciaHasTelefone::class, 'agencia_cnpj');
	}

	public static function getAgencia(){
		$value = DB::table('agencia')->orderBy('cnpj', 'asc')->get(); 
		return $value;
   	}

}
