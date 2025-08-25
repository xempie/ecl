<!-- resources/views/index-cafe.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Cafe Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative py-40 md:h-screen flex items-center overflow-hidden" id="home">
    <div class="absolute inset-0 bg-gradient-to-t from-transparent to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 mt-10 text-center">
            <div class="md:-rotate-12 -rotate-6">
                <span class="!font-kaushan text-white/70 block mb-2">Since 1993</span>
                <span class="!font-kaushan text-white font-semibold lg:text-9xl lg:leading-tight md:text-8xl md:leading-tight text-6xl leading-tight block">Great Coffee <br> Good Vibes</span>
            
                <div class="mt-8">
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Explore More <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal !font-ebgaramond font-medium">Welcome to Techwind Cafe</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Every cup is a performance of thoroughly pressured hot water through the finest delicious and finely ground compacted coffee.</p>
        </div><!--end grid-->

            <!-- includes/Landings/index-cafe/cafe.blade.php -->
            @include('includes.Landings.index-cafe.cafe')

    </div><!--end container-->
</section><!--ens section-->
<!-- End -->

<!-- Start -->
<section class="relative md:pt-0 pt-48 bg-center bg-no-repeat bg-cover overflow-hidden jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/cafe/cta.jpg') }}');">
    <div class="container relative">
        <div class="md:flex justify-end">
            <div class="md:w-1/2 md:py-36 py-10 lg:px-16 md:px-10 px-6 bg-white dark:bg-slate-900 text-center">
                <img src="{{ asset('assets/images/cafe/icons/coffee.svg') }}" class="size-16 p-3 rounded-full shadow-md dark:shadow-gray-800 bg-white mx-auto" alt="">

                <h4 class="!font-ebgaramond text-3xl font-medium mt-4">Happy Hours</h4>

                <p class="text-indigo-600 !font-ebgaramond text-lg font-medium mt-2">Starts at 3pm</p>

                <p class="text-slate-400 mt-4">The restaurant will open at 3pm for happy hour and dinner service starting at 5pm. We will continue to offer brunch on weekends from 10am-3pm with bottomless mimosas. We will also continue with our late night lounge on Friday and Saturdays until 2am.</p>
            
                <div class="mt-4">
                    <a href="tel:+152534-468-854" class="relative inline-block font-semibold tracking-wide align-middle text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out !font-ebgaramond text-lg">+152 534-468-854</a>
                </div>

                <div class="mt-8">
                    <a href="" class="py-2.5 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-lg text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Book Now</a>
                </div>
            </div>
        </div><!--end content-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal !font-ebgaramond font-medium">Explore Our Menu</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Every cup is a performance of thoroughly pressured hot water through the finest delicious and finely ground compacted coffee.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-cafe/our-menu.blade.php -->
            @include('includes.Landings.index-cafe.our-menu')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal !font-ebgaramond font-medium">Customer Reviews</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Every cup is a performance of thoroughly pressured hot water through the finest delicious and finely ground compacted coffee.</p>
        </div><!--end grid-->

        <div class="flex justify-center relative mt-8">
            <div class="relative lg:w-1/2 md:w-3/4 w-full">
                <div class="tiny-one-item">
                    
                    <!-- includes/Landings/index-software/reviews5.blade.php -->
                    @include('includes.Landings.index-software.reviews5')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-cafe/quality.blade.php -->
        @include('includes.Landings.index-cafe.quality')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal !font-ebgaramond font-medium">Latest News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Every cup is a performance of thoroughly pressured hot water through the finest delicious and finely ground compacted coffee.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-cafe/blog5.blade.php -->
            @include('includes.Landings.index-cafe.blog5')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Insta Post Start -->
<div class="container-fluid relative">
    <div class="grid grid-cols-1 relative">
        <div class="tiny-twelve-item">

            <!-- includes/Landings/index-cafe/insta-post1.blade.php -->
            @include('includes.Landings.index-cafe.insta-post1')

        </div>

            <!-- includes/Landings/index-restaurent/follow-now.blade.php -->
            @include('includes.Landings.index-restaurent.follow-now')
        
    </div><!--end grid-->
</div><!--end container-->
<!-- Insta Post End -->

@include('includes.footer3')

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        easy_background("#home",
            {
                slide: ["{{ asset('assets/images/cafe/bg1.jpg') }}", "{{ asset('assets/images/cafe/bg2.jpg') }}", "{{ asset('assets/images/cafe/bg3.jpg') }}"],
                delay: [5000, 5000, 5000],
                transition_timing: "ease-in-out",
                transition_duration: 1000
            }
        );
    });
</script>
@endpush