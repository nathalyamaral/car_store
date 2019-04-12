<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:31:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserHasEndereco
 * 
 * @property string $users_cpf
 * @property string $telefone_idtelefone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\UserHasEndereco $users_has_endereco
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class UserHasEndereco extends Eloquent
{
	protected $table = 'users_has_endereco';

	protected $fillable = [
        'users_cpf',
        'endereco_idendereco'
	];
}
