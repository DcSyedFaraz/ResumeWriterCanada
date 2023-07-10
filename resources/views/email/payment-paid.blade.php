@extends('vendor.mail.html.layout')

@section('content')
    <div class="container_style">
        <table >
            <tbody>
                <tr>
                    <td>
                        <span>You have successfully paid the payment {{ $invoice->amount.'$' }} .</span>
                        <span>Sign in to your account to check the order status </span>



                        <button><a class="btn_pri"  href="{{ route('login') }}">
                                {{ __('Login') }}</a></button>




                        <span>Best Regards</span>
                        <span>Customer Support,</span>
                        <span>{{ config('app.name') }}</span>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
