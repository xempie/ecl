<!-- resources/views/property-listing.blade.php -->
@extends('layouts.main')

@section('title', 'Property-Listing Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-36 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/real/bg/01.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Grid View Layout</h3>
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
<div class="container relative -mt-16 z-1">
    <div class="grid grid-cols-1">
        <div class="p-6 bg-white dark:bg-slate-900 rounded-md shadow-md dark:shadow-gray-800">
            <form action="#">
                <div class="registration-form relative text-slate-900 text-start">
                    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6 lg:divide-x-[1px] lg:divide-gray-200 lg:dark:divide-gray-700">
                        <div class="filter-search-form relative">
                            <i class="uil uil-search absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                            <input name="name" type="text" id="job-keyword" class="form-input lg:rounded-t-sm lg:rounded-e-none lg:rounded-b-none lg:rounded-s-sm text-slate-400 lg:outline-0 w-full filter-input-box bg-gray-50 dark:bg-slate-800 border-0 focus:ring-0" placeholder="Search your keaywords">
                        </div>

                        <div class="filter-search-form relative">
                            <i class="uil uil-estate absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                            <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory" aria-label="Default select example">
                                <option>Houses</option>
                                <option>Apartment</option>
                                <option>Offices</option>
                                <option>Townhome</option>
                            </select>
                        </div>
                    
                        <div class="filter-search-form relative">
                            <i class="uil uil-usd-circle absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                            <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price" aria-label="Default select example">
                                <option>Min Price</option>
                                <option>500</option>
                                <option>1000</option>
                                <option>2000</option>
                                <option>3000</option>
                                <option>4000</option>
                                <option>5000</option>
                                <option>6000</option>
                            </select>
                        </div>
                    
                        <div class="filter-search-form relative">
                            <i class="uil uil-usd-circle absolute top-[48%] -translate-y-1/2 start-3 z-1 text-indigo-600 text-[20px]"></i>
                            <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price" aria-label="Default select example">
                                <option>Max Price</option>
                                <option>500</option>
                                <option>1000</option>
                                <option>2000</option>
                                <option>3000</option>
                                <option>4000</option>
                                <option>5000</option>
                                <option>6000</option>
                            </select>
                        </div>

                        <div class="lg:mt-6">
                            <input type="submit" id="search" name="search" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white searchbtn w-full !h-12 rounded" value="Search">
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </form>
        </div>
    </div><!--end grid-->
</div><!--end container-->
<!-- End Hero -->

<!-- Start -->
<section class="relative lg:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

            <!-- includes/Pages/Real-Estate/property-listing/properties1.blade.php -->
            @include('includes.Pages.Real-Estate.property-listing.properties1')

        </div><!--en grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                
                <!-- includes/Pages/Blog/blog-sidebar/nav.blade.php -->
                @include('includes.Pages.Blog.blog-sidebar.nav')

            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer')

@endsection