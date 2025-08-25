<!-- resources/views/index-insurance.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Insurance Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full md:py-44 py-36 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="md:me-6">
                    <div class="bg-white dark:bg-slate-900 text-slate-400 py-2 px-4 inline-flex items-center font-medium rounded-full shadow-sm dark:shadow-gray-800"><span class="bg-indigo-600 text-white text-[12px] font-bold px-2.5 py-0 rounded-full me-2">Techwind</span> Get an insurance</div>
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 mt-4">Insurance makes <br> your life your better</h4>
                    <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                
                    <div class="mt-6">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">Request a Quote</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-5">
                <div class="relative">
                    <img src="{{ asset('assets/images/insurance/hero.png') }}" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
                    <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                            class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                            <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container -->
</section><!--end section-->
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 items-end">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold"><span class="text-indigo-600">Get the right protection</span> <br> and move forward</h3>
            <p class="text-slate-400 max-w-xl">Explore and learn more about everything from machine learning and global payments to scaling your team.</p>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container-fluid relative mt-8">
        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-six-item">

                <!-- includes/Landings/index-insurance/protection.blade.php -->
                @include('includes.Landings.index-insurance.protection')

            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Section -->

<!-- Start -->
<section class="py-36 w-full table relative bg-indigo-600">
    <div class="absolute inset-0 bg-bottom bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/insurance/cta.png') }}');"></div>
    <div class="container relative">
        <div class="grid lg:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div class="order-2 lg:order-1 lg:mt-0 mt-8">
                <div class="lg:me-6 text-center lg:text-start">
                    <h3 class="mb-4 md:text-4xl text-3xl lg:leading-normal leading-normal text-white font-semibold">Compare insurance packages <br> and obtain the best offer</h3>

                    <p class="text-white/80 max-w-xl mx-auto lg:ms-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <div class="mt-6">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-slate-100 hover:bg-slate-200 border-slate-100 hover:border-slate-200 text-indigo-600 rounded-md me-2 mt-2">Get a custom plan</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="order-1 lg:order-2">
                <div class="grid grid-cols-2 gap-[30px]">
                    <div class="counter-box text-center">
                        <h1 class="lg:text-5xl text-4xl font-bold mb-2 text-white"><span class="counter-value" data-target="145">101</span>M</h1>
                        <h5 class="text-white text-xl font-medium">Insured Customers</h5>
                    </div><!--end counter box-->
                    
                    <div class="counter-box text-center">
                        <h1 class="lg:text-5xl text-4xl font-bold mb-2 text-white"><span class="counter-value" data-target="99">2</span>%</h1>
                        <h5 class="text-white text-xl font-medium">Clients Satisfaction</h5>
                    </div><!--end counter box-->
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Business Partner -->
<section class="py-6 border-b border-gray-100 dark:border-gray-800">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">

        <!-- includes/Landings/index-insurance/needs.blade.php -->
        @include('includes.Landings.index-insurance.needs')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-5">
                <div class="sticky top-20">

                    <!-- includes/Landings/index-insurance/tab2.blade.php -->
                    @include('includes.Landings.index-insurance.tab2')

                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-7">

                <!-- includes/Landings/index-insurance/wealth.blade.php -->
                @include('includes.Landings.index-insurance.wealth')

            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-20 w-full bg-center bg-no-repeat bg-cover jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/insurance/bg.jpg') }}');">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full sm:w-2/3 md:w-1/2 lg:w-1/3 px-6 py-8 rounded-md shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900">
                <div class="tiny-single-item">
                    
                    <!-- includes/Landings/index-software/reviews5.blade.php -->
                    @include('includes.Landings.index-software.reviews5')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-seo/blog2.blade.php -->
            @include('includes.Landings.index-seo.blog2')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-insurance/sign-up-now.blade.php -->
        @include('includes.Landings.index-insurance.sign-up-now')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection