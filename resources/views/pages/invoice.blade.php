@extends('layouts.web')

@section('title', 'Invoice')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

{{-- @section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Order Proceed </h4>
        </div>
    </div>
@endsection --}}
@section('content')

    <section>


        <div class="lg:mx-12 pb-4">
            <div class="container mx-auto px-4 pb-4">
                @if (session('userData'))
                    <div class="md:w-1/2 my-4 mx-auto bg-blue-100 border-t-4 border-blue-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                        role="alert">
                        <div class="flex">
                            <div class="py-1">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                    <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                                    <polyline
                                        style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                        points="
                38,15 22,33 12,25 " />
                                </svg>
                            </div>
                            <div>
                                <p class="text-center font-bold">{{ session('userData.userEmail') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <p class="text-4xl text-center   font-bold ">
                    Check Order Details Proceed With Payment
                </p>
                <hr class="border border-color-secondry bg-color-secondry w-full sm:w-48 h-[0.35rem] my-3 mx-auto">
            </div>
            <div class="mx-auto mt-10">
                <div class=" px-4 space-y-4">
                    <div class="border-2 border-color-primary rounded-2xl max-w-sm mx-auto" style="box-shadow: 0 0 5px 2px rgb(0 0 0 / 16%);">
                        <h4 class="py-2 text-xl text-center px-6 text-primary-two font-bold">Order Summary</h4>
                        <hr class="border-[2px]">
                        <ul class="my-2 space-y-1 ">
                            <li class="space-x-3 px-6"><span>Package:</span> <strong class="float-right">
                                    {{ $order->packageOrder->name }} </strong></li>
                            <li class="space-x-3 px-6"><span>Level:</span> <strong
                                    class="float-right">{{ $order->careerLevel->name }}</strong></li>
                            <li class="space-x-3 px-6"><span>deadline:</span> <strong
                                    class="float-right">{{ $order->deadlineOrder->name }}</strong></li>
                            <hr class="border-[2px]">
                            <li class="space-x-3 text-xl text-primary-two py-3 px-6"><strong>Total Amount:</strong><strong
                                    class="float-right ">{{ addCurrency($invoice->amount) }}</strong></li>
                           
                            
                        </ul>

                        <hr class="border-[2px]">



                        <div class="w-full px-6 py-4">
                            <a href="{{ url('https://checkout.cvwriters.ae/payment?reference=' . $invoice->ref_no . '&gateway=stripe&source=crw') }}"
                                class="btn block">
                                {{ 'Pay ' . addCurrency($invoice->amount) }}
                            </a>
                        </div>

                        <div class="flex flex-row justify-center space-x-6">
                            <img src="{{ asset('imgs/payments/professional-cv.png') }}" class="h-14 w-14">
                            <img src="{{ asset('imgs/payments/clutch.png') }}" class="h-14 w-14">
                            <img src="{{ asset('imgs/payments/top-rated.png') }}" class="h-14 w-14">
                        </div>

                        <p class="text-lg text-center my-4">We Accept</p>
                        <img src="{{ asset('imgs/payments/transactions.png') }}" class="mx-auto my-4">

                        {{-- <p class="text-lg text-center my-2 px-2">By proceeding to checkout you accept our</p>
                        <div class="text-blue-500 text-lg text-center mb-6">
                            <a href="{{ route('terms') }}">
                                Terms & Conditions
                            </a>
                        </div> --}}

                    </div>
                </div>
                {{-- <div class="sm:col-span-2 my-auto px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-6 lg:gap-x-10">
                        <div class="bg-color-secondry py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('imgs/payments/icon1.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">Affordable Rates</p>
                            <p>CV Writers AE offers excellent services in cheap prices without compromising on quality.</p>
                        </div>
                        <div class="bg-color-secondry py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('imgs/payments/icon2.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">Qualified Consultants</p>
                            <p>Team of skilled HR Managers, Recruiters and Outplacement Strategists with years of professional experience.</p>
                        </div>
                        <div class="bg-color-secondry py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('imgs/payments/icon3.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">Tailored Templates</p>
                            <p>Clean and industry specific templates to make CV presentable and eye catching for employers.</p>
                        </div>
                        <div class="bg-color-secondry py-6 px-4 text-white text-center rounded-2xl max-w-xs mx-auto space-y-2">
                            <img src="{{ asset('imgs/payments/icon4.png') }}" class="h-20 mx-auto">
                            <p class="text-lg font-semibold">ATS Friendly</p>
                            <p>ATS (Applicant Tracking System) friendly CV to make sure it gets the maximum reach.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

@endsection
