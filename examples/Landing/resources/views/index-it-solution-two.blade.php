<!-- resources/views/index-it-solution-two.blade.php -->
@extends('layouts.main')

@section('title', 'Index-It-Solution-two Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-64 ltr:bg-[url('../../assets/images/it/bg.jpg')] rtl:bg-[url('../../assets/images/it/bg-rtl.jpg')] bg-no-repeat sm:bg-left bg-right overflow-hidden bg-cover">
    <div class="container relative z-1">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="md:me-6">
                    <span class="text-xl font-semibold">IT Company</span>
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-6xl mb-5 text-slate-900 dark:text-white"><span class="after:absolute after:end-0 after:start-0 after:bottom-2 after:h-1.5 after:w-auto after:bg-gradient-to-l after:to-indigo-600 after:from-green-600 relative">Consultant</span> & <br> Find Bright <span class="after:absolute after:end-0 after:start-0 after:bottom-2 after:h-1.5 after:w-auto after:bg-gradient-to-l after:to-indigo-600 after:from-green-600 relative">Solutions</span></h4>
                    <p class="text-slate-400 text-lg max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <div class="mt-6">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Contact Us</a>
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white m-1 lightbox"><i data-feather="video" class="size-4"></i></a><span class="font-semibold ms-1 align-middle"></span>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute md:w-3/4 w-full top-1/2 -translate-y-1/2">
        <div class="absolute w-full h-[5000px] bg-slate-50 dark:bg-slate-800 md:opacity-100 opacity-90 top-1/2 -translate-y-1/2 md:-start-[10%] -start-[25%] ltr:rotate-12 rtl:-rotate-12"></div>
        <div class="absolute md:w-48 w-20 h-[5000px] bg-indigo-600 top-1/2 -translate-y-1/2 md:end-[10%] -end-[1%] ltr:rotate-12 rtl:-rotate-12"></div>
    </div>
</section><!--end section-->
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-2 grid-cols-1 pb-8 items-center">
            <div>
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Services</h6>
                <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold mb-4 md:mb-0">It was a very common<br> question that What IT Service<br> We Provide now!</h3>
            </div>
            <p class="text-slate-400 max-w-xl">Explore and learn more about everything from machine learning and global payments to scaling your team.</p>
        </div><!--end grid-->
        

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-it-solution/what-we-do3.blade.php -->
            @include('includes.Landings.index-it-solution.what-we-do3')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-it-solution-two/fast&effective.blade.php -->
        @include('includes.Landings.index-it-solution-two.fast&effective')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-28 w-full table relative bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/cta.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Stop leaving money on the table.</h3>

            <p class="text-white/70 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        
            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
            </a>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container relative lg:pt-24 pt-16">
        <div class="absolute inset-0 opacity-25 dark:opacity-50 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/map.png') }}');"></div>
        <div class="relative grid grid-cols-1 pb-8 text-center z-1">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">We've Built This Site With Content Management In Mind.</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="relative grid md:grid-cols-3 grid-cols-1 items-center mt-8 gap-[30px] z-1">
            
            <!-- includes/Landings/index-it-solution-two/counter3.blade.php -->
            @include('includes.Landings.index-it-solution-two.counter3')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                
                <!-- includes/Landings/index-saas/reviews2.blade.php -->
                @include('includes.Landings.index-saas.reviews2')

            </div>
        </div><!--end grid-->
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
</section><!--end section-->
<!-- End -->

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

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection