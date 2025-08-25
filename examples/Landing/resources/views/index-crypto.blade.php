<!-- resources/views/index-crypto.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Crypto Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-52 md:py-64 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/crypto/bg1.jpg') }}');">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <h5 class="font-normal text-lg text-white/50 mb-3">Pay with <span class="typewrite text-white" data-period="2000" data-type='[ "Crypto", "ETH", "BNB", "SOL", "DOT", "NEAR", "CEL" ]'> <span class="wrap"></span> </span></h5>
            <h4 class="text-white font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Building the future <br> of Crypto Revolution.</h4>
            <p class="text-white/70 max-w-xl mb-0">Take full control of your cryptocurrencies and collectibles by storing them on your own device.</p>

            <div class="subcribe-form mt-6 mb-4">
                <form class="relative max-w-xl">
                    <input type="email" id="subcribe" name="email" class="py-4 pe-40 ps-6 w-full h-[50px] outline-none dark:text-white rounded-full bg-white/5 shadow-sm border border-slate-900 text-white" placeholder="Your Email Address :">
                    <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Register Now <i class="uil uil-arrow-right"></i></button>
                </form><!--end form-->
            </div>

            <span class="text-white">Looking for help? <a href="" class="text-amber-500">Get in touch with us</a></span>
        </div>
    </div>
</section><!--end section-->

<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden">
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="p-6 border-t border-dashed border-white/30">
                    <div class="grid grid-cols-12 items-center">
                        <div class="lg:col-span-4 md:col-span-6 col-span-5">
                            <h5 class="text-white/50 text-xl mb-0">Token Popular</h5>
                        </div>

                        <div class="lg:col-span-8 md:col-span-6 col-span-7 relative">
                            <div class="tiny-home-slide-four">

                                <!-- includes/Landings/index-crypto/token.blade.php -->
                                @include('includes.Landings.index-crypto.token')

                            </div>
                        </div>
                    </div><!--end grid-->
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">

        <!-- includes/Landings/index-crypto/choose.blade.php -->
        @include('includes.Landings.index-crypto.choose')

    </div><!--end container-->

    <!-- Partners start -->
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">We featured on popular partners like</h3>
        </div><!--end grid-->

        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">

            <!-- includes/Landings/index-crypto/business-partner7.blade.php -->
            @include('includes.Landings.index-crypto.business-partner7')

        </div><!--end grid-->
    </div><!--end container-->
    <!-- Partners End -->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/crypto/bg2.jpg') }}');">
    <div class="absolute inset-0 bg-indigo-600/90"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-white">Our Benefits</h3>

            <p class="text-white/70 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-crypto/benefits.blade.php -->
            @include('includes.Landings.index-crypto.benefits')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pb-0 pb-0">
    <div class="container relative">

        <!-- includes/Landings/index-crypto/sale-tokens.blade.php -->
        @include('includes.Landings.index-crypto.sale-tokens')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">All your crypto and NFTs in one place</h3>

            <p class="text-slate-400 max-w-xl mx-auto">With Techwind Trade, you can be sure your trading skills are matched with excellent service.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 justify-center mt-2">
            <ul class="list-none text-center">

                <!-- includes/Landings/index-crypto/place.blade.php -->
                @include('includes.Landings.index-crypto.place')

            </ul>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-crypto/confidence.blade.php -->
        @include('includes.Landings.index-crypto.confidence')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Counter Start -->
<section class="relative md:py-24 py-16 bg-center bg-cover" style="background-image: url('{{ asset('assets/images/crypto/cta.jpg') }}');">
    <div class="container relative">
        <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1">

            <!-- includes/Landings/index-crypto/counter10.blade.php -->
            @include('includes.Landings.index-crypto.counter10')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Counter End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What our customer <br> say about us</h3>

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
        <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px]">
            
            <!-- includes/Home/work.blade.php -->
            @include('includes.Home.work')

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