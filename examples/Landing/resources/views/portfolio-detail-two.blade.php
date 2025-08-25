<!-- resources/views/portfolio-detail-two.blade.php -->
@extends('layouts.main')

@section('title', 'Portfolio-Detail-Two Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-48 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/portfolio/bg-inner.jpg') }}');">
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
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- FEATURES START -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-2 duration-500 sm:-mt-[200px] -mt-[140px] m-0">
                <div id="grid" class="md:flex justify-center mx-auto">
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                        <div class="group relative block overflow-hidden rounded-md duration-500">
                            <a href="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/portfolio/10.jpg') }}" class="lightbox duration-500 group-hover:scale-105" title="">
                                <img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/portfolio/10.jpg') }}" class="" alt="work-image">
                            </a>
                        </div>
                    </div>

                    <!-- includes/Portfolio/portfolio-detail-two/trends.blade.php -->
                    @include('includes.Portfolio.portfolio-detail-two.trends')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="container relative md:mt-24 mt-16">
        <div class="flex mx-auto justify-center">
            <div class="lg:w-2/3 md:w-full">
                <div class="text-center">
                    <h4 class="text-3xl leading-normal font-semibold mb-6">Project Description</h4>
                    <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit totam atque dignissimos porro, exercitationem, neque alias ea aliquid quibusdam voluptates impedit maxime aut asperiores consequatur iste. Corporis fuga ducimus dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci non dolorem consequatur vitae hic.</p>
                    <p class="text-slate-400 mt-2">Suscipit totam atque dignissimos porro, exercitationem, neque alias ea aliquid quibusdam voluptates impedit maxime aut asperiores consequatur iste. Corporis fuga ducimus dignissimos.</p>
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