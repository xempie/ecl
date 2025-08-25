<!-- resources/views/index-photography.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Photography Page')

@section('content')

@include('includes.navbar7')

<!-- Start Home -->
<section class="relative flex md:h-screen py-44 items-center bg-cover bg-center self-center">
    <div class="absolute inset-0 h-full w-full jarallax bottom" data-jarallax data-speed="0.8" style="background-image: url('{{ asset('assets/images/photography/first.jpg') }}');"></div>
    <div class="absolute inset-0 h-full w-full md:block hidden jarallax center" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/photography/hero-text-lg.png') }}');"></div>
    <div class="absolute inset-0 h-full w-full block md:hidden jarallax center" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/photography/hero-text-sm.png') }}');"></div>
    <div class="absolute inset-0 h-full w-full jarallax bottom" data-jarallax data-speed="1.1" style="background-image: url('{{ asset('assets/images/photography/last.png') }}');"></div>
    <div class="absolute inset-0 bg-gradient-to-t to-transparent via-transparent from-slate-900 hidden dark:block"></div>
    <div class="absolute inset-0 bg-gradient-to-t to-transparent via-transparent from-white dark:hidden block"></div>
</section><!--end section-->
<!-- End Home -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Photography</h3>

            <p class="text-slate-400 max-w-2xl mx-auto">As a Freelance Designer & Developer, I am here to make you stand out in the digital world and my passion for design and your vision will ensure a great end result.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-photography/photography.blade.php -->
            @include('includes.Landings.index-photography.photography')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->

<!-- Start -->
<section class="relative md:py-56 py-44 bg-cover overflow-hidden jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/photography/photographer.jpg') }}');" id="aboutme">
    <div class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900"></div>

    <div class="absolute text-center p-6 bottom-0 start-0 end-0">
        <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Jack Jeffrey</h3>
    </div>
</section><!--end section-->

<section class="relative pt-8 md:pb-24 py-16">
    <div class="container relative">
        <div class="flex justify-center">
            <div class="lg:max-w-768 w-full text-center">
                <p>The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words.</p>
                <p class="text-slate-400 mt-6">This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                <p class="text-slate-400 mt-6">Moreover, in Latin only words at the beginning of sentences are capitalized; this means that Lorem Ipsum cannot accurately represent, for example, German, in which all nouns are capitalized. Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts.</p>
                <p class="text-slate-400 mt-6">If the fill text is intended to illustrate the characteristics of different typefaces, it sometimes makes sense to select texts containing the various letters and symbols specific to the output language.</p>
                <p class="text-slate-400 mt-6">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. This might also explain why one can now find slightly different versions. Due to the age of the Lorem Ipsum text there are no copyright issues to contend with.</p>

                <div class="mt-6 text-center">
                    <a href="{{ url('/photography-about') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 dark:text-white/70 dark:hover:text-white hover:text-indigo-600 after:bg-indigo-600 dark:after:bg-white duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Portfolio / Photography</h3>

            <p class="text-slate-400 max-w-2xl mx-auto">As a Freelance Designer & Developer, I am here to make you stand out in the digital world and my passion for design and your vision will ensure a great end result.</p>
        </div><!--end grid-->

        <div id="grid" class="md:flex justify-center mx-auto mt-4">

            <!-- includes/Landings/index-photography/portfolio&photography.blade.php -->
            @include('includes.Landings.index-photography.portfolio&photography')

        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="text-center">
                <a href="{{ url('/photography-portfolio') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 dark:text-white/70 dark:hover:text-white hover:text-indigo-600 after:bg-indigo-600 dark:after:bg-white duration-500 ease-in-out">See More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer7')

@endsection