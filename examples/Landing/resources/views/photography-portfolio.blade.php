<!-- resources/views/photography-portfolio.blade.php -->
@extends('layouts.main')

@section('title', 'Photography-Portfolio Page')

@section('content')

@include('includes.navbar7')

<!-- Start Home -->
<section class="relative md:py-56 py-44 bg-cover jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/photography/photographer.jpg') }}');" id="aboutme">
    <div class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900"></div>

    <div class="absolute text-center p-6 bottom-0 start-0 end-0">
        <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-bold">Portfolio</h3>
    </div>
</section><!--end section-->
<!-- End Home -->

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

            <!-- includes/Landings/photography-portfolio/photos.blade.php -->
            @include('includes.Landings.photography-portfolio.photos')

        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="text-center">
                <a href="{{ url('/photography-portfolio') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 dark:text-white/70 dark:hover:text-white hover:text-indigo-600 after:bg-indigo-600 dark:after:bg-white duration-500 ease-in-out">See More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->

@include('includes.footer7')
        
@endsection