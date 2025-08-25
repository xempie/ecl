<!-- resources/views/page-aboutus.blade.php -->
@extends('layouts.main')

@section('title', 'Page-Aboutus Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/company/aboutus.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">About Us</h3>

            <p class="text-slate-300 text-lg max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="">Company</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Aboutus</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        
        <!-- includes/Landings/index-it-solution/who-we-are.blade.php -->
        @include('includes.Landings.index-it-solution.who-we-are')

    </div><!--end container-->
    
    <!-- Business Partner -->
    <div class="container relative mt-8">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Landings/index-digital-agency/business-partner5.blade.php -->
            @include('includes.Landings.index-digital-agency.business-partner5')

        </div><!--end grid-->
    </div><!--end container-->
    <!-- Business Partner -->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
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
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800 md:pt-0 pt-0">
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
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800 md:pb-0 pb-0">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Professional Team</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Pages/Company/page-aboutus/team3.blade.php -->
            @include('includes.Pages.Company.page-aboutus.team3')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="lg:col-span-5 md:col-span-6 md:order-1 order-2">
                <div class="relative overflow-hidden after:content-[''] after:absolute after:h-40 after:w-40 after:bg-red-600/5 after:top-5 after:start-0 after:end-0 after:mx-auto after:-z-0 after:rounded-3xl after:animate-[spin_10s_linear_infinite]">
                    <img src="{{ asset('assets/images/hero2.png') }}" class="relative z-1" alt="">
                </div>
            </div>

            <div class="lg:col-span-7 md:col-span-6 md:order-2 order-1">
                <div class="tiny-single-item">

                    <!-- includes/Pages/Company/page-aboutus/distribution.blade.php -->
                    @include('includes.Pages.Company.page-aboutus.distribution')

                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer')

@endsection