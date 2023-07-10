@extends('vendor.mail.html.layout')


@section('content')
    <div class="container_style">
        <table align="center">
            <tbody >
                <tr>
                    <td>
                        <div>
                <tr><span> Greetings from {{ config('app.name') }},</span></tr>
                <br>
                <br>
                <tr ><span>Thank you for reaching out! We have successfully received your query. Please make sure the following
                    details are correct.</span></tr>
                <br>
                <br>
                <tr><p style="text-align: center ; font-size:30px; color:black">Client’s Information:</p></tr>
                <hr>

                <tr>
                    <th class="table_style">Name</th>
                    <td class="table_style"><strong> {{ $contact->name }}</strong></td>
                </tr>

                <tr>
                    <th class="table_style">Email</th>
                    <td class="table_style"><strong> {{ $contact->email }}</strong></td>
                </tr>

                <tr>
                    <th class="table_style">Number</th>
                    <td class="table_style"><strong> {{ $contact->phone }}</strong></td>
                </tr>

                <tr>
                    <th class="table_style">Subject</th>
                    <td class="table_style"><strong> {{ $contact->subject }}</strong></td>
                </tr>

                <tr>
                    <th class="table_style">Detail</th>
                    <td class="table_style"><strong> {{ $contact->detail }}</strong></td>
                </tr>


    
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
@endsection
