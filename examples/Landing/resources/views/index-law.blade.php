<!-- resources/views/index-law.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Law Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="flex md:h-screen py-36 items-center bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/law/bg.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 mt-10">
            <h5 class="text-lg text-white font-medium mb-3">Best Law Firm</h5>
            <h3 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Unbelievable solutions <br> for all legal cases</h3>

            <p class="text-slate-300 text-lg max-w-xl">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        
            <div class="mt-8">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">Get Started</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800 overflow-hidden">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">

            <!-- includes/Landings/index-law/professionals.blade.php -->
            @include('includes.Landings.index-law.professionals')

        </div><!--end grid-->
    </div><!--end container -->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-law/law-firm.blade.php -->
        @include('includes.Landings.index-law.law-firm')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 pt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">We provide Different types of office</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container-fluid relative">
        <div class="flex justify-center relative mt-8">
            <div class="relative w-full">
                <div class="tiny-six-item">

                    <!-- includes/Landings/index-law/office.blade.php -->
                    @include('includes.Landings.index-law.office')

                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="pt-20 pb-32 w-full table relative bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/business/bg02.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Speak With Our Expert <br> Lawyers Today!</h3>

            <p class="text-white/80 max-w-xl mx-auto mb-0">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        
            <div class="mt-6">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">Free Consultation</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Business Partner -->
<div class="container relative">
    <div class="grid grid-cols-1">
        <div class="relative -top-[52px] shadow-sm dark:shadow-gray-800 py-6 bg-white dark:bg-slate-900">
            <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
                
                <!-- includes/Home/business-partner.blade.php -->
                @include('includes.Home.business-partner')

            </div><!--end grid-->
        </div>
    </div>
</div><!--end container-->
<!-- Business Partner -->

<!-- Start -->
<section class="relative md:pt-11 pt-3 md:pb-24 pb-16 overflow-hidden">
    <div class="container relative">

        <!-- includes/Landings/index-law/free-consultation.blade.php -->
        @include('includes.Landings.index-law.free-consultation')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Clients Testimonials</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]"> 

            <!-- includes/Landings/index-law/reviews7.blade.php -->
            @include('includes.Landings.index-law.reviews7')

        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<section class="relative md:py-24 py-16 md:pt-0 pt-0">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-1">
                <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                    <div class="lg:col-start-2 lg:col-span-10">
                        <div class="relative">
                            <img src="{{ asset('assets/images/law/bg2.jpg') }}" class="shadow-lg" alt="">
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
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Professional Team</h3>

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