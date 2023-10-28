<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $question;

    public function __construct($name, $phone, $question)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->question = $question;
    }

    public function build()
    {
        return $this->view('email.Register', [
            'name' => $this->name,
            'phone' => $this->phone,
            'question' => $this->question,
        ]);
    }
}
