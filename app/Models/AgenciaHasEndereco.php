<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:31:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AgenciaHasEndereco
 * 
 * @property string $agencia_cnpj
 * @property int $endereco_idendereco
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\AgenciaHasEndereco $agencia_has_endereco
 * @property \Illuminate\Database\Eloquent\Collection $agencia_has_endereco
 *
 * @package App\Models
 */
class AgenciaHasEndereco extends Eloquent
{
	protected $table = 'agencia_has_endereco';

	protected $fillable = [
        'agencia_cnpj',
        'endereco_idendereco'
	];
}
