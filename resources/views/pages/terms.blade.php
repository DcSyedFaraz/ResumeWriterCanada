@extends('layouts.web')

@section('title', 'Term & Conditions')
@section('description', 'Term & Conditions')
@section('canonical', config('app.url') . Request::path() )

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Term & Conditions </h4>

            @include('partials.frontend.breadcrumb')

        </div>
    </div>
@endsection
@section('content')
    <section class="container py-8 px-4 md:px-32 mx-auto">
        <div class="space-y-6 text-[#333]">

            <p class="">
                By using our services or entering our website you agree on our terms of use and services policies whether you confirm it or not through any action.
            </p>

            <div class="space-y-2">
                <h4 class="text-primary-one text-xl uppercase font-bold"> <i class="text-xl text-primary-one font-bold fa fa-check pr-3"></i>  Pricing</h4>
                <p class="ml-10">
                    We have mentioned our prices clearly and we expect you to understand and accept it before placing an order
                </p>
            </div>

            <div class="space-y-2">
                <h4 class="text-primary-one text-xl uppercase font-bold"> <i class="text-xl text-primary-one font-bold fa fa-check pr-3"></i>  DELIVERY TIME </h4>
                <p class="ml-10">
                    We request our customers to set an appropriate delivery time so that it can be easy for us to schedule your CV or resume.
                </p>
            </div>

            <div class="space-y-2">
                <h4 class="text-primary-one text-xl uppercase font-bold"> <i class="text-xl text-primary-one font-bold fa fa-check pr-3"></i>  REVISION TIME </h4>
                <p class="ml-10">
                    Mostly we always give a draft of your CV first so a customer can review and grasp an idea that what he/she is looking for just after that we set your CV for Quality assurance. This is the reason revision time may take 3-5 days.
                </p>
            </div>

            <div class="space-y-2">
                <h4 class="text-primary-one text-xl uppercase font-bold"> <i class="text-xl text-primary-one font-bold fa fa-check pr-3"></i>  NUMBER OF REVISIONS</h4>
                <p class="ml-10">
                    Customer should thoroughly go through resume at first time because we only accept the application for revision for two times after that we are unable to process your request.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-primary-two py-8 px-4 md:px-32 ">
        <div class="container space-y-6 mx-auto">
            <p class="text-[#BCBCBD] text-center">Get your dream job with CV writer UAE, we will present all your achievements, career experience, expertise, and skills in a way that the employer would get an idea in just a glance. Trust our certified professional and reach your next dream job station on time!</p>
            <p class="text-3xl text-primary-one font-bold text-center">Secure Your Target Job NOW!</p>
        </div>
    </section>

    @include('partials.frontend.reason-to-use')

@endsection
