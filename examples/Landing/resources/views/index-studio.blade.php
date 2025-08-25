<!-- resources/views/index-studio.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Studio Page')

@section('content')

@include('includes.navbar8')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 before:content-[''] before:absolute  xl:before:start-[50rem] lg:before:start-[30rem] md:before:start-[15rem] before:start-[0rem] lg:before:bottom-[10rem] md:before:bottom-[12rem] before:bottom-[14rem] before:w-[60rem] before:h-[30rem] before:rounded-[18rem] ltr:before:rotate-[135deg] rtl:before:rotate-[45deg] before:bg-indigo-600/5 dark:before:bg-indigo-600/10 overflow-hidden">
    <div class="absolute inset-0 bg-indigo-600 opacity-5"></div>
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="md:me-6">
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Bigger, Bolder <br> <span class="text-indigo-600">& Better</span></h4>
                    <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>

                    <div class="mt-6">
                        <a href="{{ url('/page-aboutus') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Company</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="md:col-span-5">
                <div class="relative">
                    <div class="tiny-one-item studio-img">

                        <!-- includes/Landings/index-studio/studio-img.blade.php -->
                        @include('includes.Landings.index-studio.studio-img')

                    </div>

                    <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                            class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                            <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end grid-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16 pt-12">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div>
        <!--end grid-->
    </div>
    <!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">We create world-class <br> web design, and <br> branding.</h3>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div>
        <!--end grid-->

        <div class="grid lg:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
            <div class="lg:col-span-3">
                <div class="grid lg:grid-cols-1 grid-cols-2 sticky top-20">
                    <div class="counter-box relative md:text-start text-center">
                        <h1 class="font-bold text-3xl text-indigo-600"><span class="counter-value" data-target="11">3</span>+</h1>
                        <span class="counter-head font-medium h6">Designers & <br> developers</span>
                    </div>
                    <!--end counter box-->

                    <div class="counter-box relative md:text-start text-center lg:mt-6">
                        <h1 class="font-bold text-3xl text-indigo-600"><span class="counter-value" data-target="5">1</span>
                        </h1>
                        <span class="counter-head font-medium h6">Years of <br> Experience</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end grid-->
            </div>
            <!--end col-->

            <div class="lg:col-span-9">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px]">
                    
                    <!-- includes/Landings/index-startup/services4.blade.php -->
                    @include('includes.Landings.index-startup.services4')

                </div>

                <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
                    <div class="md:col-span-12 text-center">
                        <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>
                <!--end grid-->
            </div>
            <!--end col-->
        </div>
        <!--end grid-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-0 pt-0">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-1">
                <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                    <div class="lg:col-start-2 lg:col-span-10">
                        <div class="relative">
                            <img src="{{ asset('assets/images/digital/cta.jpg') }}" class="rounded-md shadow-lg" alt="">
                            <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                                <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                    class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content md:mt-8">
                    <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                        <div class="lg:col-start-2 lg:col-span-10">
                            <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <h6 class="text-white/50 text-lg font-semibold">Techwind Agency</h6>
                                        <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white mt-2"> We are a full-service <br> digital company</h3>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <p class="text-white/50 max-w-xl mx-auto mb-2">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                        <a href="" class="text-white">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row -->
    </div>
    <!--end container-->

    <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
</section>
<!--end section-->
<!-- End -->

<!-- Start -->
<section class="realtive md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-5">
                <div class="sticky top-20">

                    <!-- includes/Landings/index-studio/tab3.blade.php -->
                    @include('includes.Landings.index-studio.tab3')

                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-7">
                <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">

                    <!-- includes/Landings/index-studio/project.blade.php -->
                    @include('includes.Landings.index-studio.project')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="section-title mb-8">
                <h6 class="text-indigo-600 text-sm font-bold mb-2">Portfolio</h6>
                <h4 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold mb-4">Read some amazing <br> case studies.</h4>
                <p class="text-slate-400 max-w-xl mb-0">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        </div><!--end grid-->

        <div class="sm:flex" id="grid">

            <!-- includes/Landings/index-studio/portfolio3.blade.php -->
            @include('includes.Landings.index-studio.portfolio3')

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div>
        <!--end grid-->
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
        
        <!-- includes/Landings/index-digital-agency/available.blade.php -->
        @include('includes.Landings.index-digital-agency.available')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection