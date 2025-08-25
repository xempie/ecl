<!-- resources/views/index-digital-agency.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Digital-Agency Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-6">
                <div class="md:me-6">
                    <img src="{{ asset('assets/images/logo-icon-40.png') }}" class="mb-5" alt="">
                    <p class="text-indigo-600 text-lg font-medium mb-4">We are a very dedicated team</p>
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">We are a full-service digital agency</h4>
                    <p class="text-slate-400 text-lg max-w-xl">We collaborate with people, teams, and businesses to develop design systems, strategies, and processes to do a better creative work everyday.</p>
                
                    <div class="mt-6">
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i data-feather="video" class="size-4"></i></a><span class="font-semibold ms-2 align-middle">Watch Now</span>
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-6">
                <div class="grid grid-cols-12 gap-4 items-center">
                    <div class="col-span-5">
                        <div class="grid grid-cols-1 gap-4">
                            <img src="{{ asset('assets/images/digital/02.jpg') }}" class="shadow-sm rounded-lg" alt="">
                            
                            <div class="ms-auto">
                                <div class="size-28 bg-indigo-600/10 rounded-lg"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-7">
                        <div class="grid grid-cols-1 gap-4">
                            <img src="{{ asset('assets/images/digital/01.jpg') }}" class="shadow-sm rounded-lg" alt="">
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Business Partner -->
<div class="container relative mb-16 mt-8">
    <div class="grid grid-cols-1 pb-4 text-center">
        <h6 class="text-slate-400 text-lg">We are very fortunate to work with these amazing partners</h6>
    </div><!--end grid-->

    <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">

        <!-- includes/Landings/index-digital-agency/business-partner5.blade.php -->
        @include('includes.Landings.index-digital-agency.business-partner5')

    </div><!--end grid-->
</div><!--end container-->
<!-- Business Partner -->

<!-- Start -->
<section class="py-20 w-full table relative bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/digital/bg01.jpg') }}');">
    <div class="container relative">
        <div class="flex">
            <div class="lg:w-1/3 md:w-1/2 sm:w-2/3 p-6 rounded-md shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900">
                <h6 class="text-indigo-600 font-semibold mb-2">Techwind Digital Agency</h6>
                <h4 class="mb-4 md:text-[28px]] text-2xl leading-normal font-bold">Leading Digital <br> Business For <span class="text-indigo-600 typewrite" data-period="2000" data-type='[ "Agency", "Software", "Technology", "Studio", "Webapps" ]'> <span class="wrap"></span> </span> <br> Solution.</h4>
                <p class="text-slate-400 mb-0">Certain internet providers exploit the fact that fill text cannot be recognized by automatic search engines - meaningful information cannot be distinguished from meaningless.</p>
            
                <div class="mt-4">
                    <a href="#!" onclick="contactModal.showModal()" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Get a project?</a>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Services</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-digital-agency/our-services.blade.php -->
            @include('includes.Landings.index-digital-agency.our-services')

        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-digital-agency/development.blade.php -->
        @include('includes.Landings.index-digital-agency.development')

    </div><!--end container-->
</section><!--end section-->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-0 pt-0">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">

            <!-- includes/Landings/index-digital-agency/company.blade.php -->
            @include('includes.Landings.index-digital-agency.company')

        </div>
        <!--end row -->
    </div>
    <!--end container-->

    <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
</section>
<!--end section-->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 font-semibold mb-2">Testimonial</h6>
            <h3 class="mb-6 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What our customer <br> say about us</h3>

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
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h6 class="text-indigo-600 font-semibold mb-2">Portfolio</h6>
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

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-digital-agency/available.blade.php -->
        @include('includes.Landings.index-digital-agency.available')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Landings/index-digital-agency/contact-modal.blade.php -->
    @include('includes.Landings.index-digital-agency.contact-modal')

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection