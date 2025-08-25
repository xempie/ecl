<!-- resources/views/page-pricing.blade.php -->
@extends('layouts.main')

@section('title', 'Page-Pricing Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/services.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h5 class="text-white/50 text-lg font-medium">Our Comfortable Rates</h5>
            <h3 class="mt-2 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Pricing / Plans</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="">Company</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Pricing</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-gray-50 dark:text-slate-800">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="relative py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            
            <!-- includes/Landings/index-startup/support.blade.php -->
            @include('includes.Landings.index-startup.support')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Choose Pricing Plan</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1">
            <ul class="inline-block w-fit mx-auto flex-wrap justify-center text-center p-2 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-full" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                <li role="presentation" class="inline-block">
                    <button class="px-4 py-1 text-sm font-semibold rounded-full w-full hover:text-indigo-600 duration-500" id="start-month-tab" data-tabs-target="#start-month" type="button" role="tab" aria-controls="start-month" aria-selected="true">Monthly</button>
                </li>
                <li role="presentation" class="inline-block">
                    <button class="px-4 py-1 text-sm font-semibold rounded-full w-full duration-500" id="start-year-tab" data-tabs-target="#start-year" type="button" role="tab" aria-controls="start-year" aria-selected="false">Yearly <span class="bg-amber-500 text-white text-xs font-bold px-2.5 py-0.5 rounded-full h-5 ms-1">Save 25%</span></button>
                </li>
            </ul>

            <div id="StarterContent" class="mt-6">
                
                <!-- includes/Pages/Company/page-pricing/pricing-plan1.blade.php -->
                @include('includes.Pages.Company.page-pricing.pricing-plan1')

            </div>
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
<!-- End Section-->

@include('includes.footer')

@endsection