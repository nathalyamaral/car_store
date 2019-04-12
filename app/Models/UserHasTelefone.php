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
 * @property string $users_cpf
 * @property string $telefone_idtelefone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\UserHasTelefone $users_has_telefone
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class UserHasTelefone extends Eloquent
{
	protected $table = 'users_has_telefone';

	protected $fillable = [
        'users_cpf',
        'telefone_idtelefone'
	];
}
