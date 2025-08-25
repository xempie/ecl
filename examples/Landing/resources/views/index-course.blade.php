<!-- resources/views/index-course.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Course Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-indigo-600/5 overflow-hidden">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px] relative">
            <div class="md:col-span-7">
                <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white">Learn with <span class="text-indigo-600">Expert</span> <br> Anytime & Anywhere</h4>
                <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
            
                <div class="mt-6">
                    <a href=""><img src="{{ asset('assets/images/app/app.png') }}" class="inline-block m-1" alt=""></a>
                    <a href=""><img src="{{ asset('assets/images/app/playstore.png') }}" class="inline-block m-1" alt=""></a>
                </div>
            </div><!--end col-->

            <div class="md:col-span-5">
                <div class="relative">
                    <img src="{{ asset('assets/images/course/hero.png') }}" alt="">

                    <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                            class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                            <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="overflow-hidden after:content-[''] after:absolute after:h-32 after:w-32 after:bg-red-600/5 after:top-10 after:start-0 after:-z-1 after:rounded-3xl after:animate-[spin_10s_linear_infinite]"></div>
            <div class="overflow-hidden after:content-[''] after:absolute after:size-[512px] after:bg-indigo-600/5 after:top-0 after:-end-5 after:-z-1 after:rounded-full"></div>
        </div><!--end grid-->
    </div><!--end container-->
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
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Core Features</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-course/core-features.blade.php -->
            @include('includes.Landings.index-course.core-features')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-course/online-video.blade.php -->
        @include('includes.Landings.index-course.online-video')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Section-->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Browse Online Cource Categories</h3>
                <p class="text-slate-400 max-w-xl">Search your future opportunity with our categories</p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">All Categories <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative">
        <div class="grid grid-cols-1 relative">
            <div class="tiny-five-item">

                <!-- includes/Landings/index-course/categories1.blade.php -->
                @include('includes.Landings.index-course.categories1')

            </div>
        </div><!--grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
            <div class="md:col-span-12 text-center">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">All Categories <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start Section-->
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Popular Courses</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-life-coach/courses.blade.php -->
            @include('includes.Landings.index-life-coach.courses')

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <a href="{{ url('/course-listing') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See All Courses <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-no-repeat bg-fixed bg-top bg-cover" style="background-image: url('{{ asset('assets/images/course/cta.jpg') }}');"  id="table">
    <div class="absolute inset-0 bg-slate-900/50"></div>
    <div class="container relative">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 items-center gap-[30px]">
            <div class="lg:col-span-7">
                <h4 class="font-semibold lg:leading-normal leading-normal text-3xl lg:text-4xl mb-5 text-white">Register Now !</h4>
        
                <p class="text-white/70 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
            
                <div class="relative mt-10">
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Admission Now</a>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm dark:shadow-gray-800 md:p-8 p-6 lg:ms-10 z-10 relative">
                    <h4 class="mb-5 text-2xl font-semibold">Register Now</h4>

                    <form>
                        <div class="grid grid-cols-1">
                            <div class="mb-5">
                                <label class="form-label font-medium">Your Name : <span class="text-red-600">*</span></label>
                                <div class="form-icon relative mt-2">
                                    <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Name" name="name" required>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                <div class="form-icon relative mt-2">
                                    <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                    <input type="email" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email" name="email" required>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label class="form-label font-medium">Phone No. : <span class="text-red-600">*</span></label>
                                <div class="form-icon relative mt-2">
                                    <i data-feather="phone" class="size-4 absolute top-3 start-4"></i>
                                    <input name="number" id="phNumber" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="+12 12458 854" required>
                                </div>
                            </div>
                            
                            <div>
                                <a href="" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Free Trial</a>
                            </div>
                        </div><!--end grid-->
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- end -->

<!-- Start -->
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Community</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container-fluid relative">
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
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Instructor</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-course/instructor.blade.php -->
            @include('includes.Landings.index-course.instructor')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-seo/blog2.blade.php -->
            @include('includes.Landings.index-seo.blog2')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection