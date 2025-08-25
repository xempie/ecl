<!-- resources/views/index-landing-two.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Landing-Two Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="py-36 md:py-64 w-full table relative bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/bg-video.png') }}');">
    <div class="absolute top-0 start-0 w-full h-full z-0 pointer-events-none overflow-hidden">
        <iframe src="https://player.vimeo.com/video/33955001?background=1&autoplay=1&loop=1&byline=0&title=0" class="absolute top-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2  -translate-y-1/2 w-screen h-[56.25vw] min-h-screen min-w-[177.77vw]"></iframe>
        <!--Note: Vimeo Embed Background Video-->

        <!-- <iframe src="https://www.youtube.com/embed/yba7hPeTSjk?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1" class="absolute top-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2  -translate-y-1/2 w-screen h-[56.25vw] min-h-screen min-w-[177.77vw]"></iframe> -->
        <!--Note: Youtube Embed Background Video-->
    </div>
    <div class="absolute inset-0 bg-slate-900/80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <img src="{{ asset('assets/images/logo-icon-64.png') }}" class="mx-auto" alt="">
            <h4 class="text-white lg:text-5xl text-4xl lg:leading-normal leading-normal font-medium my-6 position-relative">We Collaboration Easy & Fast</h4>
        
            <p class="text-white opacity-50 mb-0 max-w-xl text-lg mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS html page.</p>
        
            <div class="relative mt-8">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Get Started</a>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="absolute block w-full h-auto bottom-[25px] z-1 start-0">
        <a href="#about"><i class="mdi mdi-arrow-down absolute top-0 start-0 end-0 text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 size-12 mx-auto shadow-md dark:shadow-gray-800"></i></a>
    </div>

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
        
        <!-- includes/Landings/index-business/business-expert.blade.php -->
        @include('includes.Landings.index-business.business-expert')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Services</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What we offer ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">
            
            <!-- includes/Landings/index-personal/services5.blade.php -->
            @include('includes.Landings.index-personal.services5')

        </div><!--end grid-->
    </div><!--end container-->

    <!-- STart CTA -->
    <div class="container-fluid relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 py-36 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/team.jpg') }}');">
            <div class="absolute inset-0 bg-slate-900/70"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Stop leaving money on the table.</h3>

                    <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                        <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                    </a>
                </div><!--end grid-->
            </div><!--end container-->
        </div>
    </div><!--end container-->
    <!-- End CTA -->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Portfolio</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Works & Projects</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-6 mt-8">
            
            <!-- includes/Landings/index-personal/portfolio1.blade.php -->
            @include('includes.Landings.index-personal.portfolio1')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
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
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Latest News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            
            <!-- includes/Landings/index-seo/blog2.blade.php -->
            @include('includes.Landings.index-seo.blog2')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-personal/contact-me.blade.php -->
        @include('includes.Landings.index-personal.contact-me')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection