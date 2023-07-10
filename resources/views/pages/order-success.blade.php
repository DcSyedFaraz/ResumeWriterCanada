@extends('layouts.web')

{{-- @section('title', 'Assignment Help – Cheap Assignment Writing Service in UK') --}}
{{-- @section('description', 'A UK Based Writing Firm Providing Best And Cheap Assignment Writing Service to All The University Students With The Team of British Writers Available 24/7.') --}}
{{-- @section('canonical', config('app.app_url') . Request::path()) --}}

@section('content')

    <section class="container mx-auto">
        <div class="m-4 grid lg:grid-cols-6">
            <div class="lg:col-start-2 lg:col-span-4 bg-gradient-to-r from-primary-one to-primary-one text-white py-3 px-7 rounded-t-lg">
                <p class="font-bold title-font text-center text-2xl ">Thank you for choosing Us</p>
            </div>
            <div class=" lg:col-start-2 lg:col-span-4 bg-white shadow-md rounded-b-lg p-5 border border-gray-300 overflow-x-auto">
                {{-- <table class="min-w-full text-center">
                    <thead class="border-b">
                        <tr class="text-red-600">
                            <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Order ID
                            </th>
                          
                            <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Deadline
                            </th>
                            <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Place at
                            </th>
                            <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Status
                            </th>
                            <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Charges
                            </th>
                        </tr>
                    </thead class="border-b">
                    <tbody>
                        <tr class="bg-white border-b text-base">
                            <td>{{ '#' . $order->id ?? '-' }}</td>
                           
                            <td>{{ $order->deadline ?? "-" }}</td>
                            <td>{{ showDate($order->created_at) ?? '-' }}</td>
                            <td>
                                @if ($order->is_complete)
                                    {{ 'Completed' }}
                                @else
                                    {{ 'Incomplete' }}
                                @endif
                            </td>
                            <td>{{ addCurrency($order->total_price) ?? '-' }}</td>
                        </tr>
                    </tbody>
                </table> --}}
               
            </div>
        </div>

    </section>

@endsection
