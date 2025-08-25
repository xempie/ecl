<!-- resources/views/index-service.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Service Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full pt-36 lg:pt-44 pb-32 bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/home-shape.png') }}');">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="md:me-6">
                    <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white">Find the perfect <br> <span class="text-indigo-600">Professional</span> for you</h4>
                    <p class="text-slate-400 text-xl max-w-xl">Get free quotes within minutes</p>
                
                    <div class="subcribe-form z-1 mt-8">
                        <form class="relative mx-auto max-w-2xl">
                            <i data-feather="search" class="size-5 absolute top-[47%] -translate-y-1/2 start-4"></i>
                            <input type="text" id="search_name" name="name" class="pt-4 pe-40 pb-4 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 ps-12" placeholder="What service are you looking for?">
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Search</button>
                        </form><!--end form-->
                        <p class="text-slate-400 max-w-xl mt-3"><span class="font-semibold">Popular:</span> House Cleaning, Web Design, Personal Trainers</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-5">
                <img src="{{ asset('assets/images/illustrator/services.svg') }}" alt="">
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">Discover Area</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->
    
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-service/area.blade.php -->
            @include('includes.Landings.index-service.area')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 lg:pt-24 pt-16">
        <div class="absolute inset-0 opacity-25 dark:opacity-50 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/map.png') }}');"></div>
        <div class="absolute inset-0 opacity-25 dark:opacity-50 bg-[url('{{ asset('assets/images/map.png') }}')] bg-no-repeat bg-center bg-cover"></div>
        <div class="relative grid grid-cols-1 pb-8 text-center z-1">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">Trusted by more than 10K users</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="relative grid md:grid-cols-3 grid-cols-1 items-center mt-8 gap-[30px] z-1">
            
            <!-- includes/Landings/index-it-solution-two/counter3.blade.php -->
            @include('includes.Landings.index-it-solution-two.counter3')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">What Our Client Say ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="flex justify-center relative mt-16">
            <div class="relative lg:w-1/3 md:w-1/2 w-full">
                <div class="absolute -top-20 md:-start-24 -start-0">
                    <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                </div>

                <div class="absolute bottom-28 md:-end-24 -end-0">
                    <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                </div>

                <div class="tiny-single-item">
                    
                    <!-- includes/Landings/index-software/reviews5.blade.php -->
                    @include('includes.Landings.index-software.reviews5')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Frequently Asked Questions</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-software/frequently-asked2.blade.php -->
            @include('includes.Landings.index-software.frequently-asked2')
        
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Home/get-in-touch.blade.php -->
        @include('includes.Home.get-in-touch')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection