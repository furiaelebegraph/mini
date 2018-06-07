<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mensajeUsuario extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Gracias por suscribirte a nuestro boletin Miniburbujas';
        return $this->markdown('emails.suscribir.mensajeusuario')->with(['data', $this->data])->from('info@miniburbujas.mx')->subject($subject);
    }
}
