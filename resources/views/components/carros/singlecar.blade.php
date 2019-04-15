@foreach($carros as $carro)

@endforeach
<?php 
	$tam = sizeof($imagensHas) - 1;

	for($i = 0; $i < sizeof($imagens); $i++){
		$n = strcmp($carro->placa, $imagensHas[0]->carro_placa);
		
		if ( $n == 0){
			if($imagensHas[$tam-$i]->imagem_idimagem == $imagens[$i]->idimagem){
				$imagenscarro = $imagens;

			}
		}	
	} 
	if ($marca[0]->idmarca == $carro->marca_idmarca) {
		$marca1 = $marca[0]->nome;
	}
?>
<div class="col-md-6">
	<div id="single-car" class="slider-pro">
		<div class="sp-slides">

			<div class="sp-slide">
				<img class="sp-image" src="/images/{{$imagenscarro[0]->imagem}}" alt="" />
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="/images/{{$imagenscarro[1]->imagem}}" alt="" />
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="/images/{{$imagenscarro[2]->imagem}}" alt="" />
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="/images/{{$imagenscarro[3]->imagem}}" alt="" />
			</div>

			<div class="sp-slide">
				<img class="sp-image" src="/images/{{$imagenscarro[4]->imagem}}" alt="" />
			</div>

		</div>

		<div class="sp-thumbnails">
			<img class="sp-thumbnail" src="/images/{{$imagenscarro[0]->imagem}}" alt="" />
			<img class="sp-thumbnail"  width="120px" height="80px" src="/images/{{$imagenscarro[1]->imagem}}" alt="" />
			<img class="sp-thumbnail"  width="120px" height="80px" src="/images/{{$imagenscarro[2]->imagem}}" alt="" />
			<img class="sp-thumbnail"  width="120px" height="80px" src="/images/{{$imagenscarro[3]->imagem}}" alt="" />
			<img class="sp-thumbnail"  width="120px" height="80px" src="/images/{{$imagenscarro[4]->imagem}}" alt="" />
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="car-details">
		<h4>{{$marca1}} {{$carro->modelo}}</h4>
		<span>R${{$carro->valor_diaria}}.00</span>
		<p>{{$carro->descricao}}</p>
		<div class="container">
			<div class="row">
				<ul class="car-info col-md-6">
					<li><i class="flaticon flaticon-calendar"></i><p>{{$carro->ano}}</p></li>
					<li><i class="flaticon flaticon-speed"></i><p>{{$carro->cambio}}</p></li>
					
					<li><i class="flaticon flaticon-fuel"></i><p>{{$carro->combustivel}}</p></li>
				</ul>
				<ul class="car-info col-md-6">
					<li><i class="flaticon flaticon-art"></i><p>{{$carro->cor}}</p></li>
					<li><i class="flaticon flaticon-shift"></i><p>{{$carro->cambio}}</p></li>
					<li><i class="flaticon flaticon-car"></i><p>{{$carro->numero_portas}}</p></li>
					
				</ul>
			</div>
		</div>
		<div class="similar-info">
			<div class="primary-button">
				<a href="#"> Fazer Reserva <i class="fa fa-dollar"></i></a>
			</div>
		</div>
	</div>