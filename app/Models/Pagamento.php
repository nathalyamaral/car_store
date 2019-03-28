<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:31:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pagamento
 * 
 * @property int $idpagamento
 * @property string $numero_cartao
 * @property string $validade
 * @property string $cvv
 * @property string $titular
 * @property string $cpf
 * @property string $bandeira
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $locacaos
 *
 * @package App\Models
 */
class Pagamento extends Eloquent
{
	protected $table = 'pagamento';
	protected $primaryKey = 'idpagamento';

	protected $fillable = [
		'numero_cartao',
		'validade',
		'cvv',
		'titular',
		'cpf',
		'bandeira'
	];

	public function locacaos()
	{
		return $this->hasMany(\App\Models\Locacao::class, 'pagamento_idpagamento');
	}
}
