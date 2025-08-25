<!-- resources/views/index-gym.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Gym Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="flex md:h-screen py-36 items-center bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/gym/bg1.jpg') }}');">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Build Your Body Strong</h3>

            <p class="text-slate-300 text-lg max-w-xl mx-auto">Push your fitness further with our mix of facilities and we'll support you with advice on new and better ways to train.</p>
        
            <div class="mt-8">
                <a href="" data-type="youtube" data-id="S_CGed6E610" class="py-2 px-5 inline-block font-semibold tracking-wide border duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full align-middle lightbox p-1 ps-4">3:07 Min video <span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-full ms-2"><i class="mdi mdi-play"></i></span></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- FEATURES START -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-2 duration-500 sm:-mt-[200px] -mt-[140px] m-0">
                <div class="grid md:grid-cols-3 grid-cols-1 gap-[24px]">

                    <!-- includes/Landings/index-gym/features5.blade.php -->
                    @include('includes.Landings.index-gym.features5')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-gym/fitness.blade.php -->
        @include('includes.Landings.index-gym.fitness')

    </div><!--end container-->
    
    <div class="container-fluid relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h5 class="font-semibold text-base text-indigo-600 mb-2">Gallery</h5>
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Take a Sneak Peek Inside</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Push your fitness further with our mix of facilities and we'll support you with advice on new and better ways to train.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-5 grid-cols-2 justify-center mx-auto mt-8">

            <!-- includes/Landings/index-gym/gallery.blade.php -->
            @include('includes.Landings.index-gym.gallery')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h5 class="font-semibold text-base text-indigo-600 mb-2">Timetable</h5>
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Gym Schedule</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Push your fitness further with our mix of facilities and we'll support you with advice on new and better ways to train.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 items-center mt-8">
            <div class="filters-group-wrap text-center">
                <div class="filters-group">

                    <!-- includes/Landings/index-gym/filters-group2.blade.php -->
                    @include('includes.Landings.index-gym.filters-group2')

                </div>
            </div>
        </div><!--grid-->

        <div id="grid" class="md:flex justify-center mx-auto mt-4">

            <!-- includes/Landings/index-gym/timetable.blade.php -->
            @include('includes.Landings.index-gym.timetable')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h5 class="font-semibold text-base text-indigo-600 mb-2">Team</h5>
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Gym Trainer</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Push your fitness further with our mix of facilities and we'll support you with advice on new and better ways to train.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-gym/team.blade.php -->
            @include('includes.Landings.index-gym.team')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="py-20 w-full table relative bg-center bg-no-repeat bg-fixed bg-cover" style="background-image: url('{{ asset('assets/images/gym/cta.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Get Membership for Speak Fitness</h3>

            <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            
            <div class="mt-6">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Buy Membership</a>
            </div>

            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-md dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
            </a>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- end -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h5 class="font-semibold text-base text-indigo-600 mb-2">Testimonial</h5>
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Trusted by <br> Our Customers</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Push your fitness further with our mix of facilities and we'll support you with advice on new and better ways to train.</p>
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
            <h5 class="font-semibold text-base text-indigo-600 mb-2">Blogs</h5>
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Blogs or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Push your fitness further with our mix of facilities and we'll support you with advice on new and better ways to train.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-gym/blog6.blade.php -->
            @include('includes.Landings.index-gym.blog6')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer4')

@endsection