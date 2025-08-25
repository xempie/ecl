<!-- resources/views/page-job-career.blade.php -->
@extends('layouts.main')

@section('title', 'Page-Job-Career Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/job/job.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-12">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Job Opening</h3>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/index-job') }}">Job</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Job Opening</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        
        <!-- includes/Landings/index-job/largest-job.blade.php -->
        @include('includes.Landings.index-job.largest-job')

    </div><!--end container-->

    <div class="container relative mt-12">
        <div class="grid grid-cols-2 md:grid-cols-4">
            
            <!-- includes/Landings/index-job/counter6.blade.php -->
            @include('includes.Landings.index-job.counter6')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Job Openings</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind css html page.</p>
        </div><!--end grid-->

        <div class="lg:flex justify-center mt-8">
            <div class="lg:w-3/4">

                <!-- includes/Pages/Job-Careers/page-job-career/openings.blade.php -->
                @include('includes.Pages.Job-Careers.page-job-career.openings')

            </div>
        </div><!--end-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

@include('includes.footer5')

@endsection