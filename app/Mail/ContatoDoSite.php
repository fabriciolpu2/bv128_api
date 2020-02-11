<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoDoSite extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    
    private $contato;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contato)
    {
        $this->contato = $contato;
        $this->subject('Contato - amplomed.com.br');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->contato['email'])
                    ->markdown('mail.contato')
                    ->with('contato', $this->contato);
    }
}
