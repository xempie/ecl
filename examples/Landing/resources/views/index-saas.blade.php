<!-- resources/views/index-saas.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Saas Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative before:content-[''] before:absolute xl:before:-top-[30%] lg:before:-top-[50%] sm:before:-top-[80%] before:-top-[90%] before:-start-80 before:end-0 before:w-[140rem] before:h-[65rem] ltr:before:-rotate-12 rtl:before:rotate-12 before:bg-indigo-600/5 dark:before:bg-indigo-600/10 before:z-1 items-center overflow-hidden">
    <div class="container relative z-2">
        <div class="grid grid-cols-1 md:mt-44 mt-32 text-center">
            <div class="wow animate__animated animate__fadeIn">
                <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Build fast, Released quickly.</h4>
                <p class="text-slate-400 text-lg max-w-xl mx-auto">Launch your campaign and benefit from our expertise
                    on designing and managing conversion centered Tailwind CSS v4.x html page.</p>

                <div class="mt-6">
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Try For Free</a>

                    <p class="text-slate-400 text-sm mt-3">No credit card required. Free 14-days trial</p>
                </div>
            </div>
            <div class="relative mt-8 z-3 wow animate__animated animate__fadeIn">
                <img src="{{ asset('assets/images/saas/classic01.png') }}" alt="" class="mover">
            </div>
        </div><!--end grid-->

        <div class="bg-indigo-600 w-8 h-16 z-2 absolute start-2 lg:bottom-28 md:bottom-36 sm:bottom-40 bottom-16"></div>
        <div class="bg-indigo-600/20 w-8 h-16 z-2 absolute start-12 lg:bottom-32 md:bottom-40 sm:bottom-44 bottom-20"></div>

        <div class="bg-indigo-600/20 w-8 h-16 z-2 absolute end-12 xl:bottom-[420px] lg:bottom-[315px] md:bottom-[285px] sm:bottom-80 bottom-32"></div>
        <div class="bg-indigo-600 w-8 h-16 z-2 absolute end-2 xl:bottom-[440px] lg:bottom-[335px] md:bottom-[305px] sm:bottom-[340px] bottom-36"></div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Business Partner -->
<section class="py-6">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">

            <!-- includes/Landings/index-saas/business-partner2.blade.php -->
            @include('includes.Landings.index-saas.business-partner2')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start Section-->
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Key Features</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] mt-8">

            <!-- includes/Landings/index-saas/features.blade.php -->
            @include('includes.Landings.index-saas.features')

        </div><!--end grid-->

        <div class="grid grid-cols-1 justify-center">
            <div class="mt-6 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                <a href="{{ url('/page-services') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div><!--end contanier-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Why Everyone Loves Techwind</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-saas/great-product.blade.php -->
            @include('includes.Landings.index-saas.great-product')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-saas/get-notified.blade.php -->
        @include('includes.Landings.index-saas.get-notified')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                
                <!-- includes/Landings/index-saas/reviews2.blade.php -->
                @include('includes.Landings.index-saas.reviews2')

            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-0 pt-0">
    <div class="container relative">

        <!-- includes/Landings/index-saas/ctr.blade.php -->
        @include('includes.Landings.index-saas.ctr')

    </div><!--end container-->
    
    <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px] wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
            <div class="lg:col-span-5">
                <div class="lg:text-start text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Comfortable Rates</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <div class="mt-6">
                        <a href="{{ url('/page-pricing') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="uil uil-master-card"></i> Subscribe Now</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-7 mt-8 lg:mt-0">
                <div class="lg:ms-8">
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-0 gap-[30px]">

                        <!-- includes/Landings/index-saas/rates2.blade.php -->
                        @include('includes.Landings.index-saas.rates2')

                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
            <div class="md:col-span-6">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Reads Our Latest <br> News & Blog</h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-saas/blog.blade.php -->
            @include('includes.Landings.index-saas.blog')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection