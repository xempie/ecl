@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - Collaborators | Research Partners')

@section('description', 'Meet our valued research collaborators and partners from universities and institutions worldwide who contribute to our empathic computing research initiatives.')

@section('keywords', 'research collaborators, academic partners, international collaboration, empathic computing partnerships, research network')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/team/team.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Research Collaborators</h3>

            <p class="text-slate-300 text-lg max-w-xl mx-auto">Our valued research partners and collaborators from leading universities and institutions worldwide, advancing empathic computing research together.</p>
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
        
        <!-- About Our Collaborators Section -->
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px] mb-16">
            <div class="lg:col-span-6 md:col-span-6">
                <div class="relative">
                    <img src="{{ asset('assets/images/team/team.jpg') }}" class="shadow-lg rounded-xl w-full" alt="Research Collaborators">
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                        <h4 class="font-semibold text-slate-900 text-sm">Global Collaboration</h4>
                        <p class="text-slate-600 text-xs">Worldwide Partners</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="flex items-center mb-6">
                        <div class="text-violet-600 text-6xl font-bold me-4">
                            <i class="uil uil-users-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-2xl lg:text-3xl font-bold mb-4 md:text-3xl">Research Partnerships</h4>
                            <p class="text-slate-400 max-w-xl mb-6">Our collaborators bring diverse expertise from around the world, enriching our research through international partnerships and knowledge exchange.</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-3 h-3 bg-violet-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Academic Partnerships</h4>
                                <p class="text-slate-400 text-sm">Collaborating with leading universities and research institutions to advance empathic computing research and share knowledge globally.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-3 h-3 bg-amber-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Industry Collaboration</h4>
                                <p class="text-slate-400 text-sm">Working with industry partners to translate research into practical applications and real-world solutions.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-3 h-3 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Cross-Disciplinary Research</h4>
                                <p class="text-slate-400 text-sm">Bridging computer science, psychology, and design through collaborative research initiatives with experts from various fields.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('contact-us') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md me-2 mt-2"><i class="uil uil-envelope"></i> Partner with us</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->

        <!-- Collaborators Grid Section -->
        <div class="grid grid-cols-1 pb-8 text-center mb-12">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Research Collaborators</h3>
            <p class="text-slate-400 max-w-2xl mx-auto">Meet the distinguished researchers and professionals from around the world who contribute to our empathic computing research through ongoing collaborations and partnerships.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-[30px]">
            @forelse($collaborators as $collaborator)
                <div class="h-full">
                    <a href="{{ url('/team/' . $collaborator->slug) }}" class="block h-full group">
                        <div class="team p-6 rounded-md border border-gray-100 h-full flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg hover:-translate-y-2" style="background-color: #fefefe;">
                            <img src="{{ $collaborator->image_url }}" class="w-full aspect-square object-cover rounded-md shadow-md transition-all duration-300 group-hover:shadow-xl" alt="{{ $collaborator->name }}">
                            <div class="content mt-4 flex-1 flex flex-col">
                                <h4 class="text-lg font-medium text-slate-900 mb-1 group-hover:text-violet-600 transition-colors">{{ $collaborator->name }}</h4>
                                <p class="text-slate-600 text-sm group-hover:text-slate-700 transition-colors">{{ $collaborator->title }}</p>
                                @if($collaborator->organization)
                                <p class="text-violet-600 text-xs mt-1 font-medium">{{ $collaborator->organization }}</p>
                                @endif
                                @if($collaborator->location)
                                <p class="text-slate-500 text-xs mt-1">{{ $collaborator->location }}</p>
                                @endif
                                <div class="flex space-x-2 mt-4">
                                    @if($collaborator->social_email)
                                    <a href="mailto:{{ $collaborator->social_email }}" class="size-7 inline-flex items-center justify-center bg-violet-100 text-violet-600 rounded-md hover:bg-violet-200 transition-colors">
                                        <i data-feather="mail" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($collaborator->social_linkedin)
                                    <a href="{{ $collaborator->social_linkedin }}" target="_blank" class="size-7 inline-flex items-center justify-center bg-violet-100 text-violet-600 rounded-md hover:bg-violet-200 transition-colors">
                                        <i data-feather="linkedin" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($collaborator->social_website)
                                    <a href="{{ $collaborator->social_website }}" target="_blank" class="size-7 inline-flex items-center justify-center bg-violet-100 text-violet-600 rounded-md hover:bg-violet-200 transition-colors">
                                        <i data-feather="globe" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($collaborator->social_google_scholar)
                                    <a href="{{ $collaborator->social_google_scholar }}" target="_blank" class="size-7 inline-flex items-center justify-center bg-violet-100 text-violet-600 rounded-md hover:bg-violet-200 transition-colors">
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
                    <div class="size-24 bg-violet-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="uil uil-users-alt text-4xl text-violet-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">No Collaborators Yet</h3>
                    <p class="text-slate-500 text-lg max-w-md mx-auto">
                        Our research collaborators will be displayed here once they are added through the admin panel.
                    </p>
                    <div class="mt-6">
                        <a href="{{ route('contact-us') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md">
                            <i class="uil uil-envelope"></i> Become a Collaborator
                        </a>
                    </div>
                </div>
            @endforelse
        </div>
    </div><!--end container-->
</section><!--end section-->

@endsection