@component('mail::message')
# Nueva Suscripcion boletin

{{$data['nombre']}} quiere ser agregado al boletin.

@component('mail::panel')
	Nombre: {{$data['nombre']}}<br>
	Edad: {{$data['edad']}}<br>
	Correo: {{$data['correo']}}<br>
	Genero: {{$data['genero']}}<br>
	¿Es Distribuidor? {{$data['distribuidor']}}<br>
	RFC: {{$data['rfc']}}<br>
	Num. Distribuidor: {{$data['numdistribuidor']}}<br>
@endcomponent

@endcomponent
