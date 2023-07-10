<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Invoice;
use Illuminate\Http\Request;
use Stripe\StripeClient;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
    
        if ($request->query('reference')) {

            $invoice = Invoice::with('user')->where(['ref_no' => $request->query('reference')])->firstOrFail();

            if ( $invoice->status_id == 5 ) {
                return redirect()->route('order');
            }

            return view('pages.payment', compact('invoice'));

        }


        return abort(404);

    }


    public function charge(Request $request)
    {
        // return $request->all();

        $stripe = new StripeClient(config('services.stripe.secret'));

        $intent     = null;
        $invoice    = null;

        try {
            if ( isset($request->invoice_reference) ){
                $invoice = Invoice::where(['ref_no' => $request->invoice_reference, 'status_id' => 4 ])->firstOrFail();
            }
            if (isset($request->payment_method_id)) {
                # Create Customer
                // $this->customer = $stripe->customers->create([
                //     'name'              => $request->name,
                //     'email'             => $request->email,
                //     'description'       => 'Cheap Cv Writing Customer',
                // ]);

                # Create the PaymentIntent
                $intent = $stripe->paymentIntents->create([
                    'payment_method' => $request->payment_method_id,
                    'amount' => $invoice->amount,
                    'currency' => 'usd',
                    'confirmation_method' => 'manual',
                    'confirm' => true,
                    'metadata' => [
                        "invoice_id"    => $invoice->id,
                        "order_id"      => $invoice->order->id,
                        "user_id"       => $invoice->user->id,
                        "reference"     => $invoice->ref_no,
                        "source"        => "cheap-resume-writer",
                        "gateway"       => "stripe",
                    ]
                ]);

               


                $invoice->update(["status_id" => 5, "stripe_id" => $intent->id]);

            }

            if (isset($request->payment_intent_id)) {
                $intent = $stripe->paymentIn->retrieve( $request->payment_intent_id );
                $intent->confirm();
            }
            // Genrate Response
            if ( $intent->status == 'requires_action' && $intent->next_action->type == 'use_stripe_sdk' ) {
                # Tell the client to handle the action
                echo json_encode([
                    'requires_action' => true,
                    'payment_intent_client_secret' => $intent->client_secret
                ]);

            } else if ($intent->status == 'succeeded') {
                # The payment didn’t need any additional actions and completed!
                # Handle post-payment fulfillment
                echo json_encode([
                    "success" => true
                ]);
            } else {
                # Invalid status
                http_response_code(500);
                echo json_encode(['error' => 'Invalid PaymentIntent status']);
            }
        } catch (\Stripe\Exception\ApiErrorException $e) {
            # Display error on client
            echo json_encode([
                'error' => $e->getMessage()
            ]);
        }
    }
}
