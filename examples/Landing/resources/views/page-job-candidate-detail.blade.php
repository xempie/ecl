<!-- resources/views/page-job-candidate-detail.blade.php -->
@extends('layouts.main')

@section('title', 'Page-Job-Candidate-Detail Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-72 bg-no-repeat bg-top bg-cover" style="background-image: url('{{ asset('assets/images/job/job.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-80"></div>
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-5">
                <div class="lg:-mt-[330px] -mt-[299px]">
                    <div class="rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800">
                        <div class="text-center py-8 p-6 border-b border-gray-100 dark:border-gray-800">
                            <img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/client/01.jpg') }}" class="size-24 p-1 shadow-md dark:shadow-gray-800 mx-auto rounded-full block" alt="">
                            <h5 class="mt-5 text-xl font-semibold mb-0">
                                @if(!empty($item['title']))
                                    {{ $item['title'] }}
                                @else
                                    Thomas Brewer
                                @endif
                            </h5>
                            <p class="text-slate-400 mb-0">
                                @if(!empty($item['name']))
                                    {{ $item['name'] }}
                                @else
                                    Senior Web Developer
                                @endif
                            </p>
                        </div>

                        <div class="p-6">
                            <h5 class="font-semibold">Company Details :</h5>
                            <ul class="list-none mt-4">
                                <li class="flex mt-2 items-center font-medium"><i data-feather="mail" class="size-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">Email  :</span> thomas@mail.com</li>
                                <li class="flex mt-2 items-center font-medium"><i data-feather="gift" class="size-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">D.O.B. :</span> 31st Dec, 1996</li>
                                <li class="flex mt-2 items-center font-medium"><i data-feather="home" class="size-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">Address :</span> 15 Razy street</li>
                                <li class="flex mt-2 items-center font-medium"><i data-feather="map-pin" class="size-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">City :</span> London</li>
                                <li class="flex mt-2 items-center font-medium"><i data-feather="globe" class="size-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">Country :</span> UK</li>
                                <li class="flex mt-2 items-center font-medium"><i data-feather="server" class="size-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">Postal Code :</span> 521452</li>
                                <li class="flex mt-2 items-center font-medium"><i data-feather="phone" class="size-4 text-amber-500 me-3"></i><span class="text-slate-400 me-3">Mobile :</span> (+125) 1542-8452</li>
                            </ul>

                            <ul class="list-none mt-6">
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="facebook" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="instagram" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="twitter" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="linkedin" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="github" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="youtube" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="gitlab" class="size-4"></i></a></li>
                            </ul><!--end icon-->

                            <a href="{{ url('/contact-one') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-6">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-7">
                <h4 class="text-xl font-semibold">About us :</h4>
                <p class="text-slate-400 mt-4">Obviously I'M Web Developer. Web Developer with over 3 years of experience. Experienced with all stages of the development cycle for dynamic web projects. The as opposed to using 'Content here, content here', making it look like readable English.</p>
                <p class="text-slate-400 mt-4">Data Structures and Algorithms are the heart of programming. Initially most of the developers do not realize its importance but when you will start your career in software development, you will find your code is either taking too much time or taking too much space.</p>
                
                <h4 class="mt-8 text-xl font-semibold">Skills :</h4>
                <div class="mt-4">
                    <div class="flex justify-between mb-2">
                        <span class="text-slate-400">WordPress</span>
                        <span class="text-slate-400">84%</span>
                    </div>
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 84%"></div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="flex justify-between mb-2">
                        <span class="text-slate-400">JavaScript</span>
                        <span class="text-slate-400">79%</span>
                    </div>
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 79%"></div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="flex justify-between mb-2">
                        <span class="text-slate-400">HTML</span>
                        <span class="text-slate-400">95%</span>
                    </div>
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <h4 class="mt-8 text-xl font-semibold">Experience :</h4>

                <div class="flex mt-6">
                    <div class="text-slate-400 font-semibold min-w-[80px] text-center">
                        <img src="{{ asset('assets/images/client/shree-logo.png') }}" class="size-16 mx-auto mb-2 block" alt=""> 2019-22
                    </div>

                    <div class="ms-4">
                        <h5 class="text-lg font-medium mb-0">Full Stack Developer</h5>
                        <span class="text-slate-400 company-university">Shreethemes - India</span>
                        <p class="text-slate-400 mt-2 mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. </p>
                    </div>
                </div>
                
                <div class="flex mt-6">
                    <div class="text-slate-400 font-semibold min-w-[80px] text-center">
                        <img src="{{ asset('assets/images/client/circle-logo.png') }}" class="size-16 mx-auto mb-2 block" alt=""> 2017-19
                    </div>

                    <div class="ms-4">
                        <h5 class="text-lg font-medium mb-0">Back-end Developer</h5>
                        <span class="text-slate-400 company-university">CircleCI - U.S.A.</span>
                        <p class="text-slate-400 mt-2 mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. </p>
                    </div>
                </div>

                <h4 class="mt-8 text-xl font-semibold">Projects :</h4>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-8">

                    <!-- includes/Pages/Job-Careers/page-job-candidate-detail/projects2.blade.php -->
                    @include('includes.Pages.Job-Careers.page-job-candidate-detail.projects2')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer5')

@endsection