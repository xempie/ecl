<!-- resources/views/index-smartwatch.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Smartwatch Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative flex items-center py-36 h-screen bg-gray-50 dark:bg-slate-800 jarallax" data-jarallax data-speed="0.5" style="background: url('{{ asset('assets/images/smartwatch/hero.png') }}') center no-repeat;">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 mt-10">
            <div class="grid grid-cols-1 mt-10">
                <h5 class="text-indigo-600 text-lg font-medium">Here to turn make hand turn</h5>
                <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">The Future of <br> Tech is Here</h1>
                <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                
                <div class="mt-8">
                    <a href="{{ url('/page-pricing') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i data-feather="shopping-cart" class="size-4 inline-block me-1 align-middle"></i> Buy Now</a>
                </div>
            </div><!--end grid-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">

        <!-- includes/Landings/index-smartwatch/addition.blade.php -->
        @include('includes.Landings.index-smartwatch.addition')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-smartwatch/features4.blade.php -->
            @include('includes.Landings.index-smartwatch.features4')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-smartwatch/monitoring.blade.php -->
        @include('includes.Landings.index-smartwatch.monitoring')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-smartwatch/tunes.blade.php -->
        @include('includes.Landings.index-smartwatch.tunes')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative flex items-center md:py-72 py-44 jarallax" data-jarallax data-speed="0.5" style="background: url('{{ asset('assets/images/smartwatch/bg2.jpg') }}') center no-repeat;"></section>
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What we do ?</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-smartwatch/what-we-do2.blade.php -->
            @include('includes.Landings.index-smartwatch.what-we-do2')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base mb-2">Testimonial</h6>
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
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection