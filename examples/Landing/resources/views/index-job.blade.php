<!-- resources/views/index-job.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Job Page')

@section('content')

@include('includes.navbar3')

<!-- Start Hero -->
<section class="md:h-screen py-36 h-auto relative flex items-center background-effect overflow-hidden bg-cover" style="background-image: url('{{ asset('assets/images/job/job.jpg') }}');">
    <div class="container-fluid">
        <div class="absolute inset-0 z-0 bg-[url('../../assets/images/job/curve-shape.png')] dark:bg-[url('../../assets/images/job/curve-shape-dark.png')] bg-cover"></div>
    </div><!--end container-->

    <div class="container relative z-1">
        <div class="grid grid-cols-1 mt-10">
            <h4 class="lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 font-bold">Make The Best Move to <br> Choose Your <span class="text-indigo-600">New Job</span></h4>
            <p class="text-slate-400 text-lg max-w-xl">Find Jobs, Employment & Career Opportunities. Some of the companies we've helped recruit excellent applicants over the years.</p>
        
            <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
                <div class="lg:col-span-10 mt-8">
                    <div class="bg-white dark:bg-slate-900 border-0 shadow-sm rounded p-3">
                        <form action="#">
                            <div class="registration-form relative text-slate-900 text-start">
                                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6 lg:divide-x-[1px] lg:divide-gray-200 lg:dark:divide-gray-700">
                                    <div class="filter-search-form relative">
                                        <i class="uil uil-briefcase-alt absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                                        <input name="name" type="text" id="job-keyword" class="form-input lg:rounded-t-sm lg:rounded-e-none lg:rounded-b-none lg:rounded-s-sm text-slate-400 lg:outline-0 w-full filter-input-box bg-gray-50 dark:bg-slate-800 border-0 focus:ring-0" placeholder="Search your keaywords">
                                    </div>

                                    <div class="filter-search-form relative">
                                        <i class="uil uil-map-marker absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                                        <select class="form-select" data-trigger name="choices-location" id="choices-location" aria-label="Default select example">
                                            <option value="AF">Afghanistan</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="GM">Gambia</option>
                                        </select>
                                    </div>
                                
                                    <div class="filter-search-form relative">
                                        <i class="uil uil-briefcase-alt absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                                        <select class="form-select" data-trigger name="choices-type" id="choices-type" aria-label="Default select example">
                                            <option selected="" value="1">Full Time</option>
                                            <option value="2">Part Time</option>
                                            <option value="3">Freelancer</option>
                                            <option value="4">Remote Work</option>
                                            <option value="5">Office Work</option>
                                        </select>
                                    </div>

                                    <input type="submit" id="search" name="search" style="height: 60px;" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white searchbtn lg:rounded-t-none lg:rounded-e-sm lg:rounded-b-sm lg:rounded-s-none rounded-lg w-full" value="Search">
                                </div><!--end grid-->
                            </div><!--end container-->
                        </form>
                    </div>
                </div><!--ed col-->
            </div><!--end grid-->

            <div class="mt-6">
                <span class="text-slate-400"><span class="text-slate-900 dark:text-white">Popular Searches :</span> Designer Developer Web IOS PHP Senior Engineer</span>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute inset-0 bg-indigo-600/5"></div>

        <!-- includes/Landings/index-job/logo.blade.php -->
        @include('includes.Landings.index-job.logo')

</section><!--end section-->
<div class="relative">
    <div class="absolute block w-full h-auto bottom-[25px] z-1 start-0">
        <a href=""><i class="mdi mdi-arrow-down absolute top-0 start-0 end-0 text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 size-12 mx-auto shadow-md dark:shadow-gray-800"></i></a>
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
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Search by Categories</h3>
                <p class="text-slate-400 max-w-xl">Search your career opportunity with our categories</p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">All Categories <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative">
        <div class="grid grid-cols-1 relative">
            <div class="tiny-five-item">

                <!-- includes/Landings/index-job/categories.blade.php -->
                @include('includes.Landings.index-job.categories')

            </div>
        </div><!--grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
            <div class="md:col-span-12 text-center">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">All Categories <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">

        <!-- includes/Landings/index-job/largest-job.blade.php -->
        @include('includes.Landings.index-job.largest-job')

    </div><!--end container-->

    <div class="container relative mt-12">
        <div class="grid grid-cols-2 md:grid-cols-4">
            
            <!-- includes/Landings/index-job/counter6.blade.php -->
            @include('includes.Landings.index-job.counter6')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Popular Jobs</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-job/popular-jobs.blade.php -->
            @include('includes.Landings.index-job.popular-jobs')

        </div><!--end grid-->
        
        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <a href="{{ url('/page-job-grid') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More Jobs <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                
                <!-- includes/Landings/index-saas/reviews2.blade.php -->
                @include('includes.Landings.index-saas.reviews2')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer5')

@endsection