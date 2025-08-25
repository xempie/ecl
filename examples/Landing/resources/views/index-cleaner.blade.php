<!-- resources/views/index-cleaner.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Cleaner Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative flex items-center w-full py-36 lg:py-0 lg:h-screen" id="home">
    <div class="absolute inset-0 bg-yellow-400 -z-2"></div>
    <div class="absolute inset-0 bg-center bg-no-repeat bg-cover -z-1" style="background-image: url('{{ asset('assets/images/cleaner/bg.png') }}');"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-transparent"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-14">
            <h5 class="text-lg text-white font-medium mb-3">Your Home is Your Heaven</h5>
            <h3 class="font-bold lg:leading-normal leading-normal text-5xl lg:text-7xl mb-5 text-white">Clean Your Way to Happiness</h3>

            <p class="text-slate-300 text-lg max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
        
            <div class="mt-8">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-yellow-500 hover:bg-yellow-600 border-yellow-500 hover:border-yellow-600 text-white rounded-md">Get an Quote</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative pb-10 overflow-hidden">

        <!-- includes/Landings/index-cleaner/clean.blade.php -->
        @include('includes.Landings.index-cleaner.clean')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Cleaning Services</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">

            <!-- includes/Landings/index-cleaner/cleaning-services.blade.php -->
            @include('includes.Landings.index-cleaner.cleaning-services')

        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="container relative mt-6">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">

            <!-- includes/Landings/index-cleaner/business-partner6.blade.php -->
            @include('includes.Landings.index-cleaner.business-partner6')

        </div><!--end grid-->
    </div><!--end container-->
</section>
<!-- End -->

<!-- Start -->
<section class="py-20 w-full table relative bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/cleaner/bg.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/75"></div>
    <div class="container relative">
        <div class="relative grid md:grid-cols-3 grid-cols-1 items-center mt-8 gap-[30px] z-1">

            <!-- includes/Landings/index-cleaner/counter5.blade.php -->
            @include('includes.Landings.index-cleaner.counter5')

        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Featured Services</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-cleaner/featured.blade.php -->
            @include('includes.Landings.index-cleaner.featured')

        </div><!--end grid-->
    </div><!--end container-->

    <!-- Team -->
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Expert Team</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-cleaner/team1.blade.php -->
            @include('includes.Landings.index-cleaner.team1')

        </div><!--end grid-->
    </div><!--end container-->
    <!-- team -->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-cleaner/blog8.blade.php -->
            @include('includes.Landings.index-cleaner.blog8')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection        

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        easy_background("#home",
            {
                slide: ["{{ asset('assets/images/cleaner/bg1.png') }}", "{{ asset('assets/images/cleaner/bg2.png') }}", "{{ asset('assets/images/cleaner/bg3.png') }}"],
                delay: [4000, 4000, 4000],
                transition_timing: "ease-in-out",
                transition_duration: 1000
            }
        );
    });
</script>
@endpush