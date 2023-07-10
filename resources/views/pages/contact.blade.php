@extends('layouts.web')
@section('title','contact us')
@section('description')
@section('canonical', config('app.url'). Request::path() )

@section('content')
    <section class="container mx-auto">

        <div class="grid grid-col-1 sm:grid-cols-6 my-4 ">
            <div class="col-span-6 lg:col-start-2 lg:col-span-4">
                <div class="bg-primary py-2 px-5 rounded-t-lg">
                    <p class="text-2xl text-white text-center">Contact Us for any Query</p>
                </div>
              
                <div class="bg-white shadow-md rounded-b-lg p-5 border border-gray-600 ">
                    <div id="msg-bag"></div>
                    <form id="contact-form" class="grid grid-cols-1 md:grid-cols-2 gap-x-2 gap-y-2"
                        action="{{ route('contact.store') }}" method="POST" >

                        @csrf
                        <h4
                            class="md:col-span-2 text-xl text-primary font-bold uppercase pb-2 mb-2 border-b border-primary">
                            Personal Details
                        </h4>
                        <div class="w-full">
                            <input type="text" name="name"
                                class="w-full text-gray-700 rounded border border-gray-500 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-black @error('name') border-red-500 @enderror  "
                                placeholder="Full Name " value="{{ old('name', '') }}">
                            @error('name')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input type="email" name="email"
                                class="w-full text-gray-700 rounded border border-gray-500 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-black @error('email') border-red-500 @enderror  "
                                placeholder="Email" value="{{ old('email' , '') }}">
                            @error('email')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input type="text" name="subject"
                                class="w-full text-gray-700 rounded border border-gray-500 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-black @error('subject') border-red-500 @enderror "
                                placeholder="Subject" value="{{ old('subject','') }}">
                            @error('subject')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full">
                            <input type="tel" name="Phone" id="phone"
                                class="w-full text-gray-700 rounded border border-gray-500 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-black @error('phone') border-red-500 @enderror "
                                placeholder="Phone Number" value="{{ old('phone', '') }}"
                                oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                                data-intl-tel-input-id="0">
                                <input type="hidden" name="phone" id="phone2" />
                            @error('phone')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full md:col-span-2">
                            <textarea name="detail" rows="5" class=" w-full text-gray-700 rounded border border-gray-500 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-black @error('detail') border-red-500 @enderror "
                                placeholder="{{ old('detail','Type details here...') }}"></textarea>
                            @error('detail')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2 text-center mt-4">
                            <button type="submit" class="group relative inline-flex  focus:outline-none">
                                <span id="btn-submit"
                                    class="shadow-lg bg-color-secondry hover:bg-color-primary text-white rounded-md py-3 px-4 font-semibold transition duration-300">
                                    Submit
                                </span>
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </section>
@endsection

@section('scripts')
     <script>
        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["ca"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                $.ajax({
                    url: "{{ route('contact.store') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('#contact-form').serialize(),
                    beforeSend: function() {
                        $(".contact-form-error").empty();
                        $('#contact-form').find(':submit').attr("disabled", true);
                        $('#btn-submit').html("Submitting...");
                    },
                    complete: function() {
                        $('#contact-form').find(':submit').attr("disabled", false);
                        $('#btn-submit').html("SUBMIT");
                    },
                    success: function(res) {

                       // console.log(res)

                        $('#msg-bag').empty();

                        let msg ='<div class="bg-green-100 border w-[80%] text-center left-[10%] border-blue-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">';
                        msg += '<strong class="font-bold">Success!</strong>';
                        msg += '<span class="block sm:inline">' + res.success + '</span>';
                        msg += '</div>';

                        $('#msg-bag').append(msg);

                        $(':input', 'form')
                            .not(':button, :submit, :reset, :hidden')
                            .val('')
                            .prop('checked', false)
                            .prop('selected', false);
                    },
                    error: function(err) {
                        // console.log(err);
                        if (err.status == 422) {

                            $('#msg-bag').empty();

                            let msg =
                                '  <div class=" left-[30%] bg-red-100 border w-[40%] border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-center" role="alert">';
                            msg += '    <strong class="font-bold ">Error!</strong>';
                            msg += '    <span class="block sm:inline">Invalid Data</span>';
                            msg += ' </div>';

                            $('#msg-bag').append(msg);

                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $('#contact-form').find('[name="' + i + '"]');
                                el.after($('<span class="contact-form-error text-red-700">' +
                                    error[0] + '</span>'));
                            });

                            $('.contact-form-error').delay(2000).fadeOut();
                        } else {
                            $('#msg-bag').empty();
                            let msg =
                                '  <div class=" left-[30%] bg-red-100 border w-[40%] border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-center" role="alert">';
                            msg += '    <strong class="font-bold ">Error!</strong>';
                            msg += '    <span class="block sm:inline">Server Error</span>';
                            msg += ' </div>';

                            $('#msg-bag').append(msg);

                        }

                    },
                });
            });
        });
    </script> 
@endsection
