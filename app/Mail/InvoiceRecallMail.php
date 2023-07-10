<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceRecallMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $invoice;
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$invoice)
    {
        $this->invoice=$invoice;
        $this->user   =$user;  
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.invoice-recall')->subject(config('app.name') .' '. 'Payment Recall')->with(['user'=> $this->user,'invoice'=>$this->invoice]);
    }
}
