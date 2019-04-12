<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agencia;
use App\Models\Users;
use App\Models\Endereco;
use DB;

class AgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $agencia = DB::table('agencia')->pluck("razao_social","cnpj")->all();
        return view('index', compact('agencia'));
    }

    public function index2()
    {
        $agencia = DB::table('agencia')->pluck("razao_social","cnpj")->all();
        return view('redeagencia', compact('agencia'));
    }

    public function select(Request $request){
        $endereco = DB::table('endereco')->where('cidade', $request->cidades)->pluck("idendereco");
        if (sizeof($endereco) != 0){
            $agencia = DB::table('agencia_has_endereco')->where('endereco_idendereco', $endereco)->pluck("agencia_cnpj");
            $agencialist = DB::table('agencia')->where('cnpj', $agencia)->pluck("razao_social", "cnpj");
            return response()->json($agencialist);
        }else{
            return response()->json("erro");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Agencia = Agencia::inserir($request->all());
        return response()->json($Agencia);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cnpj)
    {
        $agenciaOne = Agencia::ler($cnpj);
        return response()->json($agenciaOne);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cnpj)
    {
        if ($id != null){
            $agenciaOne = Agencia::excluir($cnpj);
            return response()->json($agenciaOne);;       
        }else{
            return '401';
        }
    }
}
