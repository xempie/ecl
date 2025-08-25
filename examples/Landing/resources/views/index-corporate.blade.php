<!-- resources/views/index-corporate.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Corporate Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="swiper mySwiper swiper-slider-hero relative block h-screen" id="home">
    <div class="swiper-wrapper">
        <div class="swiper-slide flex items-center overflow-hidden">
            <div class="slide-inner absolute start-0 top-0 w-full h-full slide-bg-image flex items-center bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/corporate/1.jpg') }}');">
                <div class="absolute inset-0 bg-slate-900/40"></div>
                <div class="container relative">
                    <div class="grid grid-cols-1">
                        <div class="text-center">
                            <h1 class="font-semibold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Discover the world of <br> business</h1>
                            <p class="text-white/70 text-lg max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                            
                            <div class="mt-6">
                                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end slide-inner --> 
        </div> <!-- end swiper-slide -->

        <div class="swiper-slide flex items-center overflow-hidden">
            <div class="slide-inner absolute start-0 top-0 w-full h-full slide-bg-image flex items-center bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/corporate/2.jpg') }}');">
                <div class="absolute inset-0 bg-slate-900/40"></div>
                <div class="container relative">
                    <div class="grid grid-cols-1">
                        <div class="text-center">
                            <h1 class="font-semibold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Meet our brand <br> new solution</h1>
                            <p class="text-white/70 text-lg max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                            
                            <div class="mt-6">
                                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end slide-inner --> 
        </div> <!-- end swiper-slide -->
    </div>
    <!-- end swiper-wrapper -->

    <!-- swipper controls -->
    <!-- <div class="swiper-pagination"></div> -->
    <div class="swiper-button-next bg-transparent size-[35px] leading-[35px] -mt-[30px] bg-none border border-solid border-white/50 text-white hover:bg-indigo-600 hover:border-indigo-600 rounded-full text-center"></div>
    <div class="swiper-button-prev bg-transparent size-[35px] leading-[35px] -mt-[30px] bg-none border border-solid border-white/50 text-white hover:bg-indigo-600 hover:border-indigo-600 rounded-full text-center"></div>
</section><!--end section-->
<!-- Hero End -->

<!-- FEATURES START -->
<section class="relative bg-gray-50 dark:bg-slate-800 md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-2 duration-500 sm:-mt-[200px] -mt-[140px] m-0">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[24px]">

                    <!-- includes/Landings/index-corporate/feature.blade.php -->
                    @include('includes.Landings.index-corporate.feature')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-corporate/largest.blade.php -->
        @include('includes.Landings.index-corporate.largest')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Key Features</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] mt-8">
            
            <!-- includes/Landings/index-corporate/key-features1.blade.php -->
            @include('includes.Landings.index-corporate.key-features1')

        </div><!--end grid-->

        <div class="grid grid-cols-1 justify-center">
            <div class="mt-6 text-center">
                <a href="{{ url('/page-services') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">See More <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div><!--end contanier-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-0 pt-0">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-1">
                <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                    <div class="lg:col-start-2 lg:col-span-10">
                        <div class="relative">
                            <img src="{{ asset('assets/images/cta-bg.jpg') }}" class="rounded-md shadow-lg" alt="">
                            <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                                <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                    class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content md:mt-8">
                    <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                        <div class="lg:col-start-2 lg:col-span-10">
                            <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <h6 class="text-white/50 text-lg font-semibold">Team</h6>
                                        <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white mt-2">Meet Experience <br> Team Member</h3>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <p class="text-white/50 max-w-xl mx-auto mb-2">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                        <a href="" class="text-white">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row -->
    </div><!--end container-->
    
    <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px]">
           
            <!-- includes/Home/rates.blade.php -->
            @include('includes.Home.rates')

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
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="md:col-span-6">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Reads Our Latest <br> News & Blog</h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
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