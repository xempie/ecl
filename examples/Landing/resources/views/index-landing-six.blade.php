<!-- resources/views/index-landing-six.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Landing-Six Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative md:pt-44 py-36 bg-slate-50 dark:bg-slate-800" id="home">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center text-center">
            <div class="">
                <h1 class="font-bold lg:leading-normal leading-normal tracking-wide text-4xl lg:text-5xl capitalize mb-5">Qualified Business Consultancy</h1>
                <p class="text-slate-400 text-lg max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
            
                <div class="subcribe-form mt-6 mb-3">
                    <form class="relative max-w-xl mx-auto">
                        <input type="email" id="emailid" name="email" class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white/60 dark:bg-slate-900/60 shadow-sm dark:shadow-gray-800" placeholder="yourname@domain.com">
                        <button type="submit" class="absolute top-[2px] end-[3px] h-[46px] py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">Subscribe Now</button>
                    </form><!--end form-->
                </div>

                <span class="font-medium">Looking for help? <a href="" class="text-indigo-600">Get in touch with us</a></span>
            </div>

            <div class="grid lg:grid-cols-12 md:grid-cols-3 grid-cols-1 lg:gap-4 gap-2 mx-auto mt-8 items-center">
                <div class="lg:col-span-4">
                    <div class="grid grid-cols-2 gap-4 items-center">
                        <div class="">
                            <div class="grid grid-cols-1 gap-4">
                                <img src="{{ asset('assets/images/cowork/1.jpg') }}" class="shadow-sm rounded-lg" alt="">
                            </div>
                        </div>

                        <div class="">
                            <div class="grid grid-cols-1 gap-4">
                                <img src="{{ asset('assets/images/cowork/10.jpg') }}" class="shadow-sm rounded-lg" alt="">
                                <img src="{{ asset('assets/images/cowork/2.jpg') }}" class="shadow-sm rounded-lg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4">
                    <img src="{{ asset('assets/images/business/bg02.jpg') }}" class="shadow-sm rounded-lg" alt="">
                </div>

                <div class="lg:col-span-4">
                    <div class="grid grid-cols-2 gap-4 items-center">
                        <div class="">
                            <div class="grid grid-cols-1 gap-4">
                                <img src="{{ asset('assets/images/cowork/4.jpg') }}" class="shadow-sm rounded-lg" alt="">
                                <img src="{{ asset('assets/images/cowork/9.jpg') }}" class="shadow-sm rounded-lg" alt="">
                            </div>
                        </div>

                        <div class="">
                            <div class="grid grid-cols-1 gap-4">
                                <img src="{{ asset('assets/images/cowork/5.jpg') }}" class="shadow-sm rounded-lg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End Hero -->

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

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        
        <!-- includes/Landings/index-it-solution/who-we-are.blade.php -->
        @include('includes.Landings.index-it-solution.who-we-are')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What we do ?</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-it-solution/what-we-do3.blade.php -->
            @include('includes.Landings.index-it-solution.what-we-do3')

        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-0 pt-0">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-1">
                <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                    <div class="lg:col-start-2 lg:col-span-10">
                        <div class="relative">
                            <img src="{{ asset('assets/images/cta-bg.jpg') }}" class="rounded-md shadow-lg" alt="">
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
                                        <h6 class="text-white/50 text-lg font-semibold">Team</h6>
                                        <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white mt-2">Meet Experience <br> Team Member</h3>
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
        </div><!--end row -->
    </div><!--end container-->
    
    <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            
            <!-- includes/Home/rates.blade.php -->
            @include('includes.Home.rates')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
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

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection