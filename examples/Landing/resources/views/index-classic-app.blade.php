<!-- resources/views/index-classic-app.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Classic-App Page')

@section('content')

@include('includes.navbar')

<span class="fixed blur-[200px] size-[600px] rounded-full top-1/2 -translate-y-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2 bg-indigo-600/20"></span>

<!-- Start -->
<section class="relative overflow-hidden md:pt-44 pt-36 md:pb-24 pb-16">
    <div class="container relative">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-8 gap-[30px] relative">
            <div class="md:me-6">
                <ul class="list-none mb-0 text-amber-400 text-xl">
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                </ul>
                <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white">Making <span class="after:absolute after:end-0 after:start-0 after:bottom-3 after:-rotate-6 after:h-2 after:w-auto after:rounded-md after:bg-indigo-600/20 relative text-indigo-600">everybody</span> <br> feel valued at work</h4>
                <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
            
                <div class="mt-6">
                    <a href=""><img src="{{ asset('assets/images/app/app.png') }}" class="inline-block m-1" alt=""></a>
                    <a href=""><img src="{{ asset('assets/images/app/playstore.png') }}" class="inline-block m-1" alt=""></a>
                </div>
            </div>

            <div class="relative">
                <img src="{{ asset('assets/images/app/classic02.png') }}" class="mx-auto" alt="">
                <div class="overflow-hidden absolute md:size-[500px] size-[400px] bg-gradient-to-tl to-indigo-600/20 via-indigo-600/70 from-indigo-600 bottom-1/2 translate-y-1/2 md:start-0 start-1/2 ltr:md:translate-x-0 ltr:-translate-x-1/2 rtl:md:translate-x-0 rtl:translate-x-1/2 -z-1 shadow-md shadow-indigo-600/10 rounded-full"></div>

                <div class="overflow-hidden after:content-[''] after:absolute after:h-10 after:w-10 after:bg-indigo-600/20 after:top-0 after:start-0 after:-z-1 after:rounded-lg after:animate-[spin_10s_linear_infinite]"></div>
            
                <div class="absolute flex justify-between items-center top-16 md:-start-10 -start-5 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 w-60 m-3">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-[65px] min-w-[65px] bg-indigo-600/5 text-indigo-600 text-center rounded-full me-3">
                            <i data-feather="monitor" class="size-6"></i>
                        </div>
                        <div class="flex-1">
                            <h6 class="text-slate-400">Visitor</h6>
                            <p class="text-xl font-bold"><span class="counter-value" data-target="4589">2100</span></p>
                        </div>
                    </div>

                    <span class="text-red-600"><i class="uil uil-chart-down"></i> 0.5%</span>
                </div>

                <div class="absolute bottom-1/2 translate-y-1/2 lg:-end-7 -end-5 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 w-48 m-3">
                    <h5 class="text-lg font-semibold mb-3">Manage Software</h5>
                    <div class="flex justify-between mt-3 mb-2">
                        <span class="text-slate-400">Progress</span>
                        <span class="text-slate-400">84%</span>
                    </div>
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 84%"></div>
                    </div>
                </div>

                <div class="absolute flex justify-between items-center bottom-16 md:start-10 -start-2 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 w-44 m-3">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/images/client/05.jpg') }}" class="size-14 rounded-full shadow-md dark:shadow-gray-800 me-3" alt="">
                        <div class="flex-1">
                            <h6 class="text-lg font-semibold">Cristina</h6>
                            <p class="text-slate-400">Manager</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative animate-[spin_30s_linear_infinite] -z-1">
                <span class="after:absolute after:start-0 after:bottom-1/2 after:translate-y-1/2 after:h-2 after:w-8 after:rounded-md after:bg-indigo-600/20 relative after:z-10"></span>
                <span class="after:absolute after:start-0 after:bottom-1/2 after:translate-y-1/2 after:rotate-90 after:h-2 after:w-8 after:rounded-md after:bg-indigo-600/20 relative after:z-10"></span>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">

            <!-- includes/Landings/index-classic-app/business-partner3.blade.php -->
            @include('includes.Landings.index-classic-app.business-partner3')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-classic-app/revenue.blade.php -->
        @include('includes.Landings.index-classic-app.revenue')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">

            <!-- includes/Landings/index-classic-app/for-you.blade.php -->
            @include('includes.Landings.index-classic-app.for-you')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">

            <!-- includes/Landings/index-classic-app/program.blade.php -->
            @include('includes.Landings.index-classic-app.program')

        </div><!--end grid-->
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
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer2')

@endsection