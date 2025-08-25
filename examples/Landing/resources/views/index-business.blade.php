<!-- resources/views/index-business.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Business Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section id="controls-carousel" class="relative" data-carousel="static">
    <div class="overflow-hidden relative h-screen inset-0">
        <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item="active">
            <div class="image-wrap absolute inset-0 -top-[350px] -bottom-[350px] -start-[100px] -end-[100px] min-w-full w-auto min-h-full h-auto overflow-hidden m-auto z-1 bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/business/bg01.jpg') }}');"></div>
            <div class="absolute inset-0 ltr:md:bg-gradient-to-r rtl:md:bg-gradient-to-l md:from-slate-900 md:via-slate-900/80 md:bg-slate-900/20 bg-slate-900/70 z-2"></div>
            <div class="container relative z-3">
                <div class="grid grid-cols-1 mt-10">
                    <div class="md:text-start text-center">
                        <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Take Care of Your Future</h1>
                        <p class="text-white/70 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                        
                        <div class="mt-8">
                            <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Contact us</a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </div>

        <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item="">
            <div class="absolute inset-0 image-wrap z-1 bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/business/bg02.jpg') }}');"></div>
            <div class="absolute inset-0 md:bg-gradient-to-b md:from-transparent md:to-slate-900 md:bg-slate-900/20 bg-slate-900/70 z-2"></div>
            <div class="container relative z-3">
                <div class="grid grid-cols-1 mt-10">
                    <div class="text-center">
                        <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Let's Start With Techwind</h1>
                        <p class="text-white/70 text-lg max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                        
                        <div class="mt-8">
                            <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">See Services</a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </div>

        <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item="">
            <div class="absolute inset-0 image-wrap z-1 bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/business/bg03.jpg') }}');"></div>
            <div class="absolute inset-0 ltr:md:bg-gradient-to-l rtl:md:bg-gradient-to-r md:from-slate-900 md:via-slate-900/80 md:bg-slate-900/20 bg-slate-900/70 z-2"></div>
            <div class="container relative z-3">
                <div class="grid grid-cols-1 mt-10">
                    <div class="md:text-end text-center">
                        <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Build and Grow Your Business</h1>
                        <p class="text-white/70 text-lg max-w-xl md:ms-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                        
                        <div class="mt-8">
                            <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Pricing Plans</a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </div>
    </div>

    <button type="button" class="flex absolute top-0 start-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex justify-center items-center size-8 rounded-full border border-white hover:border-indigo-600 hover:bg-indigo-600 group-focus:outline-none">
            <svg class="size-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="hidden">Previous</span>
        </span>
    </button>
    <button type="button" class="flex absolute top-0 end-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex justify-center items-center size-8 rounded-full border border-white hover:border-indigo-600 hover:bg-indigo-600 group-focus:outline-none">
            <svg class="size-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="hidden">Next</span>
        </span>
    </button>
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative py-8 bg-indigo-600">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        
        <!-- includes/Landings/index-business/business-expert.blade.php -->
        @include('includes.Landings.index-business.business-expert')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Who We Are ?</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Business strategies and top <br> permormance ideas</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-business/who-we-are1.blade.php -->
            @include('includes.Landings.index-business.who-we-are1')

        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-20 w-full table relative bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/team.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Stop leaving money on the table.</h3>

            <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        
            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
            </a>
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

        <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-business/pricing1.blade.php -->
            @include('includes.Landings.index-business.pricing1')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                
                <!-- includes/Landings/index-saas/reviews2.blade.php -->
                @include('includes.Landings.index-saas.reviews2')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="md:col-span-6">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Reads Our Latest <br> News & Blog</h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-seo/blog2.blade.php -->
            @include('includes.Landings.index-seo.blog2')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection