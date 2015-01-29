@extends ('layout')
@section ('title') Saludos a @stop
@section ('content')

	@if($error == 1)
		<h1>Error: {{ strtoupper($msj) }} </h1>
	@elseif($error == 0)
		<h1>Hello Controlador! {{ strtoupper($carros) }} </h1>
	@endif

@stop