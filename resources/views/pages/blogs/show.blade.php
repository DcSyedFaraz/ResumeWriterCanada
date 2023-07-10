@extends('layouts.web')
@section('title', $blog->title ?? "-")
@section('description', $blog->meta_description  ?? "-")
@section('canonical', $blog->canonical  ?? "-")

@section('content')
<style>
        /* Core CSS */
        .service-section h1 {
            --tw-text-opacity: 1;
            color: rgb(00 00 00 / var(--tw-text-opacity));
            font-weight: bold;
            font-size: 2.25rem;
            line-height: 2.5rem;
            margin: 1rem 0;
        }

        .service-section h2,
        h3,h4 {
            
            --tw-text-opacity: 1;
            color: rgb(00 00 00 / var(--tw-text-opacity));
            font-size: 1.5rem;
            line-height: 2.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;

        }

        .service-section p {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .service-section a {
            --tw-text-opacity: 1;
            color: rgb(0 155 214 / var(--tw-text-opacity));
            font-weight: 700;
        }

        .service-section a:hover {
            --tw-text-opacity: 1;
            color: rgb(64 199 251 / var(--tw-text-opacity));
            text-decoration: underline;
        }

        .service-section ul {
            --tw-text-opacity: 1;
            color:black;
            list-style-type: disc;
        }

        /* Mobile Size CSS */
        .service-section h1 {
            text-align: center;
        }

        .service-section ul {
            margin-left: 1rem;
        }

        /* tbody{
            overflow: hidden;

        } */

        /* md and greater screen size */
        @media (min-width: 768px) {
            .service-section h1 {
                text-align: left;
            }

            .service-section ul {
                margin-left: 2.5rem;
            }
        }

        /* sm and greater screen size  screen size */
        /* @media (min-width: 640px) {

        } */

    </style>

<div class="bg-primary px-4 lg:px-20">
    <div class="container mx-auto py-8 grid grid-cols-12">

        <div class="col-span-12 xl:col-span-10 text-3xl font-bold lg:font-medium lg:text-4xl text-white">{{ $blog->title }}
        </div>
        <div class="hidden xl:block text-white my-auto text-xl"><a href="{{ route('home') }} " class="hover:underline underline-offset-2 text-white">Home</a><i class="fa-solid fa-angle-right ml-4 text-sm"></i></div>
        <div class="hidden xl:block   text-xl text-white my-auto "><a href={{ route('blogs') }} class="hover:underline underline-offset-2 text-white">Blogs</a></div>
    </div>
</div>        
        <section class="service-section container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]  ">
            @if (!empty($blog))
        <div class=""><img src="{{URL('storage/app/public/'.$blog->image_path)}}" alt="blog-image" class="mx-auto" /></div>
            {!! $blog->description !!}             
                @endif
        
        </section>
        {{-- <div class=" flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4  my-4 mx-4">
            <a href="{{ route('order') }}" class="btn-pri hvr-sweep-to-right text-black">
                
                For More Essays Click Here
            </a>
        </div> --}}
        
@endsection