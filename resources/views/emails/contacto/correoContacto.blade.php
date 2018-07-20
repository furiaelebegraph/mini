@component('mail::message')
# Hola, tienes un **correo nuevo** de

@component('mail::panel')
	{{$data['nombre']}}<br>
	{{$data['asunto']}}<br>
	{{$data['correo']}}<br>
	{{$data['mensaje']}}<br>
	{{$data['distribuidor']}}
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent