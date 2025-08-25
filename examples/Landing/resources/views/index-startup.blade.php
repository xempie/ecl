<!-- resources/views/index-startup.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Startup Page')

@section('content')

@include('includes.navbar3')

<!-- Start Hero -->
<section class="relative md:h-screen flex items-center py-36 before:content-[''] before:absolute before:bottom-40 xl:before:start-[45rem] xl:before:w-[90rem] xl:before:h-[35rem] ltr:before:rotate-[115deg] rtl:before:rotate-[65deg] before:bg-indigo-600 md:before:start-40 before:w-[75rem] before:h-[30rem] after:content-[''] after:absolute xl:after:bottom-96 xl:after:start-[30rem] xl:after:w-[75rem] xl:after:h-40 ltr:after:rotate-[115deg] rtl:after:rotate-[65deg] after:bg-indigo-600/10 after:-z-1 md:after:start-0 before:-start-0 after:-start-40 after:bottom-80 after:w-[75rem] after:h-60 overflow-hidden">
    <div class="absolute inset-0" id="overlay"></div>
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="md:me-6">
                    <img src="{{ asset('assets/images/logo-icon-40.png') }}" class="mb-4" alt="">
                    <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white">Build, Grow, And <br> Manage Your Brand</h4>
                    <p class="text-slate-400 text-lg max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <div class="mt-6">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Learn More</a>
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white m-1 lightbox"><i data-feather="video" class="size-4"></i></a><span class="font-semibold ms-1 align-middle">Watch Now</span>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            
            <!-- includes/Landings/index-startup/support.blade.php -->
            @include('includes.Landings.index-startup.support')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">

        <!-- includes/Landings/index-startup/big-team.blade.php -->
        @include('includes.Landings.index-startup.big-team')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="py-20 w-full table relative bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/digital/bg01.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Stop leaving money on the table.</h3>

            <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        
            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-md dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
            </a>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Services</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-startup/services4.blade.php -->
            @include('includes.Landings.index-startup.services4')

        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base mb-2">Testimonial</h6>
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
    
    <!-- Business Partner -->
    <div class="container relative mt-8">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Landings/index-digital-agency/business-partner5.blade.php -->
        @include('includes.Landings.index-digital-agency.business-partner5')

        </div><!--end grid-->
    </div><!--end container-->
    <!-- Business Partner -->

    <!-- Team -->
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base mb-2">Our Minds</h6>
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Management Team</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-startup/our-minds1.blade.php -->
            @include('includes.Landings.index-startup.our-minds1')

        </div><!--end grid-->
    </div><!--end container-->
    <!-- team -->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base mb-2">Blog</h6>
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-seo/blog2.blade.php -->
            @include('includes.Landings.index-seo.blog2')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer6')

@endsection        

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        easy_background("#overlay",
            {
                slide: ["{{ asset('assets/images/startup/01.png') }}", "{{ asset('assets/images/startup/02.png') }}", "{{ asset('assets/images/startup/03.png') }}"],
                delay: [4000, 4000, 4000],
                transition_timing: "ease-in-out",
                transition_duration: 1000
            }
        );
    });
</script>
@endpush