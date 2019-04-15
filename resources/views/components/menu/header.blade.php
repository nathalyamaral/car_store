<header class="site-header">
	<div id="main-header" class="main-header" style="background:#4a4a4a;">
		<div class="container clearfix">
			<div class="logo">
				<a href="{{ url('/') }}"></a>
			</div>
			<div id='cssmenu'>
			<ul>
				<li class='active'><a href="{{ url('/') }}">Homepage</a></li>
				@if (Auth::guest())
				<li><a href="#">Grupo de Carros</a></li>
				<li><a href="{{ route('redeagencia')}}">Rede de agências</a></li>
				<li><a href="{{ route('login') }}">Login</a></li>
				@if (Route::has('register'))
				
				<li class="dropdown">
					<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registro</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a href="{{ route('register') }}">USUÁRIO</a></li>
					<li><a href="{{ route('registerAgencia') }}">AGÊNCIA</a></li>
					</ul>
				</li>
				@endif
				@else
				<li><a href="#">Cadastrar Carros</a></li>
				<li><a href="#">Cadastrar Agencia</a></li>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					<li><a href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">Sair</a></li>
						@csrf
					</form>

					@endguest
				</ul>
			</div>
		</div>
	</div>
</header>