@extends('layouts.web')

@section('title', $service->title ?? '-')
@section('description', $service->meta_description ?? '-')
@section('canonical', $service->canonical ?? '-')





@section('content')
    {{-- Hero --}}

    <section class=" ">

        <div class="container py-4 lg:py-24 mx-auto">
            <div class="flex flex-col w-full px-0 md:px-12 ">
                <h6 class="text-4xl lg:text-7xl pb-9 font-medium title-font text-color-secondry text-center">
                    {{ $service->title }}</h6>


                        <div class="container mx-auto px-4 text-center items-center">
                            <div class="txt mt-20 text-center">

                                <div>
                                    <button class="bg-[#00536D] hover:bg-[#003241] text-white font-bold py-2 px-12 rounded mt-3">
                                        <a href="{{ route("order") }}" style="color:white;">GET A PERFECT CV</a>
                                    </button>
                                </div>
                            </div>
                            <!-- lOGO dIV -->
                            <div class="mt-8">
                                <img class="mx-auto" src="imgs/perfect-cv-reviews.png" alt="perfect-cv">
                            </div>
                            <!-- 5 section Text -->
                            <div class="grid grid-cols-2 lg:grid-cols-5 mt-14 justify-evenly mx-auto uppercase">
                                <!-- 1st -->
                                <div>
                                    <p class="font-semibold text-xl lg:text-2xl">
                                        Resume  <br>Writing
                                    </p>
                                </div>
                                <!-- 2nd -->
                                <div>
                                    <p class="font-semibold text-xl lg:text-2xl">
                                        COVER <br>LETTER
                                    </p>
                                </div>
                                <!-- 3rd -->
                                <div class="hidden lg:grid">
                                    <p class="font-semibold text-xl lg:text-2xl">
                                        LinkedIn  <br>LinkedIn Profile
                                    </p>
                                </div>
                                <!-- 4th -->
                                <div class="hidden lg:grid">
                                    <p class="font-semibold text-xl lg:text-2xl">
                                        Free Resume  <br>REVIEW
                                    </p>
                                </div>
                                <!-- 5th -->
                                <div class="hidden lg:grid">
                                    <p class="font-semibold text-xl lg:text-2xl ">
                                        ATS-Friendly  <br>RESumes
                                    </p>
                                </div>
                            </div>
                        </div>
                    
            </div>
        </div>
    </section>


    <hr class="h-1 w-7/12 mx-auto  mt-6">

    <div class="container mx-auto md:col-span-7 lg:col-span-8 flex-1 flex overflow-hidden my-4">
        @if (!empty($service))
            <div class="service-show-section flex-1 px-4">
                {!! $service->body !!}
            </div>
        @endif
    </div>

@endsection

