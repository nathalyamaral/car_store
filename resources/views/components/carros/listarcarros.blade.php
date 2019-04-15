
<div class="col-md-8">
	<div class="row">
		@foreach($carros as $carro)

		<?php 
			
			$tam = sizeof($imagensHas) - 1;
			$imagenscarro = array();
			for($i = 0; $i < sizeof($imagensHas); $i++){

				$n = strcmp($carro->placa, $imagensHas[0]->carro_placa);
				if ( $n == 0){
					if($imagensHas[$tam-$i]->imagem_idimagem == $imagens[$i]->idimagem){
						$imagenscarro = $imagens;
					}
				}else{
					$imagenscarro = array();
				}
				if($imagenscarro != null){
					$imagem = $imagenscarro[$i]->imagem;
					
				}
			} 
			
			if ($marca[0]->idmarca == $carro->marca_idmarca) {
				$marca1 = $marca[0]->nome;
			}
		?>
		
			<div class="col-md-6">
				<div class="car-item">
					<div class="thumb-content">
						<div class="car-banner">
							<a href="{{ route('SingleCar', $carro->placa) }}">{{$marca1}}</a>
						</div>
						<div class="thumb-inner">
							<a href="{{ route('SingleCar', $carro->placa) }}"><img src="images/{{$imagem}}" alt=""></a>
						</div>
					</div>
						<div class="down-content">
							<a href="{{ route('SingleCar', $carro->placa) }}"><h4>{{$carro->modelo}}</h4></a>
							<span>R${{$carro->valor_diaria}}.00</span>
							<div class="line-dec"></div>
							<p>{{$carro->descricao}}. <br>
								Número Portas: {{$carro->numero_portas}} <br>
								Número Assentos: {{$carro->numero_assento}} <br>
								Cor: {{$carro->cor}}
							</p>
							<ul class="car-info">
								<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>{{$carro->ano}}</p></div></li>
								<li><div class="item"><i class="flaticon flaticon-speed"></i><p>{{$carro->cambio}}</p></div></li>
								<li><div class="item"><i class="flaticon flaticon-road"></i><p>{{$carro->km}}km</p></div></li>
								<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>{{$carro->combustivel}}</p></div></li>
							</ul>
						</div>
				</div>
			</div>
			<?php $imagem = '';  ?>
			<input type="hidden" name="placa" id="placa" value="{{$carro->placa}}">
		@endforeach
		<div class="col-md-12">
			<div class="page-numbers">
				<div class="pagination-content">
					<ul>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</form>
	</div>
</div>
