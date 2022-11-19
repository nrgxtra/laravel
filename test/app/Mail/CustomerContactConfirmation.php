<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerContactConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $ccMsg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ccMsg)
    {
        $this->ccMsg = $ccMsg;
    }

    public function build(){
        $msg = $this->ccMsg;
        return $this->markdown('emails.contact_confirm', compact('msg'));
    }
}
