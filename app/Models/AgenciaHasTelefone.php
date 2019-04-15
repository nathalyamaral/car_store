<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:31:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserHasTelefone
 * 
 * @property string $agencia_cnpj
 * @property int $telefone_idtelefone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\AgenciaHasTelefone $agencia_has_telefone
 * @property \Illuminate\Database\Eloquent\Collection $agencia_has_telefone
 *
 * @package App\Models
 */
class AgenciaHasTelefone extends Eloquent
{
	protected $table = 'agencia_has_telefone';

	protected $fillable = [
        'agencia_cnpj',
        'telefone_idtelefone'
	];
}
