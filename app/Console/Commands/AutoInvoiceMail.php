<?php

namespace App\Console\Commands;

use App\Invoice;
use App\User;
use App\Mail\InvoiceRecallMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;

class AutoInvoiceMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:automail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto Inv Mail To Customer ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $invoices=Invoice::where('status_id',4)->get();

        // dd($invoice[0]->user_id);
        // return $invoice;
        // || 'auto_inv_mail_send', 1
        

        // $invoices_filter= array_filter($invoices);

        // if(!empty($invoices_filter)){
            // $users=User::where('id',$invoices[0]->user_id)->get();
            
            // dd($invoices);
            // if($invoices[0]->auto_mail== 0||1 ){
                // dd($users);
            
                foreach($invoices as $invoice){
                    
                    // dd($user->auto_inv_mail_send);
                    if($invoice->auto_mail<2){
                    $user=User::where('id',$invoice->user_id)->first();
                    Mail::to($user->email)->send(new InvoiceRecallMail($user,$invoice));
                    $inc_inv_count = $invoice->auto_mail;
                    $inc_inv_count++;
                    Invoice::where('id',$invoice->id)->update(['auto_mail' => $inc_inv_count] );
                    }
                }
            
            // }
        // }
        
        
        return 0;
    }
}
