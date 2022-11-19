<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerContact extends Mailable
{
    use Queueable, SerializesModels;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    public function build(){
        $msg = $this->msg;
        return $this->markdown('emails.contact', compact('msg'));
    }
}
