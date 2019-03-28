<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agencia extends Model{
    //

    protected $table = 'agencia';
    protected $primaryKey = 'cnpj';
	public $incrementing = false;

    protected $fillable = [
    	'cnpj',
    	'razao_social',
    	'users_cpf',
    ];

    public function users(){
		return $this->belongsTo(\App\Models\User::class, 'users_cpf');
	}

    public static function inserir($data){

    	$agencia = DB::table("agencia")->insert([ 'cnpj' => $request['cnpj'],'razao_social' => $request['razao_social'], 'users_cpf' => $request['users_cpf']]);
		return [$agencia, 200];
    }


    public static function ler($cnpj){
		if ($cnpj == null) {
			return self::all();
		}else if ($cnpj != null) {
			return self::all()->where('razao_social', $cnpj);
		} else {
			return self::all()->where($cnpj);
		}
	}

    public static function excluir(Request $request, $cnpj){
		$agencia = Investimento::find($cnpj);
		if (!empty($agencia)) {
			$agencia->delete();
			if (empty($agencia)) {
				return 405;
			}
			return 200;
		}
	}

}
