@extends('layouts.web')
@section('title', 'Order Now')
@section('description')
@section('canonical', config('app.url') . Request::path())

@section('content')
    <div id="msg-bag" class="my-4"></div>

    <section class=" bg-bgOurWriters bg-no-repeat bg-center bg-cover">

        <h1 class="text-xl md:text-4xl font-medium text-white py-3 text-center">Order Now</h1>
        <hr class="w-1/5 h-2 bg-primary mx-auto">
        @if (session('success'))
            <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                            style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                            <polyline
                                style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                points="
                    38,15 22,33 12,25 " />
                        </svg>
                    </div>
                    <div>
                        <p class="text-center font-bold">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <form id="order-form" action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 mt-2">

                <div class=" p-5   ">
                    <span class="space-y-4"></span>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Career Levels:</label>
                        <select name="career_level" id="career_level"
                            class="get-fare form-select">
                            <option hidden="" value="0" disabled="" selected="">Career Level</option>
                            @foreach ($career_levels as $career_level)
                                <option {{ old('career_level') == $career_level->id ? 'selected' : '' }}
                                    value="{{ $career_level->id }}">{{ $career_level->name .' '.$career_level->duration}}</option>
                            @endforeach
                        </select>
                        @error('career_level')
                            <p class="text-red-900 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Select Services:</label>
                        <select name="package" id="package"
                            class="get-fare form-select">
                            <option hidden="" value="0" disabled="" selected="">Select Service</option>
                            @foreach ($packages as $package)
                                <option {{ old('package') == $package->id ?  'selected' : '' }}  value="{{ $package->id }}">{{ $package->name }}</option>
                            @endforeach
                        </select>
                        @error('package')
                            <p class="text-red-900 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Deadline:</label>
                        <select id="deadline" name="deadline"
                            class="get-fare form-select">
                            <option hidden="" value="0" disabled="" selected="">Deadline</option>
                            @foreach ($deadlines as $deadline)
                                <option {{ old('deadline') == $deadline->id ? 'selected' : '' }}
                                    value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                            @endforeach
                        </select>
                        @error('deadline')
                            <p class="text-red-900 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- if($fares==cost){
                        <input name="fare" value={{  }} type="hidden">
                    } --}}


                    <div class="grid grid-cols-2 text-primary font-bold text-4xl my-2">
                        <span class="col-span-1">Total:</span><span><span id="cost">0</span>$</span>
                        {{-- <svg class="inline-block "
                                    width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"
                                    stroke="#000000">
                                    <g transform="rotate(0 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(30 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(60 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.75s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(90 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(120 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(150 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.5s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(180 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(210 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(240 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.25s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(270 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(300 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                                                begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(330 50 50)">
                                        <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s"
                                                repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                </svg> --}}
                    </div>



                </div>

                <div class=" p-5  ">
                    <span class=" space-y-4"></span>

                      @if(auth()->user())


                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Full Name*</label>
                        <input type="text" name="name"
                            class="form-input"
                            placeholder="Full Name" value="{{ auth()->user() ? auth()->user()->name : old('name','') }}" readonly>
                        @error('name')
                            <p class="text-red-900 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Email*</label>
                        <input type="email" name="email"
                            class="form-input "
                            placeholder="Email" value="{{ auth()->user() ? auth()->user()->email : old('email','')   }}" readonly>
                        @error('email')
                            <p class="text-red-900 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    @else
                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Full Name*</label>
                        <input type="text" name="name"
                            class="form-input"
                            placeholder="Full Name" value="{{ auth()->user() ? auth()->user()->name : old('name','') }}" >
                        @error('name')
                            <p class="text-red-900 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Email*</label>
                        <input type="email" name="email"
                            class="form-input"
                            placeholder="Email" value="{{ auth()->user() ? auth()->user()->email : old('email','')   }}" >
                        @error('email')
                            <p class="text-red-900 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    @endif

                    <div class="w-full space-y-2">
                        <label class="text-white font-semibold">Phone Number*</label>
                        <input type="text" name="" id="phone"
                            class="form-input"
                            placeholder="Phone" value="{{ old('phone', '') }}"
                            oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                            data-intl-tel-input-id="0">
                        <input type="hidden" name="phone" id="phone2" />
                        @error('phone')
                            <p class="text-red-900 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class=" p-5 ">
                    <span class="space-y-4"></span>

                    <div class="w-full md:col-span-2 space-y-2">
                        <label class="text-white font-semibold">Career document instructions</label>
                        <textarea name="detail" rows="5"
                            class=" form-input "
                            placeholder=" {{ old('detail' , 'Type details here...') }} " ></textarea>
                        @error('detail')
                            <p class="text-red-900 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full">
                        <input
                            class="block w-full cursor-pointer text-gray-700  border-2 border-dotted border-color-primary focus:outline-none focus:border-transparent text-sm rounded-xl p-2 "
                            accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar"
                            aria-describedby="email_attacements_help" id="email_attacements" name="emailAttachments[]"
                            type="file" multiple="">
                        @if ($errors->has('emailAttachments.*'))
                            @foreach ($errors->get('emailAttachments.*') as $message)
                                <p class="text-red-900 text-sm">{{ $message[0] }}</p>
                            @endforeach
                        @elseif(session('message'))
                            <p class="text-red-900 text-sm">{{ session('message') }}</p>
                        @endif

                    </div>

                    {{-- <div class="form-check">
                        <input
                            class="form-check-input h-4 w-4 border border-gray-300 rounded-sm  checked:bg-blue-900 checked:border-blue-900 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                            I Agree To <a href="#" class="underline">Terms And Conditions</a>
                        </label>
                    </div> --}}

                    <div class="w-full text-center mt-4">
                        <button type="submit" class="group relative inline-flex  focus:outline-none">
                            <span id="btn-submit"
                                class="btn-one">
                                Order Now
                            </span>
                        </button>
                    </div>


                </div>

            </div>
        </form>
    </section>


@endsection

@section('scripts')

    {{-- country phone codes --}}
    <script>

        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["ca"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            $("#order-form").submit(function() {
                $('#order-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submitting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                // return true;
            });

            $(".get-fare").change(function() {


                const fares = @json($fares);
                const career_level    = $('#career_level').val();
                const deadline          = $('#deadline').val();
                const package       =$('#package').val();

                fares.forEach(fare => {
                if (deadline == fare.day_model_id && career_level == fare.career_level_id && package == fare.package_id) {
                    $('#cost').html(fare.fare);

                    // <input type="hidden" value="fare.fare" name="fare_id">
                }
            });

            });
        });


    </script>
@endsection
