<section class="container py-4 px-4 md:px-24 mx-auto">

    <p class="text-4xl text-primary-two font-bold text-center py-6">REASON TO USE OUR SERVICES</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:space-x-4 gap-y-4 lg:gap-y-0">

        <div class="border-2 group hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl p-4 space-y-4 text-center">
            <img src="{{asset('imgs/icon1.png')}}" class="mx-auto h-16">
            <h4 class="text-lg text-primary-two group-hover:text-primary-one font-bold">CUSTOMER SUPPORT SERVICE</h4>
            <p class="group-hover:text-white">24/7 customer support that allows customers to get the answer to their queries immediately</p>
        </div>

        <div class="border-2 group hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl p-4 space-y-4 text-center">
            <img src="{{asset('imgs/icon2.png')}}" class="mx-auto h-16">
            <h4 class="text-lg text-primary-two group-hover:text-primary-one font-bold">APPLICANT TRACKING SYSTEM</h4>
             <p class="group-hover:text-white">We make resume based on matching keywords of targeted job that allows employers to search you through software quickly.</p>
        </div>

        <div class="border-2 group hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl p-4 space-y-4 text-center md:col-span-2 lg:col-span-1">
            <img src="{{asset('imgs/icon3.png')}}" class="mx-auto h-16">
            <h4 class="text-lg text-primary-two group-hover:text-primary-one font-bold">GIVE IT A PERFECT STRUCTURE</h4>
             <p class="group-hover:text-white">Based on your professional experience, we create a proper structure that can help employers to grasp an overview of your profile instantly.</p>
        </div>

    </div>

    <div class="text-center mt-6">
        <a href="{{route('order')}}" class="btn px-6">
            Get Your Pro CV Now
        </a>
    </div>

</section>
