@extends('layouts.app')
@section('content')
    <h1>Painel de Controle</h1>
@stop

    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-black">
          <div class="inner">
            <!--<h3>{{/*$agencias*/}}</h3>-->
            <p>Agencia Cadastradas</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
        <!--<a href="{{ route('coloca roda das agencias') }}" class="small-box-footer">Mais Inforamções <i class="fa fa-arrow-circle-right"></i></a>-->
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-black">
          <div class="inner">
            <!--<h3> {{/*$mostra cliente*/}}</h3>-->
            <p>Clientes Cadastradas</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <!--<a href="{{ route('coloca rota das pessoas') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>-->
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-black">
          <div class="inner">
            <!--<h3>{{$carros}}</h3>-->
            <p>Carros Cadastrados</p>
          </div>
          <div class="icon">
            <i class="fa fa-star-o"></i>
          </div>
          <!--<a href="{{ route('colocar rota dos carros') }}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>-->
        </div>
      </div>

    </div>
