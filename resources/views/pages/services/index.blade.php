@extends('layouts.web')

@section('title', 'Services')
@section('description', 'Services')
@section('canonical', config('app.url') . Request::path() )

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Services </h4>

            @include('partials.frontend.breadcrumb')

        </div>
    </div>
@endsection
@section('content')

    <section class="container mx-auto my-10 px-4">

        <h1 class="text-color-secondry text-4xl my-4"><strong>Services</strong></h1>

        <ul class="mt-10 relative grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @if (!empty($services))
                @foreach ($services as $service)
                    <li>
                        <a href="{{ route('services.show', $service->slug) }}" class="flex items-center p-4 border border-gray-400 rounded-lg border-opacity-60 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-100 hover:border-primary">
                            <div class="relative shrink-0 bg-breeze flex items-center justify-center w-12 h-12 rounded-lg overflow-hidden">
                                <span class="bg-secondry text-white p-10 ">
                                    <i class="fas fa-edit"></i>
                                </span>
                            </div>
                            <div class="ml-4 leading-5">
                                <div class="text-2xl text-primary">{{ $service->name }}</div>
                                <div class="mt-1 text-sm text-secondary">
                                    {{ Str::limit( $service->meta_description , 80, '...')}}
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>

    </section>

@endsection
