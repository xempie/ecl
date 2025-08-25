<!-- resources/views/index-personal.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Personal Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="md:h-screen py-36 h-auto relative flex items-center background-effect overflow-hidden before:content-[''] before:absolute before:-z-1 sm:before:-bottom-80 before:-bottom-40 before:start-0 before:end-36 before:mx-auto before:rounded-full before:bg-indigo-600 sm:before:size-[50rem] before:size-[30rem]">
    <div class="absolute inset-0 jarallax center" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/personal/hero-overlay.png') }}');"></div>

    <div class="container relative z-1">
        <div class="grid grid-cols-1 mt-5">
            <div class="title-heading">
                <div class="grid md:grid-cols-12 mt-12">
                    <div class="lg:col-span-4 md:col-span-6 order-2 lg:order-1 mt-6 md:mt-0 relative">
                        <div class="rounded-md lg:shadow-md lg:dark:shadow-gray-800 lg:absolute lg:top-14 lg:bg-white lg:dark:bg-slate-900 lg:p-6">
                            <h5 class="mb-3 text-2xl font-bold lg:text-slate-900 lg:dark:text-white text-white">I'm Professional Web Developer</h5>

                            <p class="para-desc lg:text-slate-400 text-slate-200 dark:text-slate-200 mb-0">Obviously I'm a Web Designer. Web Developer with over 3 years of experience.</p>

                            <div class="mt-4">
                                <a href="#portfolio" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Hire me</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="lg:col-span-4 lg:block hidden lg:order-2"></div>

                    <div class="lg:col-span-4 md:col-span-6 order-1 lg:order-3">
                        <h4 class="lg:text-[64px] lg:leading-[1.1] text-[40px] font-bold lg:text-slate-900 lg:dark:text-white text-white mb-0">John <br> S<span class="typewrite" data-period="2000" data-type='[ "tradford!"]'></span></h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end grid-->
            </div>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->

    <div class="absolute inset-0 bg-gradient-to-b lg:from-indigo-600/5 lg:to-indigo-600/20 from-indigo-600/10 to-indigo-600 lg:-z-2"></div>
    <ul class="circles absolute inset-0 h-full w-full overflow-hidden p-0 mb-0"><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
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
<!--end section-->

<section class="pt-12">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div>
        <!--end grid-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16" id="about">
    <div class="container relative">

        <!-- includes/Landings/index-personal/about-us2.blade.php -->
        @include('includes.Landings.index-personal.about-us2')

    </div><!--end container-->
    
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Services</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What do i offer ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">
            
            <!-- includes/Landings/index-personal/services5.blade.php -->
            @include('includes.Landings.index-personal.services5')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Experience</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Work Experience</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="relative after:content-[''] after:absolute after:top-0 md:after:end-0 md:after:start-0 after:w-px after:h-full md:after:m-auto after:border-s-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ms-3 md:ms-0">

                <!-- includes/Landings/index-personal/experience1.blade.php -->
                @include('includes.Landings.index-personal.experience1')

            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-20 w-full table relative jarallax center" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/personal/cta.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">I Am Available For Freelancer Projects.</h3>

            <p class="text-white/80 max-w-xl mx-auto">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
        
            <div class="relative mt-8">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Hire Me</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16" id="portfolio">
    <div class="container relative">
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
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer6')

@endsection