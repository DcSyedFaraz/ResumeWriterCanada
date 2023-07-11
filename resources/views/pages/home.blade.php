@extends('layouts.web')
@section('title','Canada’s #1 Resume Writing Service – Trusted Resume Writers')
@section('description','The top-rated Professional Resume writing service in Canada. Hire our Certified Resume Writers in Canada and find the job you deserve! Live Help from Experts.')
@section('canonical', config('app.url'))

@section('content')
    <!-- Hero Section -->
    <section class="overflow-hidden">
        <div class="container mx-auto px-4 text-center items-center">
            <div class="txt mt-20 text-center">
                <h1 class="text-3xl lg:text-5xl text-[#293241] font-bold font-mon">
                    Best <span class="text-red-600">Resume Writing</span> Services <br>In Canada<br>

                </h1>
                <p class="text-sm md:text-base font-light mt-2">
                    Win your dream job in the first impression. <br>Get Ats-Friendly, Career-Specific Resumes by Experts.

                </p>
                <div>
                    <button class="bg-[#00536D] hover:bg-[#003241] text-white font-bold py-2 px-12 rounded mt-3">
                        <a href="{{ route("order") }}" style="color:white;">GET A PERFECT RESUME</a>
                    </button>
                </div>
            </div>
            <!-- lOGO dIV -->
            <div class="mt-8">
                <img class="mx-auto" src="imgs/perfect-cv-reviews1.svg" alt="perfect-cv">
            </div>
            <!-- 5 section Text -->
            <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 mt-14 justify-evenly mx-auto uppercase">
                <!-- 1st -->
                <div>
                    <p class="font-semibold text-xl lg:text-xl">
                        Resume Writing
                    </p>
                </div>
                <!-- 2nd -->
                <div>
                    <p class="font-semibold text-xl lg:text-xl">
                        COVER LETTER
                    </p>
                </div>
                <!-- 3rd -->
                <div class=" ">
                    <p class="font-semibold text-xl lg:text-xl">
                         LinkedIn Profile
                    </p>
                </div>
                <!-- 4th -->
                <div class=" ">
                    <p class="font-semibold text-xl lg:text-xl">
                        Free Resume REVIEW
                    </p>
                </div>
                <!-- 5th -->
                <div class=" ">
                    <p class="font-semibold text-xl lg:text-xl ">
                        ATS-Friendly Resumes
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Accordion Section -->
    <section class="bg-[#F9F7F7] overflow-hidden mt-16 pb-8">
        <div class="container mx-auto px-4">
            <!-- Text Div -->
            <div class="txt pt-8">
                <h4 class=" text-2xl lg:text-3xl text-[#293241] font-bold">
                    Get a Custom CV from the Leading   <span class="text-red-600">Resume Writing Services </span>   at Affordable Prices
                </h4>
            </div>
            <!-- Grid start -->
            <div class="grid grid-cols-1 lg:grid-cols-2 mt-6 xl:px-20">
                <!-- Grid 1 of chat  -->
                <div>

                    <!-- Grid for chat messages -->
                    <div class="messagebox lg:space-y-16">
                        <!-- right chat -->
                        <div class="grid grid-cols-3 mt-3">
                            <!-- columns 2 -->
                            <div class="col-span-2 text-right ">
                                <p class="text-sm font-bold text-[#aab7c4] ">Client</p>
                                <div class="col-span-1 shadow-xl bg-[#1db49d] p-2 rounded-xl">
                                    <p class="text-sm lg:text-sm text-white">Hi, I am looking for a CV Update, but I don’t
                                        know where to
                                        start.</p>
                                </div>
                            </div>
                            <div class="shadow-2xl ml-6 bg-white border border-white rounded-full w-14 h-14 ">
                                <img src="imgs/client.svg" alt="">
                            </div>
                        </div>
                        <!-- Left CHat -->
                        <div class="grid grid-cols-3 mt-3">
                            <div
                                class=" float-right col-span-1 shadow-2xl bg-white border border-white rounded-full w-14 h-14 ">
                                <img src="imgs/writer.svg" alt="">
                            </div>
                            <!-- columns 2 -->
                            <div class=" -ml-10 md:-ml-20 lg:-ml-28 xl:-ml-36  2xl:-ml-48 col-span-2 text-left">
                                <p class="text-sm font-bold text-[#aab7c4]">Client</p>
                                <div class="shadow-xl bg-white px-1 py-2 rounded-xl w-fit">
                                    <p class="text-sm lg:text-sm text-black">Don’t worry, lets connect on call to discuss
                                        this further.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Left CHat -->
                        <div class="grid grid-cols-3 mt-3">
                            <div
                                class=" float-right col-span-1 shadow-2xl bg-white border border-white rounded-full w-14 h-14 ">
                                <img src="imgs/writer.svg" alt="">
                            </div>
                            <!-- columns 2 -->
                            <div class=" -ml-10 md:-ml-20 lg:-ml-28 xl:-ml-36  2xl:-ml-48 col-span-2 text-left">
                                <p class="text-sm font-bold text-[#aab7c4]">Client</p>
                                <div class="shadow-xl bg-white px-1 py-2 rounded-xl w-fit">
                                    <p class="text-sm lg:text-sm text-black">We have sent you your New updated CV. Have
                                        you checked?</p>
                                </div>
                            </div>
                        </div>
                        <!-- right chat -->
                        <div class="grid grid-cols-3 mt-3">
                            <!-- columns 2 -->
                            <div class="col-span-2 text-right ">
                                <p class="text-sm font-bold text-[#aab7c4] ">Client</p>
                                <div class="col-span-1 shadow-xl bg-[#1db49d] p-2 rounded-xl">
                                    <p class="text-sm lg:text-sm text-white">Yes! This is perfect and everything I was
                                        looking for. Hope
                                        to have a good response from recruiters</p>
                                </div>
                            </div>
                            <div class="shadow-2xl ml-6 bg-white border border-white rounded-full w-14 h-14 ">
                                <img src="imgs/client.svg" alt="">
                            </div>
                        </div>
                        <!-- Left chat -->
                        <div class="grid grid-cols-3 mt-3">
                            <div
                                class=" float-right col-span-1 shadow-2xl bg-white border border-white rounded-full w-14 h-14 ">
                                <img src="imgs/writer.svg" alt="">
                            </div>
                            <!-- columns 2 -->
                            <div class=" -ml-10 md:-ml-20 lg:-ml-28 xl:-ml-36  2xl:-ml-48 col-span-2 text-left">
                                <p class="text-sm font-bold text-[#aab7c4]">Client</p>
                                <div class="shadow-xl bg-white px-1 py-2 rounded-xl w-fit">
                                    <p class="text-sm lg:text-sm text-black">Thank you. Good Luck.</p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>


                <!------------------------ Grid 2 for accordion ----------------->
                <style>
                    .activeTab{
                        background-color: black;
                        color:white;
                        font-weight: bold;
                        transition-delay: 100ms;
                    }
                </style>
                <div class="foraccordion ">
                    <!-- accordion div -->
                    <div>

                        <!------------------ Tabs ---------------->
                        <div class="border-b border-gray-200 bg-[#e7f1ff] md:mt-10">
                            <ul
                                class="flex flex-wrap md:flex-nowrap justify-between tab  border mt-8 md:mt-0  text-sm font-medium ">

                                @foreach ($career_levels as $career_level)
                                    <li class="">
                                        <button
                                            class=" tablinks pill-button  text-black inline-block p-4 border-b-2 rounded-t-lg defaultOpen font-bold"
                                            onclick="openCity(event,'{{ $career_level->id }}')">{{ $career_level->name }}</button>
                                    </li>

                                @endforeach



                                {{-- <li class="">
                                    <button
                                        class="tablinks pill-button text-black inline-block p-4 border-b-2 rounded-t-lg "
                                        id="" type="button" onclick="openCity(event, 'Paris')">Mid Level-3 to 7
                                        <br>years</button>
                                </li>
                                <li class="">
                                    <button
                                        class="tablinks pill-button text-black inline-block p-4 border-b-2 rounded-t-lg "
                                        id="" type="button" onclick="openCity(event, 'Tokyo')">Senior Level-8+
                                        <br>years</button>
                                </li> --}}

                            </ul>
                        </div>


                        <div>
                            <!------------ Entry Level 0 to 2 years ----------------->
                            <div class="tabcontent hidden p-4 rounded-lg border bg-white shadow-2xl transition ease-in-out delay-150" id="London">

                                <!--main div of accordions main-for-drop-down  -->
                                <div class="accordion border bg-white ">

                                    @foreach ($packages as $package)
                                        <div class="menu border">
                                            <div class="header border">
                                                <div
                                                    class="flex px-2 py-2 justify-between font-medium text-left text-black">

                                                    <p class="text-sm w-72">{{ $package->name }} </p>

                                                    <p class=""><a href="{{ route("order") }}" class="font-bold text-red-500"> Order
                                                            Now : </a> <span class="font-medium  fare text-xl">0
                                                            </span> CAD
                                                    </p>


                                                </div>
                                            </div>

                                            <div class="content hidden">
                                                <div class="pl-4 py-2 font-light border-b border-gray-200 ">
                                                    <button
                                                        class="bg-[#00536D] hover:bg-[#003241] text-white font-bold py-2 px-8 rounded mt-3">
                                                        Select This Service
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- kick start your career --}}
    <section>
        <div class="container mx-auto px-4">
            <div class="lg:px-10 text-center">
                <h2 class="text-2xl lg:text-4xl font-bold text-[#333333e3] text-center pt-5">Kickstart Your Career with the <span class="text-red-600">Best Resume </span>  Writer Canada</h2>
            <p class="text-center pb-5">Now, no more waiting for the Right Interview Call</p>
            <p>You may have done an Awesome job on your resume. But not getting the expected interview call is a sign that you are lacking somewhere. An expert overview can help you overcome the gap. And that’s what our resume writer Canada is meant for. From resume editing to writing a career profile, LinkedIn summary and cover letters, we can help you win your job with an OUTSTANDING RESUME.</p>
            <p>Now, you must be thinking what makes us Unique from other resume services Ontario, Toronto? </p>
            <p>It’s our team of writers. They are highly experienced, certified and top-rated in their fields. Whether it’s about writing a career switch profile or writing resumes to secure a position in multinational companies, our top resume writer Calgary, Vancouver, Edmonton, Canada can make it a Win-Win for you.</p>
            </div>
        </div>
    </section>


    <section>
        <div class="container mx-auto px-4">
            <div class="lg:px-10 text-center">
                <h3 class="text-2xl lg:text-4xl font-bold text-[#333333e3] text-center py-10">Resume Writing Services for <span class="text-red-600">Fresh Graduates </span>  at Cheapest Rates</h3>
                <p>Knowing what to include and what to exclude in a freshers resume is important to increase your chances of getting the interview call. You might think there’s nothing to add in a beginner’s CV but if you dig deep into your academic journey, you will find your participation in the extracurricular activities, projects, volunteering experience and also work experience that you can highlight in your resume.</p>
                <p>Having professional services on your side can guide what to put in your resume and how to do it to make it shine among other candidates. They can also help you demonstrate the transferable skills to bring you up on the list. Not only this, they can also save you from the grammatical errors, blank spaces, repetition and a lengthy resume that can put the recruiters off your profile.</p>
                <p>Our resume writing services Ottawa, Vancouver, Edmonton, Calgary, Montreal Canada are meant to assist you in your career with a tailored resume, cover letter and other important career services. So, if you’re a fresh graduate and tired of waiting, how about talking to our experts to clear the worries of your mind. And the best part is we are easy on pockets. So, being a student if your greatest worry is Affordability then you can trust us with this factor as we offer cheapest rates to help you progress in your career.  </p>
            </div>
        </div>
    </section>


    <!-- CV WRITING SERVICE IN UAE -->
    <section class="overflow-hidden mt-16">
        <div class="container mx-auto px-4">
            <!-- text div -->
            <div class="text text-center">
                <h3 class="text-2xl lg:text-4xl font-bold text-[#333333e3]">
                    Land your Dream Job in 30 Days with  <span class="text-red-600">
                        Our Resume Maker Canada
                    </span>
                </h3>
                <p class="text-sm lg:text-base font-normal text-[#003333e0] mt-1 ">
                    Many candidates apply for the same job you wish to have, what’s X Factor in your resume that can get you hired fast? Here’s what we offer:
                </p>

            </div>
            <!-- Icons and text div -->
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-4 mt-5 justify-evenly pb-10">
                <!-- Grid 1 -->
                <div class="">
                    <div class="flex lg:justify-evenly justify-center">
                        <img class="" src="imgs/pick-your-package.svg" alt="">
                        <img class="hidden  lg:grid w-10 h-8 mt-12" src="imgs/arrow-right.png" alt="">
                    </div>
                    <div>
                        <h4 class="text-[#333333e3] py-3 text-sm lg:text-base text-center font-bold lg:w-56">Tailored Resume</h4>
                    </div>

                </div>
                <!-- Grid 2 -->
                <div class="">
                    <div class="flex lg:justify-evenly justify-center">
                        <img class="" src="imgs/expert-cv-writer.svg" alt="">
                        <img class="hidden  lg:grid w-10 h-8 mt-12" src="imgs/arrow-right.png" alt="">
                    </div>
                    <div>
                        <h4 class="text-[#333333e3] text-sm lg:text-base py-3 text-center font-bold lg:w-56">100% Guaranteed Satisfaction</h4>
                    </div>

                </div>
                <!-- Grid 3 -->
                <div class="">
                    <div class="flex lg:justify-evenly justify-center">
                        <img class="" src="imgs/cv-writer-garner.svg" alt="">
                        <img class="hidden  lg:grid w-10 h-8 mt-12" src="imgs/arrow-right.png" alt="">
                    </div>
                    <div>
                        <h4 class="text-[#333333e3] text-sm lg:text-base py-3 text-center font-bold lg:w-56">Niche-Specific Resume Experts</h4>
                    </div>

                </div>
                <!-- Grid 4 -->
                <div class="">
                    <div class="flex lg:justify-evenly justify-center">
                        <img class="" src="imgs/expert-cv-writer.svg" alt="">

                    </div>
                    <div>
                        <h4 class="text-[#333333e3] text-sm lg:text-base py-3 text-center font-bold lg:px-10">Additional Work on your Strengths, Skills & Achievements</h4>
                    </div>

                </div>
            </div>
            <div class="text-center mx-auto">
                <img class="hidden lg:grid pl-32" src="imgs/line.svg" alt="">
            </div>

        </div>

    </section>


    <!-- Testimonial Section -->
    <section class="bg-[#f8f4f470]  overflow-hidden mt-16 pb-10">
        <div class="container mx-auto px-4">
            <!-- text div -->
            <div class="text text-center pt-10">
                <h3 class="text-2xl lg:text-4xl font-bold text-[#333333e3]">
                    Get Hired Faster with Our <span class="text-red-600">Resume Writing </span> Services Ontario
                    </span>
                </h3>


            </div>

            {{-- <div class="hidden lg:grid grid-cols-3  lg:px-10 mt-10 ">
                <div class="border-b-2 border-r-2 border-primary-two p-4">
                    <p class="font-bold">Job Specific Resumes</p>
                    <p>If you’re dropping general Resumes everywhere, there are barely any chances of securing the job. Every application requires a personalized touch regardless of your experience and common features. That’s where our experts come to the rescue. Our team of top resume builder Canada works on your application from the scratch considering your experience, skills and strengths. And then come up with a Resume that speaks all about You according to the job description. Isn’t that Awesome?</p>
                </div>
                <div class="border-b-2 border-r-2 border-primary-two p-4">
                    <p class="font-bold">Cover Letters</p>
                    <p>A well-written Cover Letter can make a huge difference. It shows your enthusiasm and curiosity to explore the job opportunity. Not only this, it acts as a Bonus for your resume. You can highlight your additional capabilities and flexibility to adapt to the requirements. We don’t want you to miss this opportunity with a general letter. Being one of the top resume writing services Canada, we can help with your letter too. A letter so strong that will reflect your unique capabilities and will give you an edge over other candidates. Let’s get started!</p>
                </div>
                <div class="border-b-2  border-primary-two p-4">
                    <p class="font-bold">LinkedIn Makeover</p>
                    <p>Do you know an unoptimized LinkedIn profile can take away many career opportunities from you? A makeover won’t only add to your Career Profile but will also increase your visibility on the Internet. With our resume services Toronto, get in touch with our LinkedIn experts to add more to your job application. Get found easily either through the internet or resume. Let the offers fall in your DM with an impeccable LinkedIn Profile.</p>
                </div>
                <div class=" border-r-2 border-primary-two p-4">
                    <p class="font-bold">ATS Resume</p>
                    <p>Before the recruiters filter your resume, it’s the job search tools that complete the half-part of the job. It quickly scans for the keywords, experience, contact details, tools, and technologies and then it's the Recruiter’s job to pick the most suitable application. If you fail at the first stage, you miss the opportunity early. This highlights the importance of ATS Resumes. And there are certain factors that increase the score of ATS resumes. How about taking expert help before you drop in the resume?</p>
                </div>
                <div class=" border-r-2 border-primary-two p-4">
                    <p class="font-bold">Resume Editing</p>
                    <p>Our Resume Editors have edited more than 100 job applications and tailored them according to the job description. They have also made it grammatically perfect, reduced the clutter and displayed the candidate’s strength for the professional or academic position. We can help you with yours too to make an Outstanding first impression with your job application. </p>
                </div>
                <div class="p-4">
                    <p class="font-bold">Career Switch Resumes</p>
                    <p>A career transition isn’t an easy move. You need to display it on your resume with the right words and tailor the experience to the specific role. Many professionals find it impossible to show it in a resume. If you’re also going for a career transition, let us make it easy for you with an impactful resume. Our resume services Toronto can help you ease the process to make your profile strong to the future employers.  </p>
                </div>
            </div> --}}

            <div class="p-12">
                <div class="border-b-2  border-primary-two p-4">
                    <p class="font-bold text-2xl">Job Specific Resume</p>
                    <p>If you’re dropping general Resumes everywhere, there are barely any chances of securing the job. Every application requires a personalized touch regardless of your experience and common features. That’s where our experts come to the rescue. Our team of top resume builder Canada works on your application from the scratch considering your experience, skills and strengths. And then come up with a Resume that speaks all about You according to the job description. Isn’t that Awesome?</p>
                </div>
                <div class="border-b-2  border-primary-two p-4">
                    <p class="font-bold text-2xl">Cover Letter</p>
                    <p>A well-written Cover Letter can make a huge difference. It shows your enthusiasm and curiosity to explore the job opportunity. Not only this, it acts as a Bonus for your resume. You can highlight your additional capabilities and flexibility to adapt to the requirements. We don’t want you to miss this opportunity with a general letter. Being one of the top resume writing services Canada, we can help with your letter too. A letter so strong that will reflect your unique capabilities and will give you an edge over other candidates. Let’s get started!</p>
                </div>
                <div class="border-b-2  border-primary-two p-4">
                    <p class="font-bold text-2xl">LinkedIn Makeover</p>
                    <p>Do you know an unoptimized LinkedIn profile can take away many career opportunities from you? A makeover won’t only add to your Career Profile but will also increase your visibility on the Internet. With our resume services Toronto, get in touch with our LinkedIn experts to add more to your job application. Get found easily either through the internet or resume. Let the offers fall in your DM with an impeccable LinkedIn Profile.</p>
                </div>
                <div class=" border-b-2 border-primary-two p-4">
                    <p class="font-bold text-2xl">ATS Resume</p>
                    <p>Before the recruiters filter your resume, it’s the job search tools that complete the half-part of the job. It quickly scans for the keywords, experience, contact details, tools, and technologies and then it's the Recruiter’s job to pick the most suitable application. If you fail at the first stage, you miss the opportunity early. This highlights the importance of ATS Resumes. And there are certain factors that increase the score of ATS resumes. How about taking expert help before you drop in the resume?</p>
                </div>
                <div class=" border-b-2 border-primary-two p-4">
                    <p class="font-bold text-2xl">Resume Editing</p>
                    <p>Our Resume Editors have edited more than 100 job applications and tailored them according to the job description. They have also made it grammatically perfect, reduced the clutter and displayed the candidate’s strength for the professional or academic position. We can help you with yours too to make an Outstanding first impression with your job application. </p>
                </div>
                <div class="p-4">
                    <p class="font-bold text-2xl">Career Switch Resume</p>
                    <p>A career transition isn’t an easy move. You need to display it on your resume with the right words and tailor the experience to the specific role. Many professionals find it impossible to show it in a resume. If you’re also going for a career transition, let us make it easy for you with an impactful resume. Our resume services Toronto can help you ease the process to make your profile strong to the future employers.  </p>
                </div>
            </div>
        </div>

    </section>

    <!-- Client Section -->
    <section class="bg-white  overflow-hidden  pb-10">
        <div class="container mx-auto px-4 ">
            <!-- text div -->
            <div class="pt-10">
                <h4 class="text-2xl lg:text-3xl font-bold text-[#333333e3]">
                    Meet Our   <span class="text-[#003241]">
                        Happy Customers
                    </span>
                </h4>


            </div>


            <!-- Testimonials Grid  -->
            <div class="testimonial lg:p-20">
                <div class="swiper testSwiper h-fit">

                    <!-- Grid-1 -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <div class="shadow-xl">
                                <div class="flex justify-center">
                                    <img class="border-b w-[130px] h-[130px]" src="{{ asset('imgs/testimonial/test-1.svg') }}" alt="">
                                </div>

                                <!-- Content Div -->
                                <div class=" bg-white p-4 text-center">
                                    <h4 class="text-sm lg:text-sm font-bold">
                                        Jack
                                    </h4>
                                    <p class="text-sm font-light text-gray-400">Resume Writing</p>
                                    <p class="text-sm font-light">
                                        Hired them for my Compliance Officer job and I must say they did an awesome job on my career summary, skills and strengths. They not only worked on the template but also on my job roles and responsibilities. I would definitely recommend them for resumes in Canada job market.
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class=" swiper-slide">
                            <div class="shadow-xl">
                                <div class=" flex justify-center ">
                                    <img class="border-b w-[130px] h-[130px]" src="{{ asset('imgs/testimonial/test-3.svg') }}" alt="">
                                </div>
                                <!-- Content Div -->
                                <div class=" bg-white p-4 text-center">
                                    <h4 class="text-sm lg:text-sm font-bold">
                                        Analia
                                    </h4>
                                    <p class="text-sm font-light text-gray-400">Resume & Cover Letter</p>
                                    <p class="text-sm font-light">
                                        I got Hired for my dream job right after getting a Resume and Cover Letter from them. Although the deadline was short, their experts cooperated with me. Strong in staying connected and facilitating queries.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=" swiper-slide">
                            <div class="shadow-xl">
                                <div class=" flex justify-center ">
                                    <img class="border-b w-[130px] h-[130px]" src="{{ asset('imgs/testimonial/test-2.svg') }}" alt="">
                                </div>
                                <!-- Content Div -->
                                <div class=" bg-white p-4 text-center">
                                    <h4 class="text-sm lg:text-sm font-bold">
                                        Mark
                                    </h4>
                                    <p class="text-sm font-light text-gray-400">Resume</p>
                                    <p class="text-sm font-light">
                                        One of my friends recommended this service. I wasn’t sure at first but when I got my first draft, I was Satisfied. There were some things missing but later they adapted to my revision request and helped me get a good one.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=" swiper-slide">
                            <div class="shadow-xl">
                                <div class=" flex justify-center ">
                                    <img class="border-b w-[130px] h-[130px]" src="{{ asset('imgs/testimonial/test-5.svg') }}" alt="">
                                </div>
                                <!-- Content Div -->
                                <div class=" bg-white p-4 text-center">
                                    <h4 class="text-sm lg:text-sm font-bold">
                                        Joseph
                                    </h4>
                                    <p class="text-sm font-light text-gray-400">Resume & LinkedIn</p>
                                    <p class="text-sm font-light">
                                        I haven’t come across any resume services in Ontario that have delivered so well. Not only resume but also their expertise in LinkedIn makeovers have increased my profile views and visibility. Thank You!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=" swiper-slide">
                            <div class="shadow-xl">
                                <div class=" flex justify-center ">
                                    <img class="border-b w-[130px] h-[130px]" src="{{ asset('imgs/testimonial/test-4.svg') }}" alt="">
                                </div>
                                <!-- Content Div -->
                                <div class=" bg-white p-4 text-center">
                                    <h4 class="text-sm lg:text-sm font-bold">
                                        Sandra
                                    </h4>
                                    <p class="text-sm font-light text-gray-400">Resume</p>
                                    <p class="text-sm font-light">
                                        They don’t delve into my job responsibilities. Just worked on the template. But after my revision request, they did well. You can count on them if you’re looking for resume help Toronto.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- UAE's Best and Cheap CV WRITING SERVICE -->
    <section class="bg-[#f8f4f470]  overflow-hidden  pb-10">
        <div class="container mx-auto px-12">
            <!-- text div -->
            <div class="pt-10">
                <h3 class="text-2xl lg:text-3xl font-bold text-[#333333e3]">
                    Reasons to Trust Our <span class="text-[#003241]">
                        Resume Writing Canada
                    </span>
                </h3>
            </div>
            <!--------------- 1. Start------------->
            <div class="flex mt-10 pb-4">
                <div>
                    <h4 class="text-[#3333333b] font-[700] text-7xl">1.</h4>
                </div>
                <div class="ml-4">
                    <h5 class="text-lg float-left  text-[#333333bf] font-bold">Team of Canada Top <span class="text-red-600">Resume Writers </span>
                            </h5>
                    <br>
                    <p class="font-normal text-base inline-flex">If you want to land your dream job in a specific city in Canada, you can rely on us. With our resume writing services Brampton, Winnipeg, Ottawa, Vancouver, Canada, you can pick writers according to the job market and they will help you land your desired job.</p>
                </div>
                <!--------------- 1. End------------->
            </div>
            <hr>
            <!---------------2 start ---------->
            <div class="flex mt-10 pb-4">
                <div>
                    <h4 class="text-[#3333333b] font-[700] text-7xl">2.</h4>
                </div>
                <div class="ml-4">
                    <h5 class="text-lg float-left  text-[#333333bf] font-bold">3 Days Turnover for a <span class="text-red-600">Fresh Resume </span> </h5>
                    <br>
                    <p class="font-normal text-base inline-flex">If you’re just starting your career and don’t have ample time to work on your resume, take help from the experts. And that too in a shorter deadline. We take a maximum of 3 days to work on the freshers resume so you don’t have to Wait Longer.  </p>
                </div>
            </div>
            <hr>
            <!---------------3 start ---------->
            <div class="flex mt-10 pb-4">
                <div>
                    <h4 class="text-[#3333333b] font-[700] text-7xl">3.</h4>
                </div>
                <div class="ml-4">
                    <h5 class="text-lg float-left  text-[#333333bf] font-bold">Affordable Resume Packages with Cover Letter & <span class="text-red-600"> LinkedIn</span></h5>
                    <br>
                    <p class="font-normal text-base inline-flex">Hiring a top resume writer in Canada can cost you a lot. LinkedIn and Cover Letter services can add more to the prices. But what if you get the same Exceptional work at reasonable rates? Yes, you guessed it right. Along with Quality, our prices are also affordable for Freshers & Professionals. </p>
                </div>
            </div>
            <hr>
            <!---------------4 start ---------->
            <div class="flex mt-10 pb-4">
                <div>
                    <h4 class="text-[#3333333b] font-[700] text-7xl">4.</h4>
                </div>
                <div class="ml-4">
                    <h5 class="text-lg float-left  text-[#333333bf] font-bold">Resumes with a <span class="text-red-600">Good ATS Score </span> </h5>
                    <br>
                    <p class="font-normal text-base inline-flex">You might be uploading your resume again and again with small changes to test your ATS score but still, if you aren’t satisfied with the score, let the experts do the job. Our resume services Toronto Canada can make the job easy by letting you get a good ATS resume.</p>
                </div>
            </div>
            <hr>
            <!---------------5 start ---------->
            <div class="flex mt-10 pb-4">
                <div>
                    <h4 class="text-[#3333333b] font-[700] text-7xl">5.</h4>
                </div>
                <div class="ml-4">
                    <h5 class="text-lg float-left  text-[#333333bf] font-bold">Unlimited <span class="text-red-600">Revisions </span> </h5>
                    <br>
                    <p class="font-normal text-base inline-flex">We create resumes that will suit your specific job description and leave no room for mistakes. But still, if there’s something you want us to Revise, we can cater to your requests no matter if you ask us after a month or a year. </p>
                </div>
            </div>
            <hr>
            <!---------------6 start ---------->
            <div class="flex mt-10">
                <div>
                    <h4 class="text-[#3333333b] font-[700] text-7xl">6.</h4>
                </div>
                <div class="ml-4">
                    <h5 class="text-lg float-left  text-[#333333bf] font-bold">Live <span class="text-red-600">Chat Support </span> </h5>
                    <br>
                    <p class="font-normal text-base inline-flex">If you aren’t sure whether you want to upskill your resume or not, you can ask us for free guidance. We can analyze the areas of improvement in your resume and share the expert review in your inbox. Not only this, if you need any guidance or have some queries to resolve, we are available to discuss. </p>
                </div>
            </div>
        </div>

        </div>

        </div>

    </section>


    {{-- Enhance your Resume->Boost Confidence --}}

    <section>
        <div class="container mx-auto px-4">
            <div class="lg:px-10 text-center"><h3 class="text-2xl lg:text-4xl font-bold text-[#333333e3] text-center py-10" >Enhance Your Resume <i class='fa-solid fa-arrow-right-long text-red-600'></i>
                Boost Confidence <i class='fa-solid fa-arrow-right-long text-red-600'></i> Ace Interviews.<br> Get Assisted by the <span class="text-red-600"> Best Resume Writer Toronto</span></h3>
                <p class="my-4">Okay so you already have a resume but you aren’t sure whether it will fit the description or not, isn’t it? How about getting it checked by the experts and gaining complete satisfaction before you apply for the job. </p>
                <p class="my-4">Our resume writing Toronto is ready to welcome your queries and get it sorted to make your decision easy. Our core purpose is to boost your resume which can add to your confidence later because confidence matters a lot in an interview. But if your resume doesn’t match the recruiter’s expectations then it won’t be a Win-Win for you. So, instead of regretting later, get in touch with our resume services Toronto and ace your interviews with an Impeccable Resume. Contact Today!</p></div>
        </div>
    </section>

    {{-- also get impace --}}

    <section>
        <div class="container mx-auto px-4 ">
          <div class="lg:px-10 text-center">
            <h5 class="text-2xl lg:text-4xl font-bold text-[#333333e3] text-center py-10">Also Get Impactful <span class="text-red-600"> LinkedIn Profiles</span> that will Increase Your Visibility on the Search Engines  </h5>

            <p>Your digital profile is important. Recruiters can search for you online. And if you don’t have a digital identity then it means you can lose a potential opportunity. But not to worry as we also offer LinkedIn services to boost your profile. If you aren’t on LinkedIn yet, we can help you create a profile or can also enhance the existing one with the keywords relevant to your field. Not only this, a strong “About” section about yourself is also important to attract the employer’s attention and demonstrate your career journey.</p>

            <p>
                Our best resume writing services Canada offers a complete package that also includes LinkedIn, Cover letter, Resume Review & Critique. So, if you’re looking for a one-platform that offers all services then we are here to help you out. Let’s get started!
            </p>

            <p>Resume Writer Canada is a top-rated resume writing service that caters to all career applications required for a job. Our top Resume Writers Canada ensure Quality and On-Time Delivery to give you the best from our platform.</p>
          </div>
        </div>
    </section>


    {{-- FAQ'S --}}
    <section class="bg-white overflow-hidden mt-10 pb-8">
        <div class="container mx-auto">
            <h5 class="text-center text-3xl text-black font-semibold">
                FAQs
            </h5>


            <div class="container grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 mx-auto px-4 lg:px-2 pt-6">

                <div class="mx-auto sm:mb-2 w-full md:px-5 ">


                    <details class="mb-3 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-white rounded border border-gray-300   bg-primary-two  py-2 px-3 leading-8 mb-1 text-sm">
                             How can I connect with my resume writer?</summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class=" text-sm">You can’t work directly with the writer. Once your order is confirmed, our customer support team will get in touch. You can ask your questions to the support team. In case you want to talk with the writer, we will connect you via phone call or another communication platform.  </span>
                        </div>
                    </details>
                    <details class="mb-3 relative">
                        <summary
                            class=" cursor-pointer font-semibold w-full text-white rounded border border-gray-300   bg-primary-two  py-2 px-3 leading-8 mb-1 text-sm">
                            Do you also provide Cover Letter Writing & LinkedIn services?</summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class=" text-sm">Yes, we do. Apart from resume writing and editing, we also provide Cover Letter & LinkedIn services. Also, if you need other career-relevant services, you can always ask us as we have a complete team of writers, editors, consultants and LinkedIn experts.</span>
                        </div>
                    </details>
                    <details class="mb-3 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-white rounded border border-gray-300   bg-primary-two  py-2 px-3 leading-8 mb-1 text-sm">
                            How long does a Resume take?</summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class=" text-sm">We usually take around 3-5 working days. But if you need an urgent Resume, we can definitely help you within 24 hours. But this will come with an additional fee. </span>
                        </div>
                    </details>



                </div>

                <div class="mx-auto sm:mb-2 w-full md:px-5 ">

                    <details class="mb-3 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-white rounded border border-gray-300   bg-primary-two  py-2 px-3 leading-8 mb-1 text-sm">
                            How much will your resume services cost me?</summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class=" text-sm">We are one of the few companies in Canada who offer high-quality services at affordable rates. So, don’t worry when you hire our resume writer because our prices are customized to meet your budget. You will never find us quoting high charges for a resume. </span>
                        </div>
                    </details>

                    <details class="mb-3 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-white rounded border border-gray-300   bg-primary-two  py-2 px-3 leading-8 mb-1 text-sm ">
                            Why should I choose your services over other resume writing Canada services?</summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class=" text-sm">We don’t just create resumes. We scrutinize the details and create the application from scratch that guarantees job interviews. Also, our resume writers are highly experienced, professional and also aware about the Canadian job market. On top of all, we offer pricing that everyone can afford.</span>
                        </div>
                    </details>


                    <details class="mb-3 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-white rounded border border-gray-300   bg-primary-two  py-2 px-3 leading-8 mb-1 text-sm">
                            Will you give me a refund if I’m not satisfied with your services</summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class=" text-sm">Of Course, we have a refund policy. But first we try to satisfy your requirements with Unlimited Revisions policy. Still, if you aren’t satisfied with the services, we will give you the refund according to our refund policy. For that, your complaint has to be legit.  </span>
                        </div>
                    </details>

                </div>


            </div>
    </section>




    <!-- Logo Div -->
    <section class="bg-[#f8f4f470] py-6 overflow-hidden mt-16 pb-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-5 place-items-center ">

                <div class="w-10 md:w-20"><img src="{{ asset('imgs/client-logos/ds-smith-logo.svg') }}" alt=""></div>
                <div class="w-15 md:w-auto"><img src="{{ asset('imgs/client-logos/apple-logo.svg') }}" alt=""></div>
                <div class="w-10 md:w-20"><img src="{{ asset('imgs/client-logos/nike.svg') }}" alt=""></div>
                <div class="w-10 md:w-24"><img src="{{ asset('imgs/client-logos/tesla-logo.svg') }}" alt=""></div>
                <div class="w-10 md:w-20"><img src="{{ asset('imgs/client-logos/virgin-money-bw-logo.svg') }}" alt=""></div>

            </div>

        </div>
    </section>
@endsection




{{-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



@section('scripts')
    {{-- <script>
        const headers = document.getElementsByClassName("header"),
            contents = document.getElementsByClassName("content"),
            icons = document.getElementsByClassName("icon");

        for (i = 0; i < contents.length; i++) {
            contents[i].style.display = "none";
        }


        for (let i = 0; i < headers.length; i++) {
            console.log(headers.length);
            headers[i].addEventListener("click", () => {
                for (let j = 0; j < contents.length; j++) {
                    if (i == j) {
                        console.log(i);
                        contents[j].style.display = contents[j].style.display == "block" ? "none" : "block";
                        // contents[j].addClass
                        // icons[j].innerHTML = contents[j].style.display == "block" ? "-" : "+";
                    } else {
                        contents[j].style.display = "none";
                        // icons[j].innerHTML = "+";
                    }
                }
            });
        }
    </script> --}}




    <!-- This SCript Is for Mobile Navigation-->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script> --}}

    <!-- Fro testimonials -->
    {{-- <script>
        var swiper = new Swiper('.testSwiper',{
            slidesPerView: 3,
            spaceBetween: 20,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
        });





        // swiperEl.initialize();
    </script> --}}


    <!-- This script is for tabs -->
    <script>
        // swiper pagination

        // Swiper-1
        // var swiper = new Swiper(".Swiper-1", {
        //     slidesPerView: 4,
        //     spaceBetween: 40,
        //     freeMode: true,
        //     // pagination: {
        //     //     el: ".swiper-pagination",
        //     //     clickable: true,
        //     // },
        //     breakpoints: {
        //         40: {
        //             slidesPerView: 1,

        //         },
        //         768: {
        //             slidesPerView: 2,

        //         },
        //         1024: {
        //             slidesPerView: 3,
        //             spaceBetweeb: 40
        //         },
        //     },
        //     autoplay: {
        //         delay: 2000,
        //         disableOnInteraction: false,
        //     },

        //     // navigation: {
        //     //     nextEl: ".swiper-button-next",
        //     //     prevEl: ".swiper-button-prev",
        //     // },
        // });




        var swiper = new Swiper(".testSwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            freeMode: true,
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
            breakpoints: {
                40: {
                    slidesPerView: 1,

                },
                768: {
                    slidesPerView: 2,

                },
                1024: {
                    slidesPerView: 3,
                    spaceBetweeb: 40
                },
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
        });



        function fetchPrice(careerLevel) {

            // console.log(careerLevel);

            var orderPrice = [];
            const fares = @json($fares);
            // console.log(fares);
            if (careerLevel == '1') {
                fares.forEach(fare => {
                    if (fare.day_model_id == 1 && fare.career_level_id == 1) {
                        orderPrice.push(fare.fare);
                    }
                });

            }
            if (careerLevel == '2') {
                fares.forEach(fare => {
                    if (fare.day_model_id == 1 && fare.career_level_id == 2) {
                       orderPrice.push(fare.fare);
                    }
                });
            }

            if (careerLevel == '3') {
                fares.forEach(fare => {
                    if (fare.day_model_id == 1 && fare.career_level_id == 3) {

                        orderPrice.push(fare.fare);

                    }
                });

            }



            return orderPrice;
        }


        document.querySelector(".defaultOpen").click();


        function openCity(evt, careerLevel) {

            // console.log(careerLevel);
            // Get all elements with class="tablinks" and remove the class "active"

            tablinks = document.getElementsByClassName("tablinks");

            // console.log(tablinks);

            for (i = 0; i < tablinks.length; i++) {
                 tablinks[i].classList.remove('activeTab') ;
            }

            if(careerLevel=='1'){
                    tablinks[0].classList.add('activeTab');
                }

                else if(careerLevel=='2'){
                    tablinks[1].classList.add('activeTab');
                }

                else if(careerLevel=='3'){
                    tablinks[2].classList.add('activeTab');
                }



            // this.classList.add('bg-primary');
            // Show the current tab, and add an "active" class to the button that opened the tab


            document.getElementById("London").classList.remove('hidden') ;

            // document.getElementById("London").style = "transiton-delay:100ms" ;
            // document.getElementById("London").classList.add('transition ease-in-out delay-150');

            // evt.currentTarget.className += " active";
            orderPrice = fetchPrice(careerLevel);

            // console.log(orderPrice);

            const fare = document.getElementsByClassName('fare');
            switch (careerLevel) {
                case '1':
                    for (i = 0; i < fare.length; i++) {
                        fare[i].innerHTML = orderPrice[i];
                    }
                    break;
                case '2':
                    for (i = 0; i < fare.length; i++) {
                        fare[i].innerHTML = orderPrice[i];
                    }
                    break;
                case '3':
                    for (i = 0; i < fare.length; i++) {
                        fare[i].innerHTML = orderPrice[i];
                    }
                    break;

                default:
                    console.log(false);
            }
        }
    </script>
@endsection
