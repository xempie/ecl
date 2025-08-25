<!-- resources/views/index-payment.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Payment Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative overflow-hidden table w-full bg-slate-50 dark:bg-slate-800 py-28 lg:py-36">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="lg:col-span-5">
                <div class="md:me-6 relative z-2">
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white">Best way to make Online Payments</h4>
                    <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing.</p>
                
                    <div class="subcribe-form mt-6 mb-3">
                        <form class="relative max-w-xl">
                            <input type="email" id="subcribe" name="email" class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800" placeholder="Enter your mail">
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Get started <i class="uil uil-arrow-right"></i></button>
                        </form><!--end form-->
                    </div>

                    <span class="text-slate-400 font-medium">Looking for help? <a href="" class="text-indigo-600">Get in touch with us</a></span>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-7">
                <div class="relative">
                    <img src="{{ asset('assets/images/app/classic02.png') }}" class="mx-auto relative z-1" alt="">
                    <div class="overflow-hidden absolute md:size-[550px] size-[400px] bg-slate-200/40 dark:bg-slate-900/40 bottom-1/2 translate-y-1/2 start-0 end-0 mx-auto z-0 rounded-full"></div>

                    <div class="md:w-72 w-64 absolute md:-top-4 top-0 lg:start-0 md:-start-14 start-0 z-2">
                        <div class="p-5 bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800">
                            <h5 class="text-lg font-semibold mb-2">Your Funds</h5>
                            <span class="text-2xl font-bold">$ 48,756.55</span>

                            <img src="{{ asset('assets/images/payments/fund.png') }}" class="rounded-md mt-5" alt="">
                        </div>
                    </div>

                    <div class="md:w-[350px] w-72 absolute top-1/3 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2 z-3">
                        <div class="p-5 bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800">
                            <img src="{{ asset('assets/images/payments/payment/visaa.png') }}" class="h-16" alt="">

                            <div class="pt-5">
                                <h5 class="text-lg font-bold text-white">•••• •••• •••• 9856</h5>

                                <div class="flex justify-between text-slate-50 mt-4">
                                    <p>Calvin Carlo</p>
                                    <span>Exp: <span>01/26</span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-64 absolute md:-bottom-4 bottom-0 end-0 z-3">
                        <div class="p-5 bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800">
                            <h5 class="font-semibold text-lg">Recent Transections</h5>

                            <ul>

                                <!-- includes/Landings/index-payment/transections.blade.php -->
                                @include('includes.Landings.index-payment.transections')

                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Business Partner -->
<section class="relative md:pt-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Trusted Partners</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Our Trusted Partners</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
           
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Features</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            
            <!-- includes/Landings/index-payment/our-features.blade.php -->
            @include('includes.Landings.index-payment.our-features')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 overflow-hidden">

        <!-- includes/Landings/index-payment/security.blade.php -->
        @include('includes.Landings.index-payment.security')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Client Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                
                <!-- includes/Landings/index-saas/reviews2.blade.php -->
                @include('includes.Landings.index-saas.reviews2')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 z-2">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection