<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InfoUserMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $row;
    public $totalItems;
    public $data;

    public function __construct($rows, $totalItems, $data)
    {
        $this->rows = $rows;
        $this->totalItems = $totalItems;
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('email.infoUser', [
            'rows' => $this->rows,
            'totalItems' => $this->totalItems,
            'data' => $this->data,
        ]);
    }
}
