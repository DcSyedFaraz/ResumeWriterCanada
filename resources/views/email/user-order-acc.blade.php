@extends('vendor.mail.html.layout')

@section('content')

        <div class="container_style" >
            @if ($flag == true)
            <p>Hello!</p>
            <p style="font-weight:bold ;font-size:20px">{{ $user->name }}</p>
            <p>Greetings From {{ config('app.name') }}</p>
            <p>Your Account has been created successfully the following are your login credentials.</p>

            <p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center;color:black">Account Details</p>
            <table align="center">
                <tr>
                    <th
                        class="table_style">
                        email</th>
                    <td
                        class="table_style">
                        <strong>{{ $user->email }}</strong></td>
                </tr>
                <tr>
                    <th
                        class="table_style">
                        password</th>
                    <td
                        class="table_style">
                        <strong>{{ $password }}</strong></td>

                </tr>

            </table>


            <button class="btn_pri"  ><a href="{{ route('login') }}" style="color: white;">Login</a></button>
        @endif

        <p>Following are the details recieved for the order uploaded by you</p>

        <p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center; color:black">Order Details</p>
        <table align="center">

            <tr>
                <th class="table_style">
                    Name</th>
                <td class="table_style">
                    <strong>{{ $user->name }}</strong></td>
            </tr>
            <tr>
                <th class="table_style">
                    Email</th>
                <td class="table_style">
                    <strong>{{ $user->email }}</strong></td>
            </tr>
            <tr>
                <th class="table_style">
                    Phone</th>
                <td class="table_style">
                    <strong>{{ $order->phone }}</strong></td>
            </tr>
            <tr>
                <th class="table_style">
                    Career LeveL</th>
                <td class="table_style">
                    <strong>{{ $order->careerLevel->name }}</strong></td>

            </tr>
            <tr>
                <th class="table_style">
                    Package </th>
                <td class="table_style">
                    <strong> {{ $order->packageOrder->name }}</strong></td>

            </tr>

            <tr>
                <th class="table_style">
                    Deadline</th>
                <td class="table_style">
                    <strong>{{ $order->deadlineOrder->name }}</strong></td>

            </tr>

            <tr>
                <th class="table_style">
                    Detail</th>
                <td class="table_style">
                    <strong>{{ $order->detail }}</strong></td>

            </tr>

            <tr>
                <th class="table_style">
                    Total Cost</th>
                <td class="table_style">
                    <strong>{{ addCurrency($invoice->amount) }}</strong></td>
            </tr>



        </table>


        <button class="btn_pri"><a style="color: white" href="">Live
                Chat</a></button>
        <p>Kindly make the payment for the confirmation of your order</p>
        <button class="btn_pri"><a style="color: white" href="{{ route('invoice', ['reference' => $invoice->ref_no]) }}">Pay
                {{ addCurrency($invoice->amount) }}</a></button>
        <p>if you want to share more information or files related to your order , you can simply email us at
            {{ config('mail_from_address') }}</p>
        <p>For any further queries, feel free to contact us via email or Oneline Chat,</p>
        <p>Best Regards</p>
        <p>Customer Support,</p>
        <div style="text-align: left;margin-left:8px; margin-right: 8px;color:black">{{ config('app.name') }}</div>
        </div>

@endsection
