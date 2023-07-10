@extends('layouts.web')

@section('title', 'Pricing')
@section('description', 'Pricing')
@section('canonical', config('app.url') . Request::path())

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Pricing </h4>

            @include('partials.frontend.breadcrumb')

        </div>
    </div>
@endsection
@section('styles')
    <style>
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
        .tabs .active {
            color: white;
            background-color: #19BCBD;
        }
        #panels{
            text-align: center;
        }
    </style>
@endsection
@section('content')

    <section class="container mx-auto px-4 py-8">

        <div class="bg-white" class="">

            <p class="text-4xl text-[#176765] font-bold text-center mt-8">SORT BY:</p>

            <nav class="tabs flex flex-col md:flex-row justify-center md:space-x-4 my-8 mx-8">
                @foreach ($pricing as $key => $price)
                    <button data-target="panel-{{ $price->id }}" class="{{ $key == 0 ? 'active' : '' }}  tab py-2 px-6 block hover:bg-primary-one hover:text-white font-semibold text-xl focus:outline-none">
                        {{ $price->name }}
                    </button>
                @endforeach
            </nav>
        </div>

        <div id="panels" class="mx-4 lg:mx-32">
            @foreach ($pricing as $key => $price)
                <div class="panel-{{ $price->id }} tab-content py-5 {{ $key == 0 ? 'active' : '' }} ">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
                        @foreach ($price->fare as $key => $fare)

                            <div class="custom-css bg-white rounded shadow-xl border-2 border-primary-two my-4 w-[90%] mx-auto text-center space-y-1" >
                                <div class="bg-primary-two py-4">
                                    <h5 class="text-white text-3xl font-bold">{{ $price->name }}</h5>
                                    <p class="text-white text-lg "> {{ $fare->order_service->name }}</p>
                                </div>
                                <p class="text-5xl font-bold py-3 "><sup class="text-[50%]">AED</sup>{{  $fare->fare_amt }}</p>
                                <div class="text-center pt-6 pb-10">
                                    <a href="{{ route('order') }}" class="btn px-6"> Order Now </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
@section('scripts')
    <script>
        const tabs = document.querySelectorAll(".tabs");
        const tab = document.querySelectorAll(".tab");
        const panel = document.querySelectorAll(".tab-content");

        function onTabClick(event) {

            // deactivate existing active tabs and panel

            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active");
            }

            for (let i = 0; i < panel.length; i++) {
                panel[i].classList.remove("active");
            }


            // activate new tabs and panel
            event.target.classList.add('active');
            let classString = event.target.getAttribute('data-target');
            console.log(classString);
            document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
        }

        for (let i = 0; i < tab.length; i++) {
            tab[i].addEventListener('click', onTabClick, false);
        }
    </script>
@endsection
