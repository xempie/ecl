<!-- resources/views/index-landing-one.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Landing-One Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative items-center overflow-hidden bg-indigo-600/5 dark:bg-indigo-600/10">
    <div class="container relative z-2">
        <div class="grid grid-cols-1 md:mt-44 mt-32 text-center">
            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Solve Problem With on Integrated <br> Marketing Agency</h4>
            <p class="text-slate-400 text-lg max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>

            <div class="mt-6">
                <div class="subcribe-form mt-6 mb-3">
                    <form class="relative mx-auto max-w-xl">
                        <input type="email" id="subcribe" name="email" class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800" placeholder="Your Email Address :">
                        <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Get Started <i class="uil uil-arrow-right"></i></button>
                    </form><!--end form-->
                </div>
            </div>
        </div><!--end grid-->

        <div class="md:flex justify-center mt-10">
            <div class="lg:w-1/2 md:w-2/3">
                <img src="{{ asset('assets/images/illustrator/celebration.svg') }}" class="mx-auto" alt="">
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 marketing-hero md:h-[250px] sm:h-[140px] h-[60px] bg-white dark:bg-slate-900 overflow-hidden z-1 text-white dark:text-slate-900"></div>
</div>
<!-- End Hero -->

<!-- Business Partner -->
<section class="py-6">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Services</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 mt-8 gap-x-[30px] gap-y-[50px]">

            <!-- includes/Landings/index-landing-one/services6.blade.php -->
            @include('includes.Landings.index-landing-one.services6')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-center">
            <div class="md:col-span-6 md:text-start text-center">
                <h3 class="md:mb-0 mb-6 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Why Everyone Loves <br> Techwind</h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        </div><!--end grid-->

            <!-- includes/Landings/index-landing-one/great-product3.blade.php -->
            @include('includes.Landings.index-landing-one.great-product3')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/get-notified2.blade.php -->
        @include('includes.Landings.index-classic-saas.get-notified2')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start Section-->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Pricing Plans</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-landing-one/pricing-plans.blade.php -->
            @include('includes.Landings.index-landing-one.pricing-plans')

        <div class="md:flex justify-center mt-4">
            <div class="text-center">
                <p class="text-slate-400">Note: <span class="text-red-600 fs-5">*</span>No credit card required</p>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                
                <!-- includes/Landings/index-saas/reviews2.blade.php -->
                @include('includes.Landings.index-saas.reviews2')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection