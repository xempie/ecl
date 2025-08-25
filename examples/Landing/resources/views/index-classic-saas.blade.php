<!-- resources/views/index-classic-saas.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Classic-Saas Page')

@section('content')

@include('includes.navbar3')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 overflow-hidden">
    <div class="container relative">
        <div class="relative grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="md:me-6">
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white relative">Fast and clean help <br> <span class="after:absolute after:end-0 after:start-0 after:bottom-3 after:lg:h-3 after:h-2 after:w-auto after:rounded-md after:bg-indigo-600/30 relative text-indigo-600">Structure</span> your work</h4>
                    <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                
                    <div class="relative mt-8">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2">Get Started</a>
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="mdi mdi-play text-xl align-middle"></i></a><small class="text-sm font-semibold uppercase align-middle ms-2">Watch Now</small>
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-5">
                <div class="relative after:content-[''] after:absolute after:md:bottom-12 after:-bottom-20 lg:after:-start-0 md:after:-start-20 after:-start-24
                after:bg-indigo-600 after:shadow-2xl after:shadow-indigo-600/40 after:-z-1 ltr:after:rotate-[130deg] rtl:after:-rotate-[130deg] after:w-[75rem] after:md:h-[55rem] after:h-[30rem] after:rounded-[20rem]">
                    <img src="{{ asset('assets/images/laptop.png') }}" class="lg:max-w-none md:max-w-md" alt="">
                </div>
            </div><!--end col-->

            <div class="overflow-hidden after:content-[''] after:absolute after:h-32 after:w-32 after:bg-indigo-600/5 after:top-16 after:start-0  after:-z-1 after:rounded-3xl after:animate-[spin_10s_linear_infinite]"></div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Business Partner -->
<section class="py-6 border-t border-b border-gray-100 dark:border-gray-800">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="features">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Features</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">

            <!-- includes/Landings/index-classic-saas/features2.blade.php -->
            @include('includes.Landings.index-classic-saas.features2')
        
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">

            <!-- includes/Landings/index-classic-saas/software.blade.php -->
            @include('includes.Landings.index-classic-saas.software')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/get-notified2.blade.php -->
        @include('includes.Landings.index-classic-saas.get-notified2')

    </div><!--end container-->
</section><!--end section-->
<!-- End  -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
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
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-0 pt-0">
    <div class="container relative">

        <!-- includes/Landings/index-classic-saas/ctr2.blade.php -->
        @include('includes.Landings.index-classic-saas.ctr2')

    </div><!--end container-->
    
    <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection