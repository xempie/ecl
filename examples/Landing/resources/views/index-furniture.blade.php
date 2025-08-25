<!-- resources/views/index-furniture.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Furniture Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section id="controls-carousel" class="relative" data-carousel="static">
    <div class="overflow-hidden relative h-screen inset-0">
        <div class="flex items-center justify-center duration-700 bg-center bg-no-repeat bg-cover"  data-carousel-item="active" style="background-image: url('{{ asset('assets/images/furniture/bg01.jpg') }}');">
            <div class="absolute md:end-0 md:start-auto bottom-0 w-full lg:w-[700px] md:w-[500px] h-fit bg-white dark:bg-slate-900 md:p-20 p-10">
                <h5 class="uppercase font-bold mb-4 text-sm">New Arrivals</h5>
                <h1 class="font-bold dark:text-white lg:leading-normal leading-normal text-3xl lg:text-5xl">Modern <br> Furniture</h1>
                
                <div class="mt-8">
                    <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Shop Now <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center duration-700 bg-center bg-no-repeat bg-cover"  data-carousel-item="" style="background-image: url('{{ asset('assets/images/furniture/bg02.jpg') }}');">
            <div class="absolute md:end-0 md:start-auto bottom-0 w-full lg:w-[700px] md:w-[500px] h-fit bg-white dark:bg-slate-900 md:p-20 p-10">
                <h5 class="uppercase font-bold mb-4 text-sm">New Arrivals</h5>
                <h1 class="font-bold dark:text-white lg:leading-normal leading-normal text-3xl lg:text-5xl">Dream <br> Sofa Design</h1>
                
                <div class="mt-8">
                    <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Shop Now <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center duration-700 bg-center bg-no-repeat bg-cover"  data-carousel-item="" style="background-image: url('{{ asset('assets/images/furniture/bg03.jpg') }}');">
            <div class="absolute md:end-0 md:start-auto bottom-0 w-full lg:w-[700px] md:w-[500px] h-fit bg-white dark:bg-slate-900 md:p-20 p-10">
                <h5 class="uppercase font-bold mb-4 text-sm">New Arrivals</h5>
                <h1 class="font-bold dark:text-white lg:leading-normal leading-normal text-3xl lg:text-5xl">Look <br> Modern House</h1>
                
                <div class="mt-8">
                    <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Shop Now <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px]">

            <!-- includes/Landings/index-furniture/sofa.blade.php -->
            @include('includes.Landings.index-furniture.sofa')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Featured Products</h3>
                <p class="text-slate-400 max-w-xl">Please check the below our latest or popular items</p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->

        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-furniture/products1.blade.php -->
            @include('includes.Landings.index-furniture.products1')

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
            <div class="md:col-span-12 text-center">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-28 w-full table relative bg-center bg-no-repeat bg-cover jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/furniture/bg04.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/30"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-4xl text-3xl text-white font-bold">Comfort Seating</h3>

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
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Featured Collections</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-furniture/collections.blade.php -->
            @include('includes.Landings.index-furniture.collections')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30]">

            <!-- includes/Landings/index-furniture/featured1.blade.php -->
            @include('includes.Landings.index-furniture.featured1')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Insta Post Start -->
<div class="container-fluid relative">
    <div class="grid grid-cols-1 relative">
        <div class="tiny-ten-item">

            <!-- includes/Landings/index-furniture/furniture.blade.php -->
            @include('includes.Landings.index-furniture.furniture')

        </div>

        <!-- includes/Landings/index-restaurent/follow-now.blade.php -->
            @include('includes.Landings.index-restaurent.follow-now')

    </div><!--end grid-->
</div><!--end container-->
<!-- Insta Post End -->

@include('includes.footer6')

@endsection