<?php 

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $message;

    public function __construct($token, $message)
    {
        $this->token = $token;
    }

    public function build()
    {
        return $this->from('noreply@laravel-crush.com')
                    ->subject('Nouveau message')
                    ->view('mail.new-message', ['token' => $this->token, 'message' => $this->message]);
    }
}
