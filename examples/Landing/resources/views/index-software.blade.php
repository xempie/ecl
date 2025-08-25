<!-- resources/views/index-software.blade.php -->
@extends('layouts.main')

@section('title', 'index-Software Page')

@section('content')

@include('includes.navbar4')

<!-- Start Hero -->
<section class="relative md:h-screen md:py-0 py-36 items-center overflow-hidden bg-indigo-600 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/bg3.png') }}');">
    <div class="container relative">
        <div class="grid grid-cols-1 md:mt-36 mt-10 text-center">
            <h4 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Integrated Techwind <span class="text-orange-500">Software <br> & Saas</span> Plateform </h4>
            <p class="text-white/70 text-lg max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>

            <div class="subcribe-form mt-6 mb-3">
                <form class="relative max-w-xl mx-auto">
                    <input type="email" id="subcribe" name="email" class="form-input border-0 py-4 pe-40 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800" placeholder="Your Email Address :">
                    <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-orange-500 hover:bg-orange-600 border-orange-500 hover:border-orange-600 text-white rounded-full">Try it for free <i class="uil uil-arrow-right"></i></button>
                </form><!--end form-->
            </div>

            <span class="text-slate-400 font-medium">Looking for help? <a href="" class="text-orange-500">Get in touch with us</a></span>

            <div class="overflow-hidden mt-8">
                <img src="{{ asset('assets/images/saas/home.png') }}" alt="">
            </div>

            <div class="overflow-hidden after:content-[''] after:absolute after:h-14 after:w-14 after:bg-white/20 after:-top-[40px] after:start-[30%] after:rounded-lg after:animate-[spin_10s_linear_infinite]"></div>

            <div class="overflow-hidden after:content-[''] after:absolute after:h-10 after:w-10 after:bg-white/20 after:top-[30%] after:end-[20%] after:rounded-full after:animate-ping"></div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Partners -->            
<section class="py-6 border-t border-b border-gray-100 dark:border-gray-800">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section>
<!-- Partners -->        

<!-- Start -->
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">How It Works?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-software/works.blade.php -->
            @include('includes.Landings.index-software.works')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-software/analytics.blade.php -->
        @include('includes.Landings.index-software.analytics')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-modern-saas/get-notified3.blade.php -->
        @include('includes.Landings.index-modern-saas.get-notified3')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-software/enhance-security.blade.php -->
        @include('includes.Landings.index-software.enhance-security')

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
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Pricing Plans</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px] items-center">
            
            <!-- includes/Landings/index-software/pricing.blade.php -->
            @include('includes.Landings.index-software.pricing')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Frequently Asked Questions</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-software/frequently-asked2.blade.php -->
            @include('includes.Landings.index-software.frequently-asked2')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 z-2">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection