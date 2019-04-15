<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Agencia;
use Illuminate\Http\Request;
use DB;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function grupocarros(){

        $carros = DB::table('carro')->get()->toArray();
        if (sizeof($carros) !=0) {
            $categoria = DB::table('categoria')->where('idcategoria', $carros[0]->categoria_idcategoria)->get()->toArray();
            $marca =  DB::table('marca')->where('idmarca', $carros[0]->marca_idmarca)->get()->toArray();
            $imagensHas = DB::table('carro_has_imagem')->where('carro_placa', $carros[0]->placa)->get()->toArray();
            $imagens =  DB::table('imagem')->get()->toArray();
            return view('grupocarros', compact('carros', 'categoria', 'marca', 'imagensHas', 'imagens'));
        }else {
            return view('redeagencia');
        }
    }

    public function carros(Request $request){

        $carros = DB::table('carro')->where('agencia_cnpj',$request->agencia)->get()->toArray();
        if (sizeof($carros) !=0) {
            $categoria = DB::table('categoria')->where('idcategoria', $carros[0]->categoria_idcategoria)->get()->toArray();
            $marca =  DB::table('marca')->where('idmarca', $carros[0]->marca_idmarca)->get()->toArray();
            $imagensHas = DB::table('carro_has_imagem')->where('carro_placa', $carros[0]->placa)->get()->toArray();
            $imagens =  DB::table('imagem')->get()->toArray();
            return view('carros', compact('carros', 'categoria', 'marca', 'imagensHas', 'imagens'));
        }else if(sizeof($carros == 0)){
            return view('redeagencia');
        }
    }

    public function singleCar(Request $request){
        $carros = DB::table('carro')->where('placa', $request->placa)->get()->toArray();
        if (sizeof($carros) !=0) {
            $categoria = DB::table('categoria')->where('idcategoria', $carros[0]->categoria_idcategoria)->get()->toArray();
            $marca =  DB::table('marca')->where('idmarca', $carros[0]->marca_idmarca)->get()->toArray();
            $imagensHas = DB::table('carro_has_imagem')->where('carro_placa', $carros[0]->placa)->get()->toArray();
            $imagens =  DB::table('imagem')->get()->toArray();
            return view('single', compact('carros', 'categoria', 'marca', 'imagensHas', 'imagens'));
        }else if(sizeof($carros == 0)){
            return view('single');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(Carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(Carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $carro)
    {
        //
    }
}
