<!-- resources/views/index-marketing.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Marketing Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full md:py-44 py-36">
    <div class="absolute inset-0 bg-indigo-600/5"></div>
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="md:me-6">
                    <span class="text-indigo-600 font-medium">Techwind Marketing</span>
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Increase Your Business <br> With Techwind</h4>
                    <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                
                    <div class="subcribe-form mt-6 mb-3">
                        <form class="relative max-w-xl">
                            <input type="email" id="subcribe" name="email" class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800" placeholder="Your Email Address :">
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Try it for free <i class="uil uil-arrow-right"></i></button>
                        </form><!--end form-->
                    </div>

                    <span class="text-slate-400 font-medium">Looking for help? <a href="" class="text-indigo-600">Get in touch with us</a></span>
                </div>
            </div><!--end col-->

            <div class="md:col-span-5">
                <div class="relative">
                    <img src="{{ asset('assets/images/marketing.png') }}" alt="">
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

<section class="py-10 bg-indigo-600">
    <div class="container relative">
        <div class="grid grid-cols-2 md:grid-cols-4">

            <!-- includes/Landings/index-marketing/counter.blade.php -->
            @include('includes.Landings.index-marketing.counter')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px] relative">
            <div class="lg:col-span-8 md:col-span-12">
                <div class="grid grid-cols-1 pb-8">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Instant Smart Solutions <br> With Techwind</h3>

                    <p class="text-slate-400 max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                </div><!--end grid-->
            
                <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

                    <!-- includes/Landings/index-marketing/solutions.blade.php -->
                    @include('includes.Landings.index-marketing.solutions')

                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-12">
                <div class="grid lg:grid-cols-1 md:grid-cols-2 grid-cols-1 gap-[30px]">

                    <!-- includes/Landings/index-marketing/solutions2.blade.php -->
                    @include('includes.Landings.index-marketing.solutions2')

                </div>
            </div>

            <div class="overflow-hidden after:content-[''] after:absolute after:h-40 after:w-40 after:bg-red-600/5 after:top-2/4 after:start-0 after:-z-1 after:rounded-3xl after:animate-[spin_10s_linear_infinite]"></div>
            <div class="overflow-hidden after:content-[''] after:absolute after:size-[512px] after:bg-indigo-600/5 after:top-1/4 after:end-0 after:-z-1 after:rounded-full"></div>
        </div><!--grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-marketing/effective.blade.php -->
        @include('includes.Landings.index-marketing.effective')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-marketing/track.blade.php -->
        @include('includes.Landings.index-marketing.track')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
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
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">

            <!-- includes/Landings/index-marketing/contact.blade.php -->
            @include('includes.Landings.index-marketing.contact')
        
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">

            <!-- includes/Landings/index-marketing/phone.blade.php -->
            @include('includes.Landings.index-marketing.phone')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection