<!-- resources/views/index-podcast.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Podcast Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-gradient-to-br from-indigo-600/20 to-yellow-500/20 dark:from-indigo-600/20 dark:to-yellow-500/20">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="lg:col-span-7">
                <div class="me-6">
                    <i class="uil uil-microphone text-indigo-600 text-4xl"></i>
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-[54px] my-5 text-slate-900 dark:text-white">Find and Listen on <br> your <span class="text-indigo-600">favorite podcast</span></h4>
                    <p class="text-slate-500 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                
                    <div class="mt-8">
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox py-1.5 ps-5 pe-2 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">Listen Now <span class="size-8 inline-flex items-center justify-center rounded-full bg-white border border-white text-indigo-600 ms-3"><i class="mdi mdi-play"></i></span></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-5 relative overflow-hidden">
                <div class="grid grid-cols-2 items-center md:gap-4 gap-3">
                    <div class="md:space-y-4 space-y-3">
                        <img src="{{ asset('assets/images/podcast/h2.jpg') }}" class="border-[3px] border-gray-100 dark:border-gray-800 rounded-lg" alt="">
                        <img src="{{ asset('assets/images/podcast/h1.jpg') }}" class="border-[3px] border-gray-100 dark:border-gray-800 rounded-lg" alt="">
                    </div>

                    <div class="md:space-y-4 space-y-3">
                        <img src="{{ asset('assets/images/podcast/h3.jpg') }}" class="border-[3px] border-gray-100 dark:border-gray-800 rounded-lg" alt="">
                        <img src="{{ asset('assets/images/podcast/h4.jpg') }}" class="border-[3px] border-gray-100 dark:border-gray-800 rounded-lg" alt="">
                    </div>
                </div><!--end col-->

                <span class="size-24 bg-yellow-500 border-[3px] border-gray-100 dark:border-gray-800 rounded-full absolute bottom-0 -end-4 flex items-center justify-center">
                    <span class="text-white text-xl text-center font-semibold">
                        <span class="counter-value block" data-target="551">100</span>
                        <span class="text-white font-semibold text-sm block">Podcasts</span>
                    </span>
                </span>

                <div class="absolute top-1/2 -translate-y-1/2 -start-4 py-2 px-3 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 w-fit my-3">
                    <i class="uil uil-microphone text-indigo-600 text-xl align-middle"></i> <span class="font-semibold ms-1">Amazing Conversation</span>
                </div>

                <div class="absolute -top-4 start-1/2 -translate-x-1/2 text-center">
                    <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center text-white bg-indigo-600">
                        <i class="uil uil-microphone inline-flex items-center justify-center text-2xl"></i>
                    </a>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">

        <!-- includes/Landings/index-podcast/podcast.blade.php -->
        @include('includes.Landings.index-podcast.podcast')

    </div><!--end container-->
</section>

<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Explore Podcast Categories</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="flex justify-center items-center text-center mt-8">
            <ul class="list-none space-x-3 space-y-4">

                <!-- includes/Landings/index-podcast/categories2.blade.php -->
                @include('includes.Landings.index-podcast.categories2')

            </ul>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="md:col-span-6">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Podcasts</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">All Podcasts from <br> Audio & Video</h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 relative mt-8">
            <div class="tiny-three-item-icon">

                <!-- includes/Landings/index-podcast/all-podcasts.blade.php -->
                @include('includes.Landings.index-podcast.all-podcasts')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Choose Pricing Plan</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-podcast/pricing-plan.blade.php -->
            @include('includes.Landings.index-podcast.pricing-plan')
        
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                
                <!-- includes/Landings/index-saas/reviews2.blade.php -->
                @include('includes.Landings.index-saas.reviews2')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-seo/contact-us.blade.php -->
        @include('includes.Landings.index-seo.contact-us')

    </div><!--end container-->
</section><!--end section-->

@include('includes.footer')

@endsection