<!-- resources/views/portfolio-modern-four.blade.php -->
@extends('layouts.main')

@section('title', 'Portfolio-Modern-Four Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/portfolio/bg-inner.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">Portfolio & Works</h3>

            <p class="text-slate-300 text-lg max-w-xl mx-auto">Showcase of Our Awesome Works in Four Columns</p>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="">Portfolio</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Modern</li>
        </ul>
    </div>
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
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 items-center gap-[30px]">
            <div class="filters-group-wrap text-center">
                <div class="filters-group">
                    
                    <!-- includes/Landings/nft-explore/filters-group.blade.php -->
                    @include('includes.Landings.nft-explore.filters-group')

                </div>
            </div>
        </div><!--grid-->

        <div id="grid" class="md:flex justify-center mx-auto mt-4">

            <!-- includes/Portfolio/portfolio-modern-four/modern-four.blade.php -->
            @include('includes.Portfolio.portfolio-modern-four.modern-four')

        </div>

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                
                <!-- includes/Landings/nft-creator-profile/navigation.blade.php -->
                @include('includes.Landings.nft-creator-profile.navigation')

            </div>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-portfolio/let's-talk.blade.php -->
        @include("includes.Landings.index-portfolio.let's-talk")

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

@include('includes.footer')

@endsection