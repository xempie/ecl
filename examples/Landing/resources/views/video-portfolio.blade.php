<!-- resources/views/video-portfolio.blade.php -->
@extends('layouts.main')

@section('title', 'Video-Portfolio Page')

@section('content')

@include('includes.navbar6')

<!-- Start Home -->
<section class="relative md:pt-40 pt-28 md:pb-48 pb-40 bg-cover jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/photography/photographer.jpg') }}');" id="aboutme">
    <div class="absolute inset-0 h-full w-full bg-slate-900/60"></div>

    <div class="container relative">
        <div class="grid grid-cols-1 mt-10">
            <div class="text-center">
                <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-bold text-white">Watch Our Videos</h3>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End Home -->

<!-- Start -->
<section class="relative md:pb-24 pb-16 -mt-10">
    <div class="container relative">
        <div class="lg:flex lg:w-4/5 mx-auto">
            <div class="grid sm:grid-cols-2 grid-cols-1 gap-[30px]">

                <!-- includes/Landings/video-portfolio/picture-item.blade.php -->
                @include('includes.Landings.video-portfolio.picture-item')

            </div>
        </div>

        <div class="grid grid-cols-1 mt-8">
            <div class="text-center">
                <a href="{{ url('/photography-portfolio') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 dark:text-white/70 dark:hover:text-white hover:text-indigo-600 after:bg-indigo-600 dark:after:bg-white duration-500 ease-in-out">See More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- End -->

@include('includes.footer6')

@endsection