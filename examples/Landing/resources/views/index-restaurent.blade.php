<!-- resources/views/index-restaurent.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Restaurent Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="flex md:h-screen py-36 items-center bg-no-repeat bg-fixed bg-top bg-cover" style="background-image: url('{{ asset('assets/images/food/bg01.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-30"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center text-center">
            <div class="">
                <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-6xl text-white mb-5">Amazing Food, Fresh <br> Products & Wine</h1>
                <p class="text-white/70 text-lg max-w-xl mx-auto">Beatae cum eius, animi itaque aliquid ducimus facere dicta, vitae ipsam maiores nam sit blanditiis, quisquam expedita?</p>
            
                <div class="mt-8">
                    <a href="#table" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="uil uil-restaurant"></i> Book A Table</a>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">

        <!-- includes/Landings/index-restaurent/about2.blade.php -->
        @include('includes.Landings.index-restaurent.about2')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">

            <!-- includes/Landings/index-restaurent/food.blade.php -->
            @include('includes.Landings.index-restaurent.food')

        </div>
    </div>
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative py-36 bg-no-repeat bg-fixed bg-top bg-cover" style="background-image: url('{{ asset('assets/images/food/menu.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-slate-900/50 to-slate-900"></div>
    <div class="absolute bottom-0 start-0 end-0 text-center px-3">
        <h5 class="text-slate-400 text-xl leading-normal font-semibold">Our Menu</h5>
        <h4 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white mb-5">Choose your mixture & order now!</h4>
    </div>
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-12 bg-no-repeat bg-top bg-cover" style="background-image: url('{{ asset('assets/images/food/food-menu.png') }}');">
    <div class="container relative">
        <div class="grid grid-cols-1 items-center gap-[30px]">
            <div class="filters-group-wrap text-center">
                <div class="filters-group">

                    <!-- includes/Landings/index-restaurent/group.blade.php -->
                    @include('includes.Landings.index-restaurent.group')

                </div>
            </div>
        </div><!--grid-->
    </div><!--end container-->

    <div class="container relative mt-8">   
        <div id="grid" class="md:flex justify-center">

            <!-- includes/Landings/index-restaurent/breakfast.blade.php -->
            @include('includes.Landings.index-restaurent.breakfast')

        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Booking Table -->
<section class="relative md:py-24 py-16 bg-no-repeat bg-fixed bg-top bg-cover" style="background-image: url('{{ asset('assets/images/food/cta.jpg') }}');" id="table">
    <div class="absolute inset-0 bg-slate-900/50"></div>
    <div class="container relative">
        <div class="flex justify-end">
            <div class="lg:w-1/2 md:w-2/3">

                <!-- includes/Landings/index-restaurent/reservation.blade.php -->
                @include('includes.Landings.index-restaurent.reservation')

            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Booking Table -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-indigo-600/5">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Happy Client's</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Splash your dream color Bring your home to lively Colors. We make it a priority to offer flexible services to accomodate your needs</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                
                <!-- includes/Landings/index-saas/reviews2.blade.php -->
                @include('includes.Landings.index-saas.reviews2')

            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Insta Post Start -->
<div class="container-fluid relative">
    <div class="grid grid-cols-1 relative">
        <div class="tiny-twelve-item">
            
            <!-- includes/Landings/index-restaurent/insta-post.blade.php -->
            @include('includes.Landings.index-restaurent.insta-post')

        </div>

            <!-- includes/Landings/index-restaurent/follow-now.blade.php -->
            @include('includes.Landings.index-restaurent.follow-now')

    </div><!--end grid-->
</div><!--end container-->
<!-- Insta Post End -->


    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer3')

@endsection