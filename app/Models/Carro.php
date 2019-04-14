<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 28 Mar 2019 22:24:46 +0000.
 */

namespace App\Models;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Carro
 * 
 * @property string $placa
 * @property string $modelo
 * @property int $ano
 * @property int $numero_portas
 * @property int $numero_assento
 * @property string $cor
 * @property string $descricao
 * @property float $km
 * @property string $combustivel
 * @property string $cambio
 * @property float $valor_diaria
 * @property string $status
 * @property int $marca_idmarca
 * @property int $categoria_idcategoria
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Categorium $categorium
 * @property \App\Models\Marca $marca
 * @property \Illuminate\Database\Eloquent\Collection $imagems
 * @property \Illuminate\Database\Eloquent\Collection $locacaos
 *
 * @package App\Models
 */
class Carro extends Eloquent
{
	protected $table = 'carro';
	protected $primaryKey = 'placa';
	public $incrementing = false;

	protected $casts = [
		'ano' => 'int',
		'numero_portas' => 'int',
		'numero_assento' => 'int',
		'km' => 'float',
		'valor_diaria' => 'float',
		'marca_idmarca' => 'int',
		'categoria_idcategoria' => 'int'
	];

	protected $fillable = [
		'modelo',
		'ano',
		'numero_portas',
		'numero_assento',
		'cor',
		'descricao',
		'km',
		'combustivel',
		'cambio',
		'valor_diaria',
		'status',
		'marca_idmarca',
		'categoria_idcategoria',
		'agencia_cnpj'
	];

	public function categorium()
	{
		return $this->belongsTo(\App\Models\Categorium::class, 'categoria_idcategoria');
	}

	public function marca()
	{
		return $this->belongsTo(\App\Models\Marca::class, 'marca_idmarca');
	}

	public function imagems()
	{
		return $this->belongsToMany(\App\Models\Imagem::class, 'carro_has_imagem', 'carro_placa', 'imagem_idimagem')
					->withTimestamps();
	}

	public function locacaos()
	{
		return $this->hasMany(\App\Models\Locacao::class, 'carro_placa');
	}

	public function agencia()
	{
		return $this->belongsTo(\App\Models\Agencia::class, 'agencia_cnpj');
	}

	public static function getCarroAgencia($agencia_cnpj = 0){
		$value = DB::table('carro')->where('agencia_cnpj', $agencia_cnpj)->get();
		return $value;
   }
}
