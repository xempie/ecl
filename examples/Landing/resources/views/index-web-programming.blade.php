<!-- resources/views/index-web-programming.blade.php -->
@extends('layouts.main')

@section('title', 'index-Web-Programming Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full lg:py-40 md:py-36 pt-36 pb-24 overflow-hidden bg-white dark:bg-slate-900">
    <span class="absolute blur-[200px] size-[600px] rounded-full top-1/2 -translate-y-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2 bg-indigo-600/50"></span>
    <div class="container relative z-1">
        <div class="grid md:grid-cols-2 items-center gap-[30px]">
            <div class="">
                <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-6xl mb-5 text-slate-900 dark:text-white relative">Hellow! <br> We Are A <span class="after:absolute after:end-0 after:start-0 after:bottom-4 after:lg:h-4 after:h-3 after:w-auto after:bg-indigo-600/30 relative text-indigo-600"><span class="typewrite" data-period="2000" data-type='[ "Talented", "Creative", "Skilled" ]'> <span class="wrap"></span> </span></span> <br> Programmer.</h4>
                <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
            
                <div class="relative mt-8">
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2">Learn More</a>
                    <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="mdi mdi-play text-xl align-middle"></i></a><small class="text-sm font-semibold uppercase align-middle ms-2">Watch Now</small>
                </div>
            </div>
            <div class="relative">
                <div class="flex justify-center">
                    <div class="relative overflow-hidden rounded-full md:w-3/4">
                        <img src="{{ asset('assets/images/vector01.png') }}" alt="">
                        <div class="absolute inset-0 bg-gradient-to-tl to-indigo-600/30 from-yellow-600/30"></div>
                    </div>
                </div>

                <div class="absolute -top-8 start-0 mover">
                    <img src="{{ asset('assets/images/programming/1.jpg') }}" class="rounded-2xl" alt="">
                </div>

                <div class="absolute -bottom-8 end-0 mover-2">
                    <img src="{{ asset('assets/images/programming/2.jpg') }}" class="rounded-2xl" alt="">
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Business Partner -->
<section class="py-6 border-t border-b border-gray-100 dark:border-gray-800">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start -->
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">

        <!-- includes/Landings/index-web-programming/professional.blade.php -->
        @include('includes.Landings.index-web-programming.professional')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Services of Programmer</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-web-programming/services2.blade.php -->
            @include('includes.Landings.index-web-programming.services2')

        </div>
    </div>
</section>
<!-- End -->

<!-- Start -->
<section class="py-20 w-full table relative bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/programming/bg.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-tl to-indigo-600/75 from-yellow-600/75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-4xl text-3xl text-white font-semibold">We Are A Talented Developer or Programmer.</h3>

            <p class="text-white/70 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        
            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
            </a>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Frequently Asked Questions</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-software/frequently-asked2.blade.php -->
            @include('includes.Landings.index-software.frequently-asked2')
        
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="md:col-span-6">
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
</section>
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection