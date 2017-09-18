<div class="panel panel-primary">
	<div class="panel-heading">Menu</div>

	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			@if (auth()->check())
  			@if(auth()->user()->role ==0)
  			 <li @if(request()->is('register')) class="active" @endif ><a href="{{ route('register') }}">Registrar Escuela</a></li> 
  			 <li @if(request()->is('usuarios')) class="active" @endif ><a href="{{url('/usuarios')}}">Consultar Escuelas Registradas</a> </li>
  			@endif

  			@if(auth()->user()->role==1)
  			<li @if(request()->is('pacientes')) class="active" @endif ><a href="{{url('/pacientes')}}">Registerar Pacientes</a></li> 
        <li @if(request()->is('consultarPacientes')) class="active" @endif ><a href="{{url('/consultarPacientes')}}">Consultar/Modificar Pacientes</a> </li>
     
        @if(auth()->user()->role==1)
        <li @if(request()->is('recetasPacientes')) class="active" @endif ><a href="{{url('/recetasPacientes')}}">Receta</a></li>
        @endif

        @if(auth()->user()->role==1)
        <li @if(request()->is('historialRecetas')) class="active" @endif ><a href="{{url('/historialRecetas')}}">Historial De Recetas</a></li>
        @endif
      @endif
			@else
			<p class="text-warning"> Es necesario logear,Si tiene algun problema contactar al administrador admin@hotmail.com </p>
			@endif
		</ul>
	</div>
</div>