<header class="site-header">
	<div id="main-header" class="main-header">
		<div class="container clearfix">
			<div class="logo">
				<a href="{{ url('/') }}"></a>
			</div>
			<div id='cssmenu'>
				<ul>
				   	<li class='active'><a href="{{ url('/') }}">Homepage</a></li>
				   	<li><a href="{{ url('/carros') }}">Lista de Carros</a></li>
			   		<li><a href="#">Cadastrar Carros</a></li>
			   		<li><a href="#">Cadastrar Agencia</a></li>
			   		<li><a href='#'>Sair</a></li>
			   		<li><a href="{{ url('/login') }}">Login</a></li>
				 	<li><a href="{{	url('/register') }}">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>