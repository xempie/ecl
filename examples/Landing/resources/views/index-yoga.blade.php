<!-- resources/views/index-yoga.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Yoga Page')

@section('content')

@include('includes.navbar2')

<!-- Hero Start -->
<section class="relative lg:pt-64 py-36 bg-center bg-cover" style="background-image: url('{{ asset('assets/images/yoga/bg.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-900/70 z-2"></div>
    <div class="container relative z-3">
        <div class="grid grid-cols-1 mt-24">
            <div class="text-center">
                <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-24 rounded-full inline-flex items-center justify-center bg-white/10 hover:bg-white/40 text-white dark:bg-slate-900/10 dark:hover:bg-slate-900/40 duration-500">
                    <i class="mdi mdi-play inline-flex items-center justify-center text-3xl"></i>
                </a>
                
                <h4 class="font-bold text-white text-2xl mt-6">Body & Mind</h4>
                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Fitness Classes for Every Goal</h1>
                <p class="text-white/70 text-lg max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                
                <div class="mt-8">
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Join Our Classes</a>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="relative overflow-hidden md:py-24 py-16">
    <div class="container relative">

        <!-- includes/Landings/index-yoga/yoga.blade.php -->
        @include('includes.Landings.index-yoga.yoga')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-center">
            <div class="md:col-span-6">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Most Popular Meditation Therapy</h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 mt-8 gap-[30px]">

            <!-- includes/Landings/index-yoga/therapy.blade.php -->
            @include('includes.Landings.index-yoga.therapy')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">How It Work ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-yoga/how-it-work.blade.php -->
            @include('includes.Landings.index-yoga.how-it-work')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1">
            <div class="relative overflow-hidden bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-700">
                <div class="grid md:grid-cols-2 items-center gap-[30px]">
                    <div class="relative">
                        <img src="{{ asset('assets/images/yoga/cta.jpg') }}" alt="">
                        <div class="absolute md:bottom-1/2 md:translate-y-1/2 md:-end-10 ltr:md:translate-x-0 rtl:md:translate-x-0 -bottom-10 end-1/2 ltr:translate-x-1/2 rtl:-translate-x-1/2 text-center">
                            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="text-white p-4">
                            <h4 class="leading-normal text-4xl mb-3 font-semibold">Check out some of our <br> Yoga Poses Videos.</h4>

                            <p class="text-white/70 text-lg max-w-xl">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>

                            <ul class="list-none text-white/50 mt-4">
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-white text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-white text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
                                <li class="mb-1 flex"><i class="uil uil-check-circle text-white text-xl me-2"></i> Create your own skin to match your brand</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-20 w-full table relative bg-center bg-fixed bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/yoga/bg02.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-4xl text-3xl text-white font-semibold">Yoga is the journey of the self <br> through the self</h3>

            <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        
            <div class="mt-8">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Join Our Classes</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Yoga Schedule</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-5">
                <div class="sticky top-20">

                    <!-- includes/Landings/index-yoga/tab-btn.blade.php -->
                    @include('includes.Landings.index-yoga.tab-btn')

                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-7">
                <div id="myTabContent" class="bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">

                    <!-- includes/Landings/index-yoga/monday-tab.blade.php -->
                    @include('includes.Landings.index-yoga.monday-tab')

                    <!-- includes/Landings/index-yoga/tuesday-tab.blade.php -->
                    @include('includes.Landings.index-yoga.tuesday-tab')
                    
                    <!-- includes/Landings/index-yoga/wednesday-tab.blade.php -->
                    @include('includes.Landings.index-yoga.wednesday-tab')        
                    
                    <!-- includes/Landings/index-yoga/thursday-tab.blade.php -->
                    @include('includes.Landings.index-yoga.thursday-tab')

                    <!-- includes/Landings/index-yoga/friday-tab.blade.php -->
                    @include('includes.Landings.index-yoga.friday-tab')

                    <!-- includes/Landings/index-yoga/saturday-tab.blade.php -->
                    @include('includes.Landings.index-yoga.saturday-tab')
                    
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <!-- Team -->
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Expert Teachers</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-yoga/teachers.blade.php -->
            @include('includes.Landings.index-yoga.teachers')

        </div><!--end grid-->
    </div><!--end container-->
    <!-- team -->
</section><!--end section-->
<!-- End -->

<!-- Insta Post Start -->
<div class="container-fluid relative">
    <div class="grid grid-cols-1 relative">
        <div class="tiny-twelve-item">

            <!-- includes/Landings/index-yoga/insta-post2.blade.php -->
            @include('includes.Landings.index-yoga.insta-post2')

        </div>

            <!-- includes/Landings/index-restaurent/follow-now.blade.php -->
            @include('includes.Landings.index-restaurent.follow-now')
        
    </div><!--end grid-->
</div><!--end container-->
<!-- Insta Post End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer4')

@endsection