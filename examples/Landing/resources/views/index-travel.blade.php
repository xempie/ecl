<!-- resources/views/index-travel.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Travel Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative md:flex md:h-screen items-center md:py-0 pt-36 pb-56 bg-no-repeat bg-center bg-cover bg-fixed" style="background-image: url('{{ asset('assets/images/travel/bg.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 to-slate-900/40"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 mt-10">
            <h4 class="lg:leading-normal leading-normal text-white text-4xl lg:text-5xl mb-5 font-bold">Find Your <br> Favorite Place Here!</h4>
            <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
        
            <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
                <div class="lg:col-span-10 mt-8">
                    <div class="bg-white dark:bg-slate-900 border-0 shadow-sm rounded p-3">
                        <form action="#">
                            <div class="registration-form relative text-slate-900 text-start">
                                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6 lg:divide-x-[1px] lg:divide-gray-200 lg:dark:divide-gray-700">
                                    <div class="filter-search-form relative">
                                        <i class="uil uil-search absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                                        <input name="name" type="text" id="location" class="form-input lg:rounded-t-sm lg:rounded-e-none lg:rounded-b-none lg:rounded-s-sm text-slate-400 lg:outline-0 w-full filter-input-box bg-gray-50 dark:bg-slate-800 border-0 focus:ring-0" placeholder="Location">
                                    </div>

                                    <div class="filter-search-form relative">
                                        <i class="uil uil-dollar-sign absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                                        <input name="name" type="number" id="job-keyword" class="form-input lg:rounded-t-sm lg:rounded-e-none lg:rounded-b-none lg:rounded-s-sm text-slate-400 lg:outline-0 w-full filter-input-box bg-gray-50 dark:bg-slate-800 border-0 focus:ring-0" placeholder="Budget">
                                    </div>
                                
                                    <div class="filter-search-form relative">
                                        <i class="uil uil-calendar-alt absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                                        <input name="name" type="text" id="job-keyword" class="form-input lg:rounded-t-sm lg:rounded-e-none lg:rounded-b-none lg:rounded-s-sm text-slate-400 lg:outline-0 w-full filter-input-box bg-gray-50 dark:bg-slate-800 border-0 focus:ring-0 start" placeholder="Select date">
                                    </div>

                                    <div>
                                        <input type="submit" id="search" name="search" style="height: 60px;" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white searchbtn lg:rounded-t-none lg:rounded-e-sm lg:rounded-b-sm lg:rounded-s-none rounded-lg w-full" value="Search">
                                    </div>
                                </div><!--end grid-->
                            </div><!--end container-->
                        </form>
                    </div>
                </div><!--ed col-->
            </div><!--end grid-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container absolute bottom-0 start-0 end-0">
        <div class="grid grid-cols-1">
            <div class="p-6 border-t border-dashed border-white/30">
                <div class="grid md:grid-cols-4 grid-cols-2 gap-[30px]">

                    <!-- includes/Landings/index-travel/counter4.blade.php -->
                    @include('includes.Landings.index-travel.counter4')

                </div><!--end grid-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Benefit for Traveller</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-travel/benefit.blade.php -->
            @include('includes.Landings.index-travel.benefit')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Popular Destination</h3>
            <p class="text-slate-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>

            <div class="filters-group-wrap mt-4">
                <div class="filters-group">

                    <!-- includes/Landings/index-travel/filters-group1.blade.php -->
                    @include('includes.Landings.index-travel.filters-group1')

                </div>
            </div>
        </div><!--end grid-->

        <div id="grid" class="md:flex justify-center mx-auto">

            <!-- includes/Landings/index-travel/destination.blade.php -->
            @include('includes.Landings.index-travel.destination')

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
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Frequently Asked Questions</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-travel/asked-questions.blade.php -->
            @include('includes.Landings.index-travel.asked-questions')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection