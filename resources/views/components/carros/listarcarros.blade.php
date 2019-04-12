
<div class="col-md-8">
	<div class="row">
		@foreach($carros as $carro)
		<?php 
			$tam = sizeof($imagensHas) - 1;
		
			for($i = 0; $i < sizeof($imagens); $i++){
				if($imagensHas[$tam-$i] == $imagens[$i]->idimagem) {
					$imagenscarro[$i] = $imagens;
				}
			} 
		?>


			<div class="col-md-6">
				<div class="car-item">
					<div class="thumb-content">
						<div class="car-banner">
							<a href="single_car.html">For Rent</a>
						</div>
						<div class="thumb-inner">
							<a href="single_car.html"><img src="images/{{$imagenscarro[2][0]->imagem}}" alt=""></a>
						</div>
					</div>
						<div class="down-content">
							<a href="single_car.html"><h4>{{$carro->modelo}}</h4></a>
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
	</div>
</div>
