@extends('layouts.web')
@section('title', 'Blogs')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

@section('content')
<section class="px-4 md:px-16 lg:px-24 py-14 ">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-2 gap-y-4">

        @foreach ($blogs as $blog)
        <div class="">
            <a href="{{route('services.show',$blog->slug) }}"><img src="{{ url('storage/app/public/'.$blog->image_path) }}"  alt="blog" class="h-72 w-full border-8 border-gray-100 hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer"></a>
            <p class="bg-white py-4 mx-auto md:mx-0"> <i class="fa fa-user px-1"></i> admin on <i class="fa fa-clock-o px-1"></i> september 17, 2022</p>
            <a href="{{route('services.show',$blog->slug) }}"><p class="bg-white text-2xl  w-full text-center md:text-left mt-4 sm:mt-0 h-20 text-black">{{ $blog->title }}</p></a>
            <p class="bg-white leading-normal py-4 text-center md:text-left">
               {{Str::limit(strip_tags($blog->description), 120 , '[...]')  }}
            </p>

            <div class="w-full px-4 pt-4 pb-10">
                <span class=" float-left ">
                    <i class="fa fa-heart-o text-primary-one"> 0 </i>
                </span>
                <a href="{{route('services.show',$blog->slug) }}" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2 hover:underline">
                    <i class="fa fa-comments-o text-black" style="font-size:22px"></i> 0
                    <i class="fa fa-file-text-o pl-2 text-black"></i> Read more</a>
            </div>
        </div>
        @endforeach
    </div>


</section>
@endsection

