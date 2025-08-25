<!-- resources/views/index-apps.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Apps Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 md:py-56 md:pb-0 overflow-hidden bg-top bg-no-repeat bg-fixed bg-cover" style="background-image: url('{{ asset('assets/images/app/bg.png') }}');">
    <div class="absolute inset-0 bg-indigo-600 opacity-80"></div>
    <div class="container relative z-2">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-8 md:col-span-7 md:mb-16">
                <div class="md:me-6">
                    <h4 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Make Faster, <br> More Confident <br> Decision</h4>
                    <p class="text-white/70 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                
                    <div class="mt-6">
                        <a href=""><img src="{{ asset('assets/images/app/app.png') }}" class="inline-block m-1" alt=""></a>
                        <a href=""><img src="{{ asset('assets/images/app/playstore.png') }}" class="inline-block m-1" alt=""></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-4 md:col-span-5 md:mt-0">
                <div class="relative after:content-[''] after:absolute after:h-40 after:w-40 after:bg-indigo-600 after:bottom-0 after:end-0  after:-z-0 after:rounded-3xl after:animate-[spin_10s_linear_infinite]">
                    <img src="{{ asset('assets/images/app/1.png') }}" class="relative z-1" alt="">
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Features</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What We Do ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-apps/what-we-do.blade.php -->
            @include('includes.Landings.index-apps.what-we-do')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-apps/performing.blade.php -->
        @include('includes.Landings.index-apps.performing')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-apps/solution.blade.php -->
        @include('includes.Landings.index-apps.solution')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-apps/beautiful.blade.php -->
        @include('includes.Landings.index-apps.beautiful')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Key Features</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-apps/key-features.blade.php -->
            @include('includes.Landings.index-apps.key-features')

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

    <div class="container relative md:mt-24 mt-16 z-2">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->

<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Section-->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection