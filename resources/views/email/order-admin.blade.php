@extends('vendor.mail.html.layout')


@section('content')

<div class="container_style">
    <table align="center" >
        <tbody>
            <tr>
                <td>
                    <div>
                        # Order
    
                        {{ config('app.name')}}
    
                        <br>
                        <br>
                        <p><strong>  Career Level : {{$order->careerLevel->name}}</strong></p>
                        <br>
                        <p><strong>  Service Category : {{$order->packageOrder->name}}</strong></p>
                        <br>
                        <p><strong>  Deadline  : {{$order->deadlineOrder->name}}</strong></p>
                        <br>
                        <p><strong>  Detail : {{$order->detail}}</strong></p>
                        <br>
                        <p><strong>  Name : {{$user->name}}</strong></p>
                        <br>
                        <p><strong>  Email : {{$user->email}}</strong></p>
                        <br>
                        <p><strong>  Phone : {{$order->phone}}</strong></p>
    
                        <br>
                        <p><strong>  Total Cost :{{ $fare->fare .' '.'USD' }}</strong></p>
                        <br>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection



