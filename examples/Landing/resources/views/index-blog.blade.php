<!-- resources/views/index-blog.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Blog Page')

@section('content')

@include('includes.navbar2')

<!-- Start -->
<section class="relative md:pt-60 pt-40 md:pb-64 pb-56 flex items-center bg-center bg-no-repeat bg-cover jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/blog/bg1.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/40"></div>
    <div class="container relative">
        <div class="md:flex justify-center mt-10">
            <div class="w-full">
                <span class="flex items-center">
                    <img src="{{ asset('assets/images/client/05.jpg') }}" class="h-8 rounded-full shadow-sm dark:shadow-gray-800" alt="">

                    <span class="ms-1 text-lg"><span class="text-white/80 mx-1">by</span> <a href="" class="text-white">Cristino Loly</a></span>
                    <span class="ms-1 text-lg"><span class="text-white/80 mx-1">in</span> <a href="" class="text-white">Business</a></span>
                </span>

                <a href="" class="font-bold text-white leading-snug text-[30px] lg:text-[42px] mt-6 block">Establishing that <br> you have something to say</a>

                <div class="mt-8">
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Read Article <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End -->

<!-- Start -->
<!-- FEATURES START -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-2 duration-500 sm:-mt-[220px] -mt-[200px] m-0">
                <div class="filters-group-wrap">
                    <div class="filters-group">

                        <!-- includes/Landings/index-blog/group4.blade.php -->
                        @include('includes.Landings.index-blog.group4')

                    </div>
                </div>

                <div id="grid" class="md:flex justify-center mx-auto mt-4">

                    <!-- includes/Landings/index-blog/blog11.blade.php -->
                    @include('includes.Landings.index-blog.blog11')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative mt-16">

        <!-- includes/Landings/index-blog/newsletter.blade.php -->
        @include('includes.Landings.index-blog.newsletter')

    </div>
    
    <div class="container relative mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Featured News Post</h3>
                <p class="text-slate-400 max-w-xl">Search your future opportunity with our categories</p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">All Categories <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid grid-cols-1 gap-[30px]">

                    <!-- includes/Landings/index-blog/news.blade.php -->
                    @include('includes.Landings.index-blog.news')

                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center">Recent post</h5>
                    
                        <!-- includes/Landings/index-forums/recent.blade.php -->
                        @include('includes.Landings.index-forums.recent')

                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Social sites</h5>
                    <ul class="list-none text-center mt-8">
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="facebook" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="instagram" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="twitter" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="linkedin" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="github" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="youtube" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="gitlab" class="size-4"></i></a></li>
                    </ul><!--end icon-->

                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Tagscloud</h5>
                    <ul class="list-none text-center mt-8">
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Business</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Finance</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Marketing</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Fashion</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Bride</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Lifestyle</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Travel</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Beauty</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Video</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Audio</a></li>
                    </ul>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Recent Posts</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-blog/recent-posts.blade.php -->
            @include('includes.Landings.index-blog.recent-posts')

        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection