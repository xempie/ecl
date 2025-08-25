<!-- resources/views/index-consulting.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Consulting Page')

@section('content')

@include('includes.navbar4')

<!-- Start -->
<section class="relative md:py-60 py-36 bg-right bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/consulting/bg.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 items-center mt-10">
            <span class="text-white/80 font-semibold mb-4 text-lg">Turn Your Skills And Expertise Into A Successful Business</span>
            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Grow your business <br> with focus & clarity.</h4>
            <p class="text-white/60 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
        
            <div class="mt-8">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Learn More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Business Partner -->
<section class="py-6 border-t border-b border-gray-100 dark:border-gray-800">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Business Consulting Services</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-consulting/consulting.blade.php -->
            @include('includes.Landings.index-consulting.consulting')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<section class="relative bg-gray-50 dark:bg-slate-800 md:py-24 py-16">
    <div class="container relative">

        <!-- includes/Landings/index-consulting/experience.blade.php -->
        @include('includes.Landings.index-consulting.experience')

    </div><!--end container-->

    <div class="container relative mt-16">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1">

            <!-- includes/Landings/index-consulting/user.blade.php -->
            @include('includes.Landings.index-consulting.user')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Digital Product</h3>
                <p class="text-slate-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->

        <div class="sm:flex mt-4" id="grid">
            
            <!-- includes/Landings/index-digital-agency/portfolio.blade.php -->
            @include('includes.Landings.index-digital-agency.portfolio')

        </div>

        <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
            <div class="md:col-span-12 text-center">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 lg:pt-24 pt-16">
        <div class="absolute inset-0 opacity-25 dark:opacity-50 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/map.png') }}');"></div>
        <div class="relative grid grid-cols-1 pb-8 text-center z-1">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">Trusted by more than 10K users</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="relative grid md:grid-cols-3 grid-cols-1 items-center mt-8 gap-[30px] z-1">
            
            <!-- includes/Landings/index-it-solution-two/counter3.blade.php -->
            @include('includes.Landings.index-it-solution-two.counter3')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">What Our Client Say ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="flex justify-center relative mt-16">
            <div class="relative md:w-1/2 w-full">
                <div class="absolute -top-20 md:-start-24 -start-0">
                    <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                </div>

                <div class="absolute bottom-28 md:-end-24 -end-0">
                    <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                </div>

                <div class="tiny-single-item">
                    
                    <!-- includes/Landings/index-software/reviews5.blade.php -->
                    @include('includes.Landings.index-software.reviews5')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <!-- Team -->
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Management Team</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-startup/our-minds1.blade.php -->
            @include('includes.Landings.index-startup.our-minds1')

        </div><!--end grid-->
    </div><!--end container-->
    <!-- team -->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-seo/blog2.blade.php -->
            @include('includes.Landings.index-seo.blog2')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection