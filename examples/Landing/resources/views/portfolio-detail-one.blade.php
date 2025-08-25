<!-- resources/views/portfolio-detail-one.blade.php -->
@extends('layouts.main')

@section('title', 'Portfolio-Detail-One Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/portfolio/bg-inner.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">
                @if(!empty($item['title']))
                    {{ $item['title'] }}
                @else
                    New Trends in SEO
                @endif
            </h3>

            <ul class="list-none">
                <li class="inline font-semibold text-white/60 me-2"> <span class="text-white">Client :</span> Calvin Carlo</li>
                <li class="inline font-semibold text-white/60"> <span class="text-white">Date :</span> 6th Sep, 2025</li>
            </ul>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="">Portfolio</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Detail</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-5 md:col-span-6">
                <div class="grid grid-cols-1 gap-[30px]">
                    <img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/portfolio/01.jpg') }}" class="rounded-md" alt="">
                    <img src="{{ asset('assets/images/portfolio/02.jpg') }}" class="rounded-md" alt="">
                    <img src="{{ asset('assets/images/portfolio/03.jpg') }}" class="rounded-md" alt="">
                </div><!--end grid-->
            </div><!--end col-->

            <div class="lg:col-span-7 md:col-span-6">
                <div class="sticky top-20">
                    <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-12">
                            <div class="work-details">
                                <h4 class="text-xl font-semibold mb-3 border-b border-gray-100 dark:border-gray-800 pb-3">Project Name :</h4>
                                <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit totam atque dignissimos porro, exercitationem, neque alias ea aliquid quibusdam voluptates impedit maxime aut asperiores consequatur iste. Corporis fuga ducimus dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci non dolorem consequatur vitae hic.</p>
                                <p class="text-slate-400 mt-2">Suscipit totam atque dignissimos porro, exercitationem, neque alias ea aliquid quibusdam voluptates impedit maxime aut asperiores consequatur iste. Corporis fuga ducimus dignissimos.</p>
                            </div>
                        </div><!--end col-->
                        
                        <div class="lg:col-span-7">
                            <div class="bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 p-6 rounded-md">
                                <h5 class="text-lg font-semibold border-b border-gray-100 dark:border-gray-800 pb-3 mb-3">Project Info :</h5>
                                <dl class="grid grid-cols-12 mb-0">
                                    <dt class="md:col-span-4 col-span-5 mt-2">Client :</dt>
                                    <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">Calvin Carlo</dd>

                                    <dt class="md:col-span-4 col-span-5 mt-2">Category :</dt>
                                    <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">Web Design</dd>

                                    <dt class="md:col-span-4 col-span-5 mt-2">Date :</dt>
                                    <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">6th Sep, 2025</dd>

                                    <dt class="md:col-span-4 col-span-5 mt-2">Website :</dt>
                                    <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">www.yourdomain.com</dd>

                                    <dt class="md:col-span-4 col-span-5 mt-2">Location :</dt>
                                    <dd class="md:col-span-8 col-span-7 mt-2 text-slate-400">3/2/64 Mongus Street, UK</dd>
                                </dl>  
                            </div>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-portfolio/let's-talk.blade.php -->
        @include("includes.Landings.index-portfolio.let's-talk")

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

@include('includes.footer')

@endsection