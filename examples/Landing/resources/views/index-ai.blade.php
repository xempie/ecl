<!-- resources/views/index-ai.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Ai Page')

@section('content')

@include('includes.navbar')

<span class="fixed blur-[200px] lg:size-[600px] size-[400px] rounded-full top-[10%] md:start-[10%] -start-[20%] bg-indigo-600/20"></span>
<span class="fixed blur-[200px] lg:size-[600px] size-[400px] rounded-full bottom-[10%] md:end-[10%] -end-[20%] bg-red-600/20"></span>

<!-- Start Hero -->
<section class="relative table w-full lg:py-40 md:py-36 pt-36 pb-24 overflow-hidden bg-white dark:bg-slate-900">
    <div class="absolute inset-0 bg-repeat opacity-10 dark:opacity-60" style="background-image: url('{{ asset('assets/images/overlay.png') }}');"></div>
    <div class="container relative z-1">
        <div class="relative grid lg:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="lg:col-span-7">
                <div class="lg:me-6 lg:text-start text-center">
                    <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-6xl mb-5">Access powerful AI <br>For <span class="typewrite bg-gradient-to-tl to-indigo-600 from-red-600 text-transparent bg-clip-text" data-period="2000" data-type='[ "Ai Content", "Blog Writing", "Technical Writing" ]'> <span class="wrap"></span> </span></h1>
                    <p class="text-lg max-w-xl lg:ms-0 mx-auto">Beatae cum eius, animi itaque aliquid ducimus facere dicta, vitae ipsam maiores nam sit blanditiis, quisquam expedita?</p>
                
                    <div class="subcribe-form mt-6 mb-3">
                        <form class="relative max-w-md mx-auto lg:ms-0">
                            <div class="relative">
                                <i class="uil uil-envelope text-xl absolute top-3 left-5"></i>
                                <input type="email" id="aiemail" name="email" class="py-4 pe-40 ps-12 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-md bg-white/60 dark:bg-slate-900/60 shadow-sm dark:shadow-gray-800" placeholder="support@techwind.com">
                            </div>
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-md">Sign Up</button>
                        </form><!--end form-->
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-5">
                <div class="relative after:content-[''] after:absolute lg:after:-top-0 after:-top-10 after:-right-32 after:size-[36rem] after:border-2 after:border-dashed after:border-slate-300 dark:after:border-slate-700 after:rounded-full after:animate-[spin_120s_linear_infinite] after:-z-1 before:content-[''] before:absolute lg:before:-top-24 before:-top-36 before:-right-56 before:size-[48rem] before:border-2 before:border-dashed before:border-slate-200 dark:before:border-slate-700 before:rounded-full before:animate-[spin_240s_linear_infinite] before:-z-1">
                    <div class="relative after:content-[''] after:absolute lg:after:-top-0 after:-top-10 after:-right-40 after:size-[36rem] after:bg-gradient-to-tl after:to-indigo-600/30  after:from-red-600/30 dark:after:to-indigo-600/50 dark:after:from-red-600/50 after: after:blur-[200px] after:rounded-full after:-z-1">
                        <img src="{{ asset('assets/images/saas/light-dash.png') }}" class="lg:max-w-none lg:ms-14" alt="">
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Business Partner -->
<section class="pt-6">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">

            <!-- includes/Landings/index-ai/business-partner4.blade.php -->
            @include('includes.Landings.index-ai.business-partner4')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- STart -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-3 grid-cols-1 shadow-sm shadow-gray-300 dark:shadow-gray-500 rounded-lg md:divide-x-[1px] md:divide-y-0 divide-y-[1px] divide-gray-200 dark:divide-gray-700">

            <!-- includes/Landings/index-ai/features3.blade.php -->
            @include('includes.Landings.index-ai.features3')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-ai/single-click.blade.php -->
        @include('includes.Landings.index-ai.single-click')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-ai/write-blog.blade.php -->
        @include('includes.Landings.index-ai.write-blog')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px] relative">
            <div class="lg:col-span-8 md:col-span-12">
                <div class="grid grid-cols-1 pb-8">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">AI Generate Content In Seconds</h3>

                    <p class="text-slate-400 max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                </div><!--end grid-->
            
                <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

                    <!-- includes/Landings/index-ai/content.blade.php -->
                    @include('includes.Landings.index-ai.content')

                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-12">
                <div class="grid lg:grid-cols-1 md:grid-cols-2 grid-cols-1 gap-[30px]">

                    <!-- includes/Landings/index-ai/content2.blade.php -->
                    @include('includes.Landings.index-ai.content2')

                </div>
            </div>
        </div><!--grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container-fluid relative overflow-hidden">
        <div class="grid grid-cols-1 mt-8">
            <div class="slider relative overflow-hidden m-auto mb-4 before:content-[''] before:absolute before:top-0 before:start-0 before:z-2 after:content-[''] after:absolute after:top-0 after:end-0 after:z-2">
                <div class="slide-track flex items-center">
                    
                    <!-- includes/Landings/index-ai/reviews3.blade.php -->
                    @include('includes.Landings.index-ai.reviews3')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center md:gap-[30px]">

            <!-- includes/Landings/index-ai/frequently-asked.blade.php -->
            @include('includes.Landings.index-ai.frequently-asked')
        
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Our Pricing Plans</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind css html page.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-ai/our-pricing.blade.php -->
            @include('includes.Landings.index-ai.our-pricing')
        
        </div><!--end-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 z-2">
       
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer2')

@endsection