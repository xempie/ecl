<!-- resources/views/index-portfolio.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Portfolio Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full pt-28 lg:pt-36">
    <div class="container relative">
        <div class="grid grid-cols-1 mt-10 text-center">
            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl bg-gradient-to-r from-red-600 to-indigo-600 text-transparent bg-clip-text mb-5">Building <br> digital products, brands, <br> and experience.</h4>
            <p class="text-slate-400 text-lg max-w-xl mx-auto">A <span class="text-slate-900 dark:text-white font-semibold">Product Designer</span> and <span class="text-slate-900 dark:text-white font-semibold">Visual Developer</span> in NY. We specialize in UI/UX Design, Responsive Web Design, and Visual Development.</p>
        
            <div class="mt-6">
                <a href="{{ url('/contact-one') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i class="uil uil-envelope"></i> Contact Us</a>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 items-center gap-[30px]">
            <div class="filters-group-wrap text-center">

                <!-- includes/Landings/index-portfolio/filters-group3.blade.php -->
                @include('includes.Landings.index-portfolio.filters-group3')

            </div>
        </div><!--grid-->
    </div>

    <div class="container-fluid relative mt-8">   
        <div id="grid" class="md:flex justify-center">
            
            <!-- includes/Landings/index-portfolio/portfolio2.blade.php -->
            @include('includes.Landings.index-portfolio.portfolio2')

        </div>

        <div class="flex justify-center mt-8">
            <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">See More</a>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-portfolio/let's-talk.blade.php -->
        @include("includes.Landings.index-portfolio.let's-talk")

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer6')

@endsection