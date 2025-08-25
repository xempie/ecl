<!-- resources/views/index-it-solution.blade.php -->
@extends('layouts.main')

@section('title', 'Index-It-Solution Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 pb-0 lg:py-44 lg:pb-0 bg-indigo-600 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/bg2.png') }}');">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-7">
                <div class="md:me-6 md:mb-20">
                    <h5 class="text-lg text-white/60">We are creative</h5>
                    <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Best IT Solution <br> Company</h4>
                    <p class="text-white/60 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                
                    <div class="mt-6">
                        <a href="{{ url('/contact-one') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-800 dark:hover:border-gray-700 rounded-md me-2 mt-2"><i class="uil uil-envelope"></i> Get Started</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-5">
                <img src="{{ asset('assets/images/hero1.png') }}" alt="">
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-gray-50 dark:text-slate-800">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Business Partner -->
<section class="py-6 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What we do ?</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-it-solution/what-we-do3.blade.php -->
            @include('includes.Landings.index-it-solution.what-we-do3')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-it-solution/who-we-are.blade.php -->
        @include('includes.Landings.index-it-solution.who-we-are')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-it-solution/effective2.blade.php -->
        @include('includes.Landings.index-it-solution.effective2')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="py-20 w-full table relative bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/team.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Stop leaving money on the table.</h3>

            <p class="text-white/70 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        
            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
            </a>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
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