<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@domain.com')
                ->markdown('template.client.contactform')
                ->with([
                        'subject' => 'Pitanje',
                        'message' => $this->user['message'],
                        'email' => $this->user['email'],
                        'fullname' => $this->user['fullname'],
                    ]);
    }
}
