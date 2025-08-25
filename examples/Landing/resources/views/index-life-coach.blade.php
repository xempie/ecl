<!-- resources/views/index-life-coach.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Life-Coach Page')

@section('content')

@include('includes.navbar4')

<!-- Start -->
<section class="relative flex md:h-screen md:py-0 py-36 items-center lg:bg-left-top bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/coach/bg.jpg') }}');">
    <div class="container relative z-3">
        <div class="grid grid-cols-1 mt-10">
            <div class="md:text-start text-center">
                <span class="bg-indigo-600 inline-block text-white text-sm font-semibold px-2.5 rounded mb-4">Life Coach</span>
                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Unleash Your Real <br> Potential and Live <br> Limitless!</h1>
                <p class="text-white/70 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                
                <div class="mt-8">
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Contact us <i class="mdi mdi-arrow-right align-middle"></i></a>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Services For My Clients</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[24px]">

            <!-- includes/Landings/index-life-coach/clients.blade.php -->
            @include('includes.Landings.index-life-coach.clients')

        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Section -->

<!-- Start -->
<section class="py-20 w-full table relative bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/team.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="relative grid md:grid-cols-4 grid-cols-1 items-center gap-[30px]">

            <!-- includes/Landings/index-life-coach/counter7.blade.php -->
            @include('includes.Landings.index-life-coach.counter7')

        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<section class="relative md:py-24 py-16" id="about">
    <div class="container relative">

        <!-- includes/Landings/index-life-coach/about-me.blade.php -->
        @include('includes.Landings.index-life-coach.about-me')

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
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Popular Courses</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-life-coach/courses.blade.php -->
            @include('includes.Landings.index-life-coach.courses')

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <a href="{{ url('/course-listing') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See All Courses <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-20 w-full table relative bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/coach/cta.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Self Development Course</h3>

            <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        
            <div class="mt-8">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">JOIN FOR FREE</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
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