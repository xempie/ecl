<!-- resources/views/index-construction.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Construction Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative md:h-screen py-36 flex items-center bg-center overflow-hidden bg-cover" style="background-image: url('{{ asset('assets/images/construction/bg.jpg') }}');">
    <div class="absolute inset-0 bg-white/30 dark:bg-slate-900/60"></div>
    <div class="container relative z-1">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-7 md:order-1 order-2">
                <div class="md:me-6">
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white">Start building <br> your dream home</h4>
                    <p class="text-slate-900 dark:text-white/75 text-lg max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <div class="mt-6">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Contact Us</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-4 md:col-span-5 md:text-center md:order-2 order-1">
                <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox lg:size-24 size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white hover:bg-indigo-600 text-indigo-600 hover:text-white duration-500 ease-in-out mx-auto">
                    <i class="mdi mdi-play inline-flex items-center justify-center text-3xl"></i>
                </a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero --> 

<!-- FEATURES START -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-2 duration-500 sm:-mt-[200px] -mt-[140px] m-0">
                <div class="relative bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md overflow-hidden">
                    <div class="grid lg:grid-cols-12 grid-cols-1">
                        <div class="lg:col-span-4 order-1 lg:order-2 bg-indigo-600">
                            <div class="p-[30px] lg:text-start text-center">
                                <span class="text-xl text-white/75">Our proud</span>
                                <h4 class="text-2xl font-semibold text-white my-3">25 years of undefeated success</h4>
                                <p class="text-white/75 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                <div class="mt-6">
                                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md">About us</a>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 order-2 lg:order-1">
                            <div class="grid md:grid-cols-2 grid-cols-1 p-[30px] gap-[30px]">

                                <!-- includes/Landings/index-construction/our-proud.blade.php -->
                                @include('includes.Landings.index-construction.our-proud')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-construction/about-company.blade.php -->
        @include('includes.Landings.index-construction.about-company')

    </div><!--end container-->

    <div class="container relative mt-16">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Projects</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-construction/projects1.blade.php -->
            @include('includes.Landings.index-construction.projects1')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-20 w-full table relative bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/construction/bg2.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl md:leading-normal leading-normal text-white font-medium">Generating more value <br> at every level and building a better world for everyone</h3>

            <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        
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
            <h6 class="text-indigo-600 text-base mb-2">Our Minds</h6>
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Management Team</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-startup/our-minds1.blade.php -->
            @include('includes.Landings.index-startup.our-minds1')

        </div><!--end grid-->
    </div><!--end container-->
    <!-- team -->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base mb-2">Blog</h6>
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
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