{{-- Inicio --}}
<div class="col-sm-12 col-md-12 col-lg-12">

	<br>

	{{-- Logo MAIIP  --}}
	<div class="col-sm-3 col-md-3 col-lg-3" style="padding-top: 15px;">
		<center><img class="img-responsive" src="{{ asset('img/logo.png') }}" alt="No found" width="60%"></center>
	</div>

	{{-- Nombre del proyecto --}}
	<div class="col-sm-5 col-md-5 col-lg-5 text-namep">
		<p><b>MODELO ALTERNATIVO DE INCLUSIÓN E INNOVACIÓN PRODUCTIVA</b></p>
	</div>

	{{-- Logo universidad --}}
	<div class="col-sm-3 col-md-3 col-lg-3" style="padding-top: 15px;">
		<center><img class="img-responsive" src="{{ asset('img/logou.png') }}" alt="No found" width="70%"></center>	
	</div>
	
</div>

{{-- Navbar --}}
<div class="col-sm-12 col-md-12 col-lg-12" style="padding-left: 0;padding-right: 0;">

	<br>
	
	<nav class="navbar navbar-default">

	  	<div class="container-fluid">

		    <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#idnavbar" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
		    </div>

		    <div class="collapse navbar-collapse" id="idnavbar">
		    	<ul class="nav navbar-nav">

		    		@yield('active')
		    		
		    	</ul>
		    </div>
	    
	  	</div>

	</nav>

</div>