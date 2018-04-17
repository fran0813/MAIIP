@section('navbar')
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
        Usuarios <span class="caret"></span>
    </a>

    <ul class="dropdown-menu">
        <li class="text-left">
            <a href="{{ url('/superAdmin/activarUsuario') }}">Activar</a>
        </li>
    </ul>
</li>
@endsection

@section('authentication')
	<!-- Authentication Links -->
	@guest
	    <li><a href="{{ route('login') }}">Login</a></li>
	    <li><a href="{{ route('register') }}">Register</a></li>
	@else
	    <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
	            {{ Auth::user()->name }} <span class="caret"></span>
	        </a>

	        <ul class="dropdown-menu">
	            <li>
	                <a href="{{ route('logout') }}"
	                    onclick="event.preventDefault();
	                             document.getElementById('logout-form').submit();">
	                    Logout
	                </a>

	                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                    {{ csrf_field() }}
	                </form>
	            </li>
	        </ul>
	    </li>
	@endguest
@endsection