<!-- resources/views/index-modern-saas.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Modern-Saas Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 overflow-hidden bg-gradient-to-b to-transparent from-indigo-600/20 dark:from-indigo-600/40">
    <div class="container relative">
        <div class="relative grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-6">
                <div class="md:me-8">
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white relative">Easy way to <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-indigo-600 relative inline-block"><span class="relative text-white">manage</span></span> your over work</h4>
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

            <div class="md:col-span-6">
                <div class="relative">
                    <div class="relative rounded-xl overflow-hidden shadow-md dark:shadow-gray-800">
                        <div class="w-full py-72 bg-slate-400 bg-cover bg-no-repeat bg-top jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/saas/home.jpg') }}');"></div>
                    </div>

                    <div class="absolute flex justify-between items-center md:bottom-10 bottom-5 md:-start-16 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 w-60 m-3">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center h-[65px] min-w-[65px] bg-indigo-600/5 text-indigo-600 text-center rounded-full me-3">
                                <i data-feather="monitor" class="h-6 w-6"></i>
                            </div>
                            <div class="flex-1">
                                <h6 class="text-slate-400">Visitor</h6>
                                <p class="text-xl font-bold"><span class="counter-value" data-target="4589">2100</span></p>
                            </div>
                        </div>

                        <span class="text-red-600"><i class="uil uil-chart-down"></i> 0.5%</span>
                    </div>

                    <div class="absolute xl:top-20 top-40 xl:-end-20 lg:-end-10 -end-1 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 w-60 m-3">
                        <h5 class="text-xl font-semibold mb-3">Manage Your Software</h5>
                        <div class="flex justify-between mt-3 mb-2">
                            <span class="text-slate-400">Work in progress</span>
                            <span class="text-slate-400">84%</span>
                        </div>
                        <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                            <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 84%"></div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:pb-24 pb-16 overflow-hidden">
    <div class="container relative">

        <!-- includes/Landings/index-modern-saas/everything.blade.php -->
        @include('includes.Landings.index-modern-saas.everything')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Why Everyone Loves Techwind</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-modern-saas/great-product2.blade.php -->
            @include('includes.Landings.index-modern-saas.great-product2')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-modern-saas/get-notified3.blade.php -->
        @include('includes.Landings.index-modern-saas.get-notified3')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
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

    <div class="container relative md:mt-24 mt-16">
        <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px]">
           
            <!-- includes/Home/rates.blade.php -->
            @include('includes.Home.rates')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Frequently Asked Questions</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="relative grid md:grid-cols-12 grid-cols-1 items-center mt-8 gap-[30px]">

            <!-- includes/Landings/index-modern-saas/que-ans.blade.php -->
            @include('includes.Landings.index-modern-saas.que-ans')

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