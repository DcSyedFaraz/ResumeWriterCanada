@extends('vendor.mail.html.layout')


@section('content')
<div class="container_style">
    <table align="center">
        <tbody>

             <tr>   <span>Greetings from {{ config('app.name') }} </span></tr>

                <br>
                <br>
                <tr><p style="font-size:30px; color-black; text-align:center; color:black">Account Details</p></tr>
                <br>
                <br>

                <hr>
                <tr>
                    <th
                        class="table_style">
                        Email</th>
                    <td
                        class="table_style">
                        <strong>{{ $user->email }}</strong></td>
                </tr>

                <tr>
                    <th
                        class="table_style">
                        Password</th>
                    <td
                        class="table_style">
                        <strong>{{ $password }}</strong></td>

                </tr>
                
                
            </div>
        </tbody>
    </table>
</div>
@endsection

