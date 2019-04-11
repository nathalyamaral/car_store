<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:27:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

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
	protected $primaryKey = 'numero_cnh';

	protected $dates = [
		'data_validade',
		'data_nascimento'
	];

	protected $fillable = [
		'numero_cnh',
		'numero_registro',
		'data_validade',
		'rg',
		'data_nascimento',
		'uf',
		'users_cpf'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'users_cpf');
	}

	public static function existsCnh($cnh)
    {
       return DB::table('cnh')->where('numero_cnh', $cnh)->value('numero_cnh');       
	}

	public static function existsRegistro($registro)
    {
       return DB::table('cnh')->where('numero_registro', $registro)->value('numero_registro');       
	}
}
