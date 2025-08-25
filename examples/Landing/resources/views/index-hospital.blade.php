<!-- resources/views/index-hospital.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Hospital Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-64 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/hospital/bg.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 mt-10">
            <img src="{{ asset('assets/images/logo-icon-40.png') }}" alt="">

            <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6 mt-3">Meet The <br> Best Doctor</h1>
            <p class="text-white/60 text-lg max-w-xl">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
            
            <div class="mt-8">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Make Appointment</a>

                <p class="text-white/60 text-base mt-2">T&C apply. Please read <a href="" class="text-white">Terms and Conditions <i class="uil uil-arrow-right"></i></a></p>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- FEATURES START -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="flex justify-center">
            <div class="relative z-2 duration-500 sm:-mt-[200px] -mt-[140px] m-0 lg:w-10/12 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md p-6">
                <div class="grid md:grid-cols-3 grid-cols-1 gap-[24px]">

                    <!-- includes/Landings/index-hospital/emergency.blade.php -->
                    @include('includes.Landings.index-hospital.emergency')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-hospital/treatments.blade.php -->
        @include('includes.Landings.index-hospital.treatments')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Medical Services</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-hospital/medical-services.blade.php -->
            @include('includes.Landings.index-hospital.medical-services')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<section class="relative md:py-24 py-16 md:pb-0 pb-0 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Doctors Time Table</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container-fluid relative">
        <div class="grid grid-cols-1 mt-8">
            <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900">
                <table class="w-full text-sm text-start">
                    <thead class="text-lg">

                        <!-- includes/Landings/index-hospital/day.blade.php -->
                        @include('includes.Landings.index-hospital.day')

                    </thead>

                    <!-- includes/Landings/index-hospital/time-table.blade.php -->
                    @include('includes.Landings.index-hospital.time-table')

                </table>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Doctors Team</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-hospital/team2.blade.php -->
            @include('includes.Landings.index-hospital.team2')

        </div><!--end grid-->
    </div><!--end container-->
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
                            <img src="{{ asset('assets/images/hospital/bg.jpg') }}" class="rounded-md shadow-lg" alt="">
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
                            <div class="grid md:grid-cols-3 grid-cols-1 items-center">

                                <!-- includes/Landings/index-hospital/counter9.blade.php -->
                                @include('includes.Landings.index-hospital.counter9')

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
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Patients Says</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
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
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Latest News & Blogs</h3>

            <p class="text-slate-400 max-w-xl mx-auto"></p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            
            <!-- includes/Landings/index-seo/blog2.blade.php -->
            @include('includes.Landings.index-seo.blog2')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Business Partner -->
<section class="py-6 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection