<!-- resources/views/index-spa.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Spa Page')

@section('content')

@include('includes.navbar2')
    
<div class="spa-css text-base text-slate-900 dark:text-white dark:bg-slate-900">

    <!-- Start Hero -->
    <section class="relative md:py-60 py-36 bg-center bg-no-repeat bg-cover jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/spa/bg.jpg') }}');">
        <div class="absolute inset-0 bg-slate-900/10"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900 to-transparent"></div>

        <div class="container relative">
            <div class="grid grid-cols-1 text-center mt-10">
                <h5 class="!font-ebgaramond text-white text-xl font-medium wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Discover a truly relaxing experience</h5>
                <h4 class="!font-alex lg:text-9xl lg:leading-tight text-7xl text-white mt-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Beauty spa and wellness</h4>
                <p class="text-white/70 max-w-xl mx-auto mt-6 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Every treatment is specifically designed to using massage sequences and the most potent actives available in the world today.</p>
            
                <div class="mt-8">
                    <a href="" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-white border-white text-white hover:text-slate-900 font-normal wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Explore Now</a>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid md:grid-cols-3 gap-[30px]">

                <!-- includes/Landings/index-spa/spa.blade.php -->
                @include('includes.Landings.index-spa.spa')

            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16 overflow-hidden">
            
            <!-- includes/Landings/index-spa/our-story.blade.php -->
            @include('includes.Landings.index-spa.our-story')

        </div><!--end container-->
        
        <div class="container relative md:mt-24 mt-16 pt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h4 class="!font-alex text-3xl">Spa & Massage</h4>
                <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal !font-ebgaramond font-medium">Our Services</h3>
                <p class="text-slate-400 max-w-xl mx-auto">Every treatment is specifically designed to using massage sequences and the most potent actives available in the world today.</p>
            </div><!--end grid-->

            <div class="grid md:grid-cols-2 mt-8 gap-[30px]">

                <!-- includes/Landings/index-spa/massage.blade.php -->
                @include('includes.Landings.index-spa.massage')

            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="py-20 w-full table relative bg-center bg-no-repeat bg-cover jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/spa/cta.jpg') }}');">
        <div class="absolute inset-0 bg-slate-900/70"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-6 md:text-4xl text-3xl !font-ebgaramond text-white font-medium">Stop leaving money on the table.</h3>

                <p class="text-white/80 max-w-xl mx-auto">Every treatment is specifically designed to using massage sequences and the most potent actives available in the world today.</p>
            
                <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                </a>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h4 class="!font-alex text-3xl">Testimonial</h4>
                <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal !font-ebgaramond font-medium">What Our Users Say</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Every treatment is specifically designed to using massage sequences and the most potent actives available in the world today.</p>
            </div><!--end grid-->

            <div class="grid grid-cols-1 mt-8">
                <div class="tiny-three-item">
                    
                    <!-- includes/Landings/index-saas/reviews2.blade.php -->
                    @include('includes.Landings.index-saas.reviews2')

                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <!-- Team -->
        <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h4 class="!font-alex text-3xl">Our Minds</h4>
                <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal !font-ebgaramond font-medium">Management Team</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Every treatment is specifically designed to using massage sequences and the most potent actives available in the world today.</p>
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">

                <!-- includes/Landings/index-spa/our-minds.blade.php -->
                @include('includes.Landings.index-spa.our-minds')

            </div><!--end grid-->
        </div><!--end container-->
        <!-- team -->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h4 class="!font-alex text-3xl">Blog</h4>
                <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal !font-ebgaramond font-medium">Blog Or News</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Every treatment is specifically designed to using massage sequences and the most potent actives available in the world today.</p>
            </div><!--end grid-->

            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">

                <!-- includes/Landings/index-spa/blog7.blade.php -->
                @include('includes.Landings.index-spa.blog7')

            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!--end-->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

</div>

@include('includes.footer')

@endsection