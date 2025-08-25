<!-- resources/views/page-job-grid.blade.php -->
@extends('layouts.main')

@section('title', 'Page-Job-Grid Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/job/job.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-4 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Job Listings</h3>

            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/index-job') }}">Job</a></li>
                <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">All Jobs</li>
            </ul>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
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
        <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
            <div class="lg:col-start-2 lg:col-span-10">
                <div class="bg-white dark:bg-slate-900 border-0 shadow-sm dark:shadow-gray-800 rounded p-3 -mt-[150px]">
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
                                    <select class="form-select " data-trigger name="choices-type" id="choices-type" aria-label="Default select example">
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
        </div><!--grid-->
    </div><!--end container-->

    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Pages/Job-Careers/page-job-grid/grids.blade.php -->
            @include('includes.Pages.Job-Careers.page-job-grid.grids')

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                
                <!-- includes/Landings/nft-creator-profile/navigation.blade.php -->
                @include('includes.Landings.nft-creator-profile.navigation')

            </div>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

@include('includes.footer5')

@endsection