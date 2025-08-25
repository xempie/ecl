<!-- resources/views/index-hosting.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Hosting Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-52 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/hosting/bg-hosting.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h5 class="text-lg text-white font-medium mb-3">Bring your ideas to life</h5>
            <h3 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Powerful Web Hosting Services</h3>

            <p class="text-slate-300 text-lg max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        
            <div class="mt-8">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Get Started</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16 pt-5">
    <div class="container-fluid relative">
        <div class="grid grid-cols-1">
            <div class="relative z-2 duration-500 sm:-mt-[200px] -mt-[140px] m-0">
                <div class="grid grid-cols-1 mt-8">
                    <div class="tiny-six-item">

                        <!-- includes/Landings/index-hosting/industry.blade.php -->
                        @include('includes.Landings.index-hosting.industry')

                    </div>
                </div><!--end grid-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 items-end">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Hosting Services</h3>
            <p class="text-slate-400 max-w-xl">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-hosting/services3.blade.php -->
            @include('includes.Landings.index-hosting.services3')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-hosting/quick-responce.blade.php -->
        @include('includes.Landings.index-hosting.quick-responce')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-hosting/enhance-security2.blade.php -->
        @include('includes.Landings.index-hosting.enhance-security2')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<section class="relative md:pt-24 md:pb-36 pt-16 pb-24 bg-indigo-600">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-white">Hosting / Server Rates</h3>

            <p class="max-w-xl mx-auto text-white/70">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="relative z-2 duration-500 sm:-mt-[200px] -mt-[140px] m-0">

                <!-- includes/Landings/index-hosting/server-rates.blade.php -->
                @include('includes.Landings.index-hosting.server-rates')

            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<section class="relative md:py-24 py-16 bg-bottom bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/hosting/bg.png') }}');">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
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
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Frequently Asked Questions</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-hosting/frequently.blade.php -->
            @include('includes.Landings.index-hosting.frequently')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection