<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Order;

class OrderAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;
    protected $user;
    protected $fare;
    protected $attachmentsPath;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $order, $files,$user,$fare)
    {
        $this->order = $order;
        $this->user = $user;
        $this->fare = $fare;
        $this->attachmentsPath = $files;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->markdown('email.order-admin')->subject(config('app.name').' '.  'Order Confirmation')->with(["order" => $this->order,'user' => $this->user,'fare'=> $this->fare]);

        foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

        return $email;  

       
    }
}
