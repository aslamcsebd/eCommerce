<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mail_request;
    public function __construct($all_request)
    {
      $this->mail_request = $all_request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){

      return $this->view('email/contact_message_mail');
    }
}
