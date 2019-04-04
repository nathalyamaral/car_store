<header class="site-header">
	<div id="main-header" class="main-header" style="background:#4a4a4a;">
		<div class="container clearfix">
			<div class="logo">
				<a href="{{ url('/') }}"></a>
			</div>
			<div id='cssmenu'>
				<ul>
					<li class='active'><a href="{{ url('/') }}">Homepage</a></li>
					<li><a href="{{ url('/carros') }}">Lista de Carros</a></li>
					
					@if (Auth::guest())
					<li><a href="{{ route('login') }}">Login</a></li>
					@if (Route::has('register'))
					<li><a href="{{ route('register') }}">Register</a></li>
					@endif
					@else
					<li><a href="#">Cadastrar Carros</a></li>
					<li><a href="#">Cadastrar Agencia</a></li>
					@csrf
					<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></li>
					
				</form>

				@endguest
			</ul>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
		</div>
	</div>
</div>
</header>