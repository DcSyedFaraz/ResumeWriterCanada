@extends('email.layouts.layout')

@section('content')
    <div class="container_style">
        <p>Kindly make the payment for the confirmation of your order</p>
        <button><a style="color: white" href="{{ route('invoice', ['reference' => $invoice->ref_no]) }}">Pay
                {{ addCurrency($invoice->amount) }}</a></button>
        <p>if you want to share more information or files related to your order , you can simply email us at
            {{ config('app.mail_from_address') }}</p>
        <p>For any further queries, feel free to contact us via email or Online Chat,</p>
        <p>Best Regards</p>
        <p>Customer Support,</p>
        <p>{{ config('app.name') }}</p>
    </div>
@endsection
