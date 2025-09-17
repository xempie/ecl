@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - Alumni | Former Lab Members')

@section('description', 'Meet our accomplished alumni who have contributed to empathic computing research and have moved on to successful careers in academia and industry.')

@section('keywords', 'research lab alumni, former researchers, empathic computing graduates, academic careers, industry professionals')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/team/team.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Lab Alumni</h3>

            <p class="text-slate-300 text-lg max-w-xl mx-auto">Celebrating our accomplished alumni who have contributed to empathic computing research and advanced their careers in academia and industry.</p>
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

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        
        <!-- About Our Alumni Section -->
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-5 md:col-span-6">
                <div class="grid grid-cols-1 gap-6">
                    <!-- Auckland Lab -->
                    <div class="relative">
                        <img src="{{ asset('assets/images/team/team.jpg') }}" class="shadow-lg rounded-xl w-full" alt="Auckland Lab - New Zealand">
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <h4 class="font-semibold text-slate-900 text-sm">Auckland Alumni</h4>
                            <p class="text-slate-600 text-xs">New Zealand</p>
                        </div>
                    </div>
                    
                    <!-- Adelaide Lab -->
                    <div class="relative">
                        <img src="{{ asset('assets/images/team/team.jpg') }}" class="shadow-lg rounded-xl w-full" alt="Adelaide Lab - Australia">
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <h4 class="font-semibold text-slate-900 text-sm">Adelaide Alumni</h4>
                            <p class="text-slate-600 text-xs">Australia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-7 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="flex items-center mb-6">
                        <div class="text-blue-600 text-6xl font-bold me-4">
                            <i class="uil uil-graduation-cap"></i>
                        </div>
                        <div>
                            <h4 class="text-2xl lg:text-3xl font-bold mb-4 md:text-3xl">Our Alumni Network</h4>
                            <p class="text-slate-400 max-w-xl mb-6">Our alumni represent the success of our research programs and continue to make significant contributions to empathic computing worldwide.</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Auckland Alumni</h4>
                                <p class="text-slate-400 text-sm">Our New Zealand graduates have advanced to leading positions in academia, research institutions, and technology companies worldwide.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-3 h-3 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Adelaide Alumni</h4>
                                <p class="text-slate-400 text-sm">Our Australian graduates continue pioneering research in AI emotion recognition, contributing to both industry and academic advancement.</p>
                            </div>
                        </div>
                    </div>

                    <p class="text-slate-400 max-w-xl mb-6">We're proud of our alumni's achievements and maintain strong connections with our graduate community through ongoing collaborations and mentorship.</p>
                
                    <div class="mt-6">
                        <a href="{{ route('contact-us') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md me-2 mt-2"><i class="uil uil-envelope"></i> Contact us</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->

    </div><!--end container-->

    <!-- Auckland Lab Alumni Section -->
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Auckland Lab Alumni</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Our accomplished Auckland graduates who have advanced their careers in empathic computing research and related fields.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
            @forelse($aucklandAlumni as $alumni)
                <div class="h-full">
                    <a href="{{ url('/team/' . $alumni->slug) }}" class="block h-full group">
                        <div class="team p-6 rounded-md border border-gray-100 h-full flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg hover:-translate-y-2" style="background-color: #f6f6f6;">
                            <img src="{{ $alumni->image_url }}" class="w-full aspect-square object-cover rounded-md shadow-md transition-all duration-300 group-hover:shadow-xl" alt="{{ $alumni->name }}">
                            <div class="content mt-4 flex-1 flex flex-col">
                                <h4 class="text-lg font-medium text-slate-900 mb-1 group-hover:text-blue-600 transition-colors">{{ $alumni->name }}</h4>
                                <p class="text-slate-600 text-sm group-hover:text-slate-700 transition-colors">{{ $alumni->title }}</p>
                                @if($alumni->current_position)
                                <p class="text-blue-600 text-xs mt-1 font-medium">{{ $alumni->current_position }}</p>
                                @endif
                                <div class="flex space-x-2 mt-4">
                                    @if($alumni->social_email)
                                    <a href="mailto:{{ $alumni->social_email }}" class="size-7 inline-flex items-center justify-center bg-blue-100 text-blue-600 rounded-md hover:bg-blue-200 transition-colors">
                                        <i data-feather="mail" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($alumni->social_linkedin)
                                    <a href="{{ $alumni->social_linkedin }}" target="_blank" class="size-7 inline-flex items-center justify-center bg-blue-100 text-blue-600 rounded-md hover:bg-blue-200 transition-colors">
                                        <i data-feather="linkedin" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($alumni->social_google_scholar)
                                    <a href="{{ $alumni->social_google_scholar }}" target="_blank" class="size-7 inline-flex items-center justify-center bg-blue-100 text-blue-600 rounded-md hover:bg-blue-200 transition-colors">
                                        <i data-feather="book-open" class="size-3"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-slate-500 text-lg">No Auckland lab alumni found.</p>
                </div>
            @endforelse
        </div>
    </div><!--end container-->

    <!-- Adelaide Lab Alumni Section -->
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Adelaide Lab Alumni</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Our distinguished Adelaide graduates who continue to make significant contributions to AI emotion recognition and empathic systems.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
            @forelse($adelaideAlumni as $alumni)
                <div class="h-full">
                    <a href="{{ url('/team/' . $alumni->slug) }}" class="block h-full group">
                        <div class="team p-6 rounded-md border border-gray-100 h-full flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg hover:-translate-y-2" style="background-color: #f6f6f6;">
                            <img src="{{ $alumni->image_url }}" class="w-full aspect-square object-cover rounded-md shadow-md transition-all duration-300 group-hover:shadow-xl" alt="{{ $alumni->name }}">
                            <div class="content mt-4 flex-1 flex flex-col">
                                <h4 class="text-lg font-medium text-slate-900 mb-1 group-hover:text-emerald-600 transition-colors">{{ $alumni->name }}</h4>
                                <p class="text-slate-600 text-sm group-hover:text-slate-700 transition-colors">{{ $alumni->title }}</p>
                                @if($alumni->current_position)
                                <p class="text-emerald-600 text-xs mt-1 font-medium">{{ $alumni->current_position }}</p>
                                @endif
                                <div class="flex space-x-2 mt-4">
                                    @if($alumni->social_email)
                                    <a href="mailto:{{ $alumni->social_email }}" class="size-7 inline-flex items-center justify-center bg-emerald-100 text-emerald-600 rounded-md hover:bg-emerald-200 transition-colors">
                                        <i data-feather="mail" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($alumni->social_linkedin)
                                    <a href="{{ $alumni->social_linkedin }}" target="_blank" class="size-7 inline-flex items-center justify-center bg-emerald-100 text-emerald-600 rounded-md hover:bg-emerald-200 transition-colors">
                                        <i data-feather="linkedin" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($alumni->social_google_scholar)
                                    <a href="{{ $alumni->social_google_scholar }}" target="_blank" class="size-7 inline-flex items-center justify-center bg-emerald-100 text-emerald-600 rounded-md hover:bg-emerald-200 transition-colors">
                                        <i data-feather="book-open" class="size-3"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-slate-500 text-lg">No Adelaide lab alumni found.</p>
                </div>
            @endforelse
        </div>
    </div><!--end container-->
</section><!--end section-->

@endsection