<!-- resources/views/index-seo.blade.php -->
@extends('layouts.main')

@section('title', 'index-Seo Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative md:py-64 py-36 items-center bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/bg-seo.png') }}');">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center text-center">
            <div class="">
                <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">All-in-one SEO <span class="typewrite" data-period="2000" data-type='[ "Plugin", "Website", "Toolkit", "Agency" ]'> <span class="wrap"></span> </span></h1>
                <p class="text-lg max-w-xl mx-auto">Beatae cum eius, animi itaque aliquid ducimus facere dicta, vitae ipsam maiores nam sit blanditiis, quisquam expedita?</p>
            
                <div class="subcribe-form mt-6 mb-3">
                    <form class="relative max-w-xl mx-auto">
                        <input type="url" id="site-url" name="url" class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white/60 dark:bg-slate-900/60 shadow-sm dark:shadow-gray-800" placeholder="http://www.yourdomain.com">
                        <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Start Free Trial</button>
                    </form><!--end form-->
                </div>

                <span class="font-medium">Looking for help? <a href="" class="text-indigo-600">Get in touch with us</a></span>
            </div>
        </div>
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

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container relative">
        <div class="md:flex justify-center">
            <div class="lg:w-3/4 md:w-full relative -mt-16">
                <div class="p-6 bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800">
                    <div class="md:flex justify-center">

                        <!-- includes/Landings/index-seo/backlinks.blade.php -->
                        @include('includes.Landings.index-seo.backlinks')

                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Services</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold bg-gradient-to-r from-red-600 to-indigo-600 text-transparent bg-clip-text">We are SEO Professionals</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Your content is an integral part of your SEO efforts and online marketing strategy</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">

            <!-- includes/Landings/index-seo/services.blade.php -->
            @include('includes.Landings.index-seo.services')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="realtive md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">A Performance-driven Marketing Agency</h3>

            <p class="text-slate-400 max-w-xl mx-auto">We offer flexible and comprehensive online marketing plans and strategies so you can take advantage of our full spectrum of marketing services.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-5">
                <div class="sticky top-20">
                    <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">

                        <!-- includes/Landings/index-seo/tab.blade.php -->
                        @include('includes.Landings.index-seo.tab')

                    </ul>
                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-7">
                <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">

                    <!-- includes/Landings/index-seo/agency.blade.php -->
                    @include('includes.Landings.index-seo.agency')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="realtive md:py-24 py-16">
    <div class="container relative">

        <!-- includes/Landings/index-seo/history.blade.php -->
        @include('includes.Landings.index-seo.history')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Loved by businesses worldwide</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-seo/reviews4.blade.php -->
            @include('includes.Landings.index-seo.reviews4')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="md:col-span-6">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Reads Our Latest <br> News & Blog</h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-seo/blog2.blade.php -->
            @include('includes.Landings.index-seo.blog2')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-seo/contact-us.blade.php -->
        @include('includes.Landings.index-seo.contact-us')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection