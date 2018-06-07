@component('mail::message')
# ¡Hola! {{$data['nombre']}}

Muchas gracias por suscribirte a nuestro boletín. <br>

{{ config('app.name') }}
@endcomponent
