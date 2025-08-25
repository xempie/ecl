<!-- resources/views/index-real-estate.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Real-Estate Page')

@section('content')

@include('includes.navbar')

<!-- Hero Start -->
<section class="relative mt-20">
    <div class="container-fluid relative md:mx-4 mx-2">
        <div class="relative pt-48 pb-60 table w-full rounded-2xl shadow-md overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="image-wrap absolute -top-[350px] -bottom-[350px] -start-[100px] -end-[100px] min-w-full w-auto min-h-full h-auto overflow-hidden m-auto" id="home"></div>
            </div>
            <div class="absolute inset-0 bg-slate-900/60"></div>
            <div class="container relative">
                <div class="grid grid-cols-1">
                    <div class="md:text-start text-center">
                        <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Discover Most Suitable <br> Properties</h1>
                        <p class="text-white/70 text-xl max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </div>
    </div><!--end Container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative -mt-32">
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
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-real-estate/efficiency.blade.php -->
        @include('includes.Landings.index-real-estate.efficiency')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">How It Works</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-real-estate/how-it-works.blade.php -->
            @include('includes.Landings.index-real-estate.how-it-works')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Featured Properties</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-real-estate/properties.blade.php -->
            @include('includes.Landings.index-real-estate.properties')

        </div><!--en grid-->

        <div class="md:flex justify-center text-center mt-6">
            <div class="md:w-full">
                <a href="{{ url('/property-listing') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View More Properties <i class="uil uil-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 lg:pt-24 pt-16">
        <div class="absolute inset-0 opacity-25 dark:opacity-50 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/map.png') }}');"></div>
        <div class="relative grid grid-cols-1 pb-8 text-center z-1">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">Trusted by more than 10K users</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="relative grid md:grid-cols-3 grid-cols-1 items-center mt-8 gap-[30px] z-1">
            
            <!-- includes/Landings/index-it-solution-two/counter3.blade.php -->
            @include('includes.Landings.index-it-solution-two.counter3')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Client Say ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="flex justify-center relative mt-8">
            <div class="relative w-full">
                <div class="tiny-three-item">

                    <!-- includes/Landings/index-real-estate/reviews6.blade.php -->
                    @include('includes.Landings.index-real-estate.reviews6')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Home/get-in-touch.blade.php -->
        @include('includes.Home.get-in-touch')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        easy_background("#home",
            {
                slide: ["{{ asset('assets/images/real/bg/01.jpg') }}", "{{ asset('assets/images/real/bg/02.jpg') }}", "{{ asset('assets/images/real/bg/03.jpg') }}"],
                delay: [4000, 4000, 4000],
                transition_timing: "ease-in-out",
                transition_duration: 1000
            }
        );
    });
</script>
@endpush