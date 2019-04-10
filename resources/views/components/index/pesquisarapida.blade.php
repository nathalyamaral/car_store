<div class="col-md-4">
	<div class="search-content wow fadeIn" data-wow-duration="0.75s">
		<div class="search-heading">
			<div class="icon">
				<i class="fa fa-search"></i>
			</div>
			<div class="text-content">
				<h2>Pesquisa rápida</h2>
				<span>Faça uma busca das agências em sua cidade</span>
			</div>
		</div>
		<div class="search-form">
			<form method="POST" action="#" class="col-md-16">
				<div class="row">
					<div class="col-md-12">       
						<div class="input-select">
							<div class="input-select">
								<select id="estados" required>
									<option value=""></option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-12">       
						<div class="input-select">
							<select id="cidades" required>
								<option value=""></option>
							</select>
						</div>
					</div>
					
						<div class="col-md-12">       
							<div class="input-select">
								<select name="agencia" id="agencia" required>
									<option>--Nenhuma agência--</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="secondary-button">
								<button class="col-md-12 btn btn-warning" type="submit">Ver carros <i class="fa fa-search"></i></button>
							</div>
						</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#cidades').change(function(){
			var cidades = $(this).val();
			if(cidades){
				$.ajax({
					type:"GET",
					url:"{{url('select')}}?cidades=" + cidades,
					success:function(res){
						if(res){
							$("#agencia").empty();
							$("#agencia").append('<option>Selecione a agência</option>');
							$.each(res,function(key,value){
								$("#agencia").append('<option value="'+key+'">'+value+'</option>');
							});

						}else{
							$("#agencia").empty();
						}
					}
				});
			}else{
				$("#cidades").empty();
				$("#agencia").empty();
			}
		});
	});
</script>