<div class="container mx-auto px-4" >
    <nav>
    <div x-data="{ open: false }" class="flex flex-col px-4 mx-auto xl:items-center  xl:flex-row  xl:px-8 xl:space-x-2">
        <div class="p-4 flex flex-row items-center justify-between">
            <a class="flex items-center py-4 px-2" href="{{ route('home') }}">
                <img src="{{ asset('imgs/logo.svg') }}" alt="Logo" class=" mt-3">
            </a>
            <button class="xl:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

            <div :class="{ 'flex': open, 'hidden': !open }"
                class="hidden flex-col xl:flex xl:flex-row lg:space-x-52    space-y-4 lg:space-y-0   pb-4 md:pb-0   ">

                <div class="flex flex-col xl:flex-row" >
                    <a href="{{ route('home') }}" class=""><i class="fa fa-envelope mr-1"></i>{{ config('mail.from.address') }}</a>
                    {{-- <a href="{{ route('home') }}" class="xl:ml-2"><i class="fa fa-phone mr-1"></i>{{ $web_setting->contact }}</a> --}}

                </div>


                <div class="xl:mx-auto justify-between ml-7">

                    <ul class="flex flex-col xl:flex-row space-y-2 xl:space-y-0 xl:space-x-4 font-bold">
                        <a href="{{ route('home') }}" class="">Home</a>

                        <a href="{{ route('about') }}" class="">About</a>

                        <div @click.away="open = false" class="relative  " x-data="{ open: false }">
                            <button @click="open = !open" class=" ">
                                <span class="font-bold">Services</span>
                                <svg fill="currentColor" viewBox="0 0 20 20"
                                    :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                    class="inline w-4 h-4  transition-transform duration-200 transform md:-mt-1">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="hidden absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-56 z-40"
                                :class="{ 'hidden': !open }">

                                <div class=" py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                  @if($services)
                                    <ul class="space-y-2">
                                    @foreach ($services as $service)
                                        <li><a class="px-4" href="{{ $service->slug }}">{{ $service->name }}</a></li>
                                    @endforeach
                                    <ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <a href="" class="">Blog</a>
                        <a href="{{ route('contact') }}" class="">Contact</a>
                        <a href="{{ route('order') }}" class="xl:animate-wiggle  hover:animate-none">
                           <span  class="border-2 px-4 rounded-lg border-primary-one py-1 "> Order Now </span>
                        </a>
                        <a href="{{ route('login') }}" class="">
                            Login
                        </a>


                    </ul>
                </div>

            </div>






        </nav>

    </div>
</div>
