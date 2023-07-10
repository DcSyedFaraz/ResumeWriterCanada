<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\InvoiceCollection;
use App\Http\Resources\Api\InvoiceResource;
use App\Http\Resources\Api\OrderCollection;
use App\Invoice;
use App\Status;
use App\Mail\PaymentPaidMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InvoiceApiController extends Controller
{

    public function index(Request $request)
    {
        $invoices = null;

        if( $request->query('status') ){
            $status = Status::where('slug', '=', $request->query('status') )->firstOrFail();
            $invoices = Invoice::where(['status_id' => $status->id])->with('order', 'user', 'status')->orderBy('created_at','desc')->get();
        } else {
            $invoices = Invoice::with('order', 'user', 'status')->orderBy('created_at','desc')->get();
        }

        return InvoiceResource::collection($invoices)
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function show(Invoice $invoice)
    {
        $invoice->load('user', 'status', 'order', 'order.careerLevel', 'order.orderService', 'order.deadlineOrder','order.packageOrder');

        return (new InvoiceResource($invoice))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

     public function update(Request $request, Invoice $invoice)
    {
        $invoice->load('user', 'order', 'status');

        $invoice->update($request->all());

        if($invoice->status_id==5){
            Mail::to($invoice->user->email)->send(new PaymentPaidMail($invoice));
            Mail::to(env('MAIL_FROM_ADDRESS','info@cheapresumewriter.com'))->send(new PaymentPaidMail($invoice));
        }    
        
        return (new InvoiceResource($invoice))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function store(Invoice $invoice){
        return(new InvoiceResource($invoice))->reponse()->setSatusCode(Response::HTTP_OK) ;

    } 

}
