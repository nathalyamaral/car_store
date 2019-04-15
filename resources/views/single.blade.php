@appview
@endappview

<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
					<div class="row">
						<div class="heading-content col-md-12">
							<p><a href="index-2.html">Homepage</a> / <em> Carros</em> / <em> Detalhes Carros</em></p>
							<h2>Car <em>Detalhes</em></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="recent-car single-car wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
	<div class="container">
		<div class="recent-car-content">
			<div class="row">
				
					@singlecar(['carros' => $carros, 'categoria' => $categoria, 'marca' => $marca, 'imagensHas' => $imagensHas, 'imagens' => $imagens])
					@endsinglecar
				
			</div>
		</div>
	</div>
</div>

@footer
@endfooter