<!-- resources/views/photography-about.blade.php -->
@extends('layouts.main')

@section('title', 'Photography-About Page')

@section('content')

@include('includes.navbar7')

<!-- Start Home -->
<section class="relative md:py-56 py-44 bg-cover jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/photography/photographer.jpg') }}');" id="aboutme">
    <div class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900"></div>

    <div class="absolute text-center p-6 bottom-0 start-0 end-0">
        <h5 class="text-slate-900 dark:text-white/70 font-semibold text-lg">I'm Jack Jeffrey</h5>
        <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-bold">About Me</h3>
    </div>
</section><!--end section-->
<!-- End Home -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1">

            <!-- includes/Landings/photography-about/about-me1.blade.php -->
            @include('includes.Landings.photography-about.about-me1')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Brands</h3>

            <p class="text-slate-400 max-w-2xl mx-auto">As a Freelance Designer & Developer, I am here to make you stand out in the digital world and my passion for design and your vision will ensure a great end result.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 justify-center gap-[30px]">

            <!-- includes/Landings/photography-about/brands.blade.php -->
            @include('includes.Landings.photography-about.brands')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/photography-about/have-question.blade.php -->
        @include('includes.Landings.photography-about.have-question')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer7')
        
@endsection