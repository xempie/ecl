@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - Virtual Interns | Remote Research Program')

@section('description', 'Meet our talented virtual interns participating in our remote research program, contributing to empathic computing research from around the world.')

@section('keywords', 'virtual interns, remote research program, student researchers, empathic computing internships, global talent')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/team/team.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Virtual Interns</h3>

            <p class="text-slate-300 text-lg max-w-xl mx-auto">Talented students and early-career researchers contributing to our empathic computing research through our virtual internship program.</p>
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
        
        <!-- About Virtual Internship Program -->
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px] mb-16">
            <div class="lg:col-span-6 md:col-span-6">
                <div class="relative">
                    <img src="{{ asset('assets/images/team/team.jpg') }}" class="shadow-lg rounded-xl w-full" alt="Virtual Internship Program">
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                        <h4 class="font-semibold text-slate-900 text-sm">Remote Research</h4>
                        <p class="text-slate-600 text-xs">Global Program</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="flex items-center mb-6">
                        <div class="text-amber-600 text-6xl font-bold me-4">
                            <i class="uil uil-laptop-cloud"></i>
                        </div>
                        <div>
                            <h4 class="text-2xl lg:text-3xl font-bold mb-4 md:text-3xl">Virtual Research Program</h4>
                            <p class="text-slate-400 max-w-xl mb-6">Our virtual internship program connects talented students worldwide with cutting-edge empathic computing research opportunities.</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-3 h-3 bg-amber-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Remote Research Experience</h4>
                                <p class="text-slate-400 text-sm">Gain hands-on experience in empathic computing research through virtual collaboration with our research teams.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Global Talent Network</h4>
                                <p class="text-slate-400 text-sm">Connect with emerging researchers from universities and institutions around the world.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-3 h-3 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Skill Development</h4>
                                <p class="text-slate-400 text-sm">Develop research skills in AI, machine learning, human-computer interaction, and empathic computing technologies.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('contact-us') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-amber-600 hover:bg-amber-700 border-amber-600 hover:border-amber-700 text-white rounded-md me-2 mt-2"><i class="uil uil-envelope"></i> Apply for Internship</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->

        <!-- Virtual Interns Grid Section -->
        <div class="grid grid-cols-1 pb-8 text-center mb-12">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Current Virtual Interns</h3>
            <p class="text-slate-400 max-w-2xl mx-auto">Meet our talented virtual interns who are contributing to empathic computing research remotely, bringing fresh perspectives and innovative ideas to our projects.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-[30px]">
            @forelse($virtualInterns as $intern)
                <div class="h-full">
                    <a href="{{ url('/team/' . $intern->slug) }}" class="block h-full group">
                        <div class="team p-6 rounded-md border border-gray-100 h-full flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg hover:-translate-y-2" style="background-color: #fffef7;">
                            <img src="{{ $intern->image_url }}" class="w-full aspect-square object-cover rounded-md shadow-md transition-all duration-300 group-hover:shadow-xl" alt="{{ $intern->name }}">
                            <div class="content mt-4 flex-1 flex flex-col">
                                <h4 class="text-lg font-medium text-slate-900 mb-1 group-hover:text-amber-600 transition-colors">{{ $intern->name }}</h4>
                                <p class="text-slate-600 text-sm group-hover:text-slate-700 transition-colors">{{ $intern->title }}</p>
                                @if($intern->university)
                                <p class="text-amber-600 text-xs mt-1 font-medium">{{ $intern->university }}</p>
                                @endif
                                @if($intern->location)
                                <p class="text-slate-500 text-xs mt-1">{{ $intern->location }}</p>
                                @endif
                                @if($intern->internship_period)
                                <p class="text-blue-600 text-xs mt-1 font-medium">{{ $intern->internship_period }}</p>
                                @endif
                                <div class="flex space-x-2 mt-4">
                                    @if($intern->social_email)
                                    <a href="mailto:{{ $intern->social_email }}" class="size-7 inline-flex items-center justify-center bg-amber-100 text-amber-600 rounded-md hover:bg-amber-200 transition-colors">
                                        <i data-feather="mail" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($intern->social_linkedin)
                                    <a href="{{ $intern->social_linkedin }}" target="_blank" class="size-7 inline-flex items-center justify-center bg-amber-100 text-amber-600 rounded-md hover:bg-amber-200 transition-colors">
                                        <i data-feather="linkedin" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($intern->social_website)
                                    <a href="{{ $intern->social_website }}" target="_blank" class="size-7 inline-flex items-center justify-center bg-amber-100 text-amber-600 rounded-md hover:bg-amber-200 transition-colors">
                                        <i data-feather="globe" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($intern->social_google_scholar)
                                    <a href="{{ $intern->social_google_scholar }}" target="_blank" class="size-7 inline-flex items-center justify-center bg-amber-100 text-amber-600 rounded-md hover:bg-amber-200 transition-colors">
                                        <i data-feather="book-open" class="size-3"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <div class="size-24 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="uil uil-laptop-cloud text-4xl text-amber-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">No Virtual Interns Currently</h3>
                    <p class="text-slate-500 text-lg max-w-md mx-auto">
                        Our virtual interns will be displayed here once they join our remote research program through the admin panel.
                    </p>
                    <div class="mt-6">
                        <a href="{{ route('contact-us') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-amber-600 hover:bg-amber-700 border-amber-600 hover:border-amber-700 text-white rounded-md">
                            <i class="uil uil-envelope"></i> Apply for Virtual Internship
                        </a>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Call to Action Section -->
        @if($virtualInterns->count() > 0)
        <div class="grid grid-cols-1 mt-16">
            <div class="text-center bg-amber-50 rounded-2xl p-12">
                <div class="size-20 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="uil uil-graduation-cap text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Join Our Virtual Internship Program</h3>
                <p class="text-slate-600 max-w-2xl mx-auto mb-6">
                    Are you a student or early-career researcher interested in empathic computing? Join our virtual internship program and contribute to cutting-edge research from anywhere in the world.
                </p>
                <a href="{{ route('contact-us') }}" class="py-3 px-8 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-amber-600 hover:bg-amber-700 border-amber-600 hover:border-amber-700 text-white rounded-md">
                    <i class="uil uil-envelope"></i> Apply Now
                </a>
            </div>
        </div>
        @endif
    </div><!--end container-->
</section><!--end section-->

@endsection