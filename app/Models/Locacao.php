<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:29:17 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Locacao
 * 
 * @property string $numero_locacao
 * @property \Carbon\Carbon $data_retirada
 * @property \Carbon\Carbon $data_devolucao
 * @property float $total
 * @property \Carbon\Carbon $hora_retirada
 * @property \Carbon\Carbon $hora_devolucao
 * @property int $numero_parcela
 * @property \Carbon\Carbon $data_reserva
 * @property int $extra_numero_seguro
 * @property int $pagamento_idpagamento
 * @property string $carro_placa
 * @property string $users_cpf
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Carro $carro
 * @property \App\Models\Extra $extra
 * @property \App\Models\Pagamento $pagamento
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Locacao extends Eloquent
{
	protected $table = 'locacao';
	protected $primaryKey = 'numero_locacao';
	public $incrementing = false;

	protected $casts = [
		'total' => 'float',
		'numero_parcela' => 'int',
		'extra_numero_seguro' => 'int',
		'pagamento_idpagamento' => 'int'
	];

	protected $dates = [
		'data_retirada',
		'data_devolucao',
		'hora_retirada',
		'hora_devolucao',
		'data_reserva'
	];

	protected $fillable = [
		'data_retirada',
		'data_devolucao',
		'total',
		'hora_retirada',
		'hora_devolucao',
		'numero_parcela',
		'data_reserva',
		'extra_numero_seguro',
		'pagamento_idpagamento',
		'carro_placa',
		'users_cpf'
	];

	public function carro()
	{
		return $this->belongsTo(\App\Models\Carro::class, 'carro_placa');
	}

	public function extra()
	{
		return $this->belongsTo(\App\Models\Extra::class, 'extra_numero_seguro');
	}

	public function pagamento()
	{
		return $this->belongsTo(\App\Models\Pagamento::class, 'pagamento_idpagamento');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'users_cpf');
	}
}
