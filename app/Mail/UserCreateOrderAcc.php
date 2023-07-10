<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserCreateOrderMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $order;
    protected $user;
    protected $fare;
    protected $password;
    protected $flag;
    protected $invoice;
    protected $attachmentsPath;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->user = $data['user'];
        $this->password = $data['password'];
        // $this->fare = $data['fare'];
        $this->attachmentsPath = $data['files'];
        $this->order = $data['order'];  
        $this->flag=$data['flag'];
        $this->invoice=$data['invoice']
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->markdown('email.user-order-acc')->subject(config('app.name'))->with(['user' => $this->user,'password' => $this->password ,'order' => $this->order,'flag'=>$this->flag,'invoice'=>$this->invoice]);

        
          foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

        return $email;

    }
}
