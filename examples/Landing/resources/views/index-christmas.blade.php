<!-- resources/views/index-christmas.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Christmas Page')

@section('content')
    
<!-- Start -->
<section class="relative overflow-hidden md:h-screen py-36 flex justify-center items-center bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/christmas/bg-hero.jpg') }}');" id="home">
    <div class="absolute inset-0" id="particles-snow"></div>
    <div class="absolute inset-0 bg-gradient-to-t to-transparent from-slate-900"></div>

    <a href="{{ url('/') }}" class="absolute top-10 end-0 start-0 text-center justify-center mx-auto"><img src="{{ asset('assets/images/logo-light.png') }}" class="mx-auto block" alt=""></a>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 justify-center text-center">
            <h4 class="font-bold lg:leading-normal leading-normal text-white uppercase text-5xl lg:text-7xl">Christmas Offers</h4>

            <div id="countdown">
                <ul class="count-down list-none inline-block text-white text-center mt-8">
                    <li id="days" class="text-[48px] font-bold leading-[110px] size-[130px] rounded-md shadow-md bg-slate-950/40 backdrop-opacity-30 inline-block m-2"></li>
                    <li id="hours" class="text-[48px] font-bold leading-[110px] size-[130px] rounded-md shadow-md bg-slate-950/40 backdrop-opacity-30 inline-block m-2"></li>
                    <li id="mins" class="text-[48px] font-bold leading-[110px] size-[130px] rounded-md shadow-md bg-slate-950/40 backdrop-opacity-30 inline-block m-2"></li>
                    <li id="secs" class="text-[48px] font-bold leading-[110px] size-[130px] rounded-md shadow-md bg-slate-950/40 backdrop-opacity-30 inline-block m-2"></li>
                    <li id="end" class="h1"></li>
                </ul>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->

<div class="relative">
    <div class="absolute block w-full h-auto bottom-[25px] z-1 start-0">
        <a href="#about"><i class="mdi mdi-arrow-down absolute top-0 start-0 end-0 text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 size-12 mx-auto shadow-md dark:shadow-gray-800"></i></a>
    </div>

    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End -->

<!-- Start -->
<section class="relative lg:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Features</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">
            
            <!-- includes/Landings/shop-about/features6.blade.php -->
            @include('includes.Landings.shop-about.features6')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->

<!-- Start -->
<section class="relative pt-36 pb-10 bg-cover jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/christmas/bg2.jpg') }}');" id="home">
    <div class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent from-slate-900"></div>

    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-white">Today's Offer Products</h3>
        </div>
    </div>
</section><!--end section-->

<section class="relative lg:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[30px]">
            
            <!-- includes/Landings/index-shop/products.blade.php -->
            @include('includes.Landings.index-shop.products')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative mt-16">
        <div class="grid grid-cols-1 items-center">
            <h3 class="text-2xl leading-normal font-semibold">Top Categories</h3>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-shop/top-categories.blade.php -->
            @include('includes.Landings.index-shop.top-categories')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer8')

@endsection