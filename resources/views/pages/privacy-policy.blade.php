@extends('layouts.web')

@section('title', 'Privacy Policy')
@section('description', 'Privacy Policy')
@section('canonical', config('app.url') . Request::path() )

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Privacy Policy </h4>

            @include('partials.frontend.breadcrumb')

        </div>
    </div>
@endsection
@section('content')

    <section class="container py-8 px-4 md:px-32 mx-auto">
        <div class="space-y-6 text-[#333]">
            <ul class="text-[#333] text-lg space-y-6">
                <li>
                    <i class="fa fa-check-circle text-primary-two text-xl" aria-hidden="true"></i>
                    The content of this website is 100% original and you are not allowed to copy or paste the content of our website for any of personal or professional reasons otherwise we hold the right to sue.
                </li>
                <li>
                    <i class="fa fa-check-circle text-primary-two text-xl" aria-hidden="true"></i>
                    We ask our customers to carefully use the services and follow the requirements, so things won’t cause any disturbance.
                </li>
                <li>
                    <i class="fa fa-check-circle text-primary-two text-xl" aria-hidden="true"></i>
                    We assure our customers that their privacy is maintained strictly and whatever information they share with us is only communicated to the writer
                </li>
                <li>
                    <i class="fa fa-check-circle text-primary-two text-xl" aria-hidden="true"></i>
                    If there are details or certain questions asked by the employers than those are only for purpose of making a comprehensive CV in the most professional way. We request of customer to corporate with our writers and customer service agent in providing right and detailed information
                </li>
            </ul>
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
