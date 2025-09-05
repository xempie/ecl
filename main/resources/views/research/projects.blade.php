@php
$data = json_decode(file_get_contents(resource_path('data/projects/all-projects.json')), true);
$sectionData = $data['section'] ?? [];
$projects = $data['projects'] ?? [];
$stats = $data['stats'] ?? [];

// Sort by priority
usort($projects, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});
@endphp

@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - Research Projects | Innovative AI & HCI Projects')

@section('description', 'Explore our comprehensive portfolio of 12+ groundbreaking research projects in empathic computing, AI emotion recognition, VR/AR, and human-computer interaction.')

@section('keywords', 'research projects, empathic computing projects, AI emotion recognition, VR research, AR projects, human-computer interaction, innovative technology')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/projects/emotivr.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">Research Projects</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">{{ $sectionData['hero_description'] ?? 'Discover our complete portfolio of innovative projects spanning AI emotion recognition, virtual reality, and human-computer interaction research.' }}</p>
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

<!-- Projects Grid Section -->
<section class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h6 class="text-blue-600 text-sm font-bold uppercase mb-2 tracking-wider">Research Portfolio</h6>
            <h2 class="text-4xl font-bold text-slate-900 mb-6">
                Our Complete 
                <span class="text-blue-600">Project Collection</span>
            </h2>
            <p class="text-slate-600 max-w-3xl mx-auto text-lg">
                From AI emotion recognition to immersive virtual environments, explore our diverse range of cutting-edge research projects that are shaping the future of empathic computing.
            </p>
        </div>

        <!-- Projects Grid - 3 Columns -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            @foreach($projects as $project)
            <!-- Project {{ $loop->iteration }}: {{ $project['title'] ?? 'Project' }} -->
            <div class="group relative rounded-xl overflow-hidden shadow-md dark:shadow-gray-800 hover:shadow-xl transition-all duration-500 h-full min-h-[500px] flex flex-col">
                <div class="relative overflow-hidden h-[200px]">
                    <img src="{{ asset($project['image'] ?? 'assets/images/projects/default.jpg') }}" class="group-hover:scale-110 duration-500 w-full h-full object-cover" alt="{{ $project['title'] ?? 'Project' }}">
                </div>

                <div class="p-6 flex-1 flex flex-col">
                    <h5 class="text-lg font-medium hover:text-{{ $project['hover_color'] ?? 'blue-600' }} transition-colors duration-300">
                        <a href="{{ url($project['url'] ?? '#') }}">{{ $project['title'] ?? 'Project Title' }}</a>
                    </h5>
                    <p class="text-slate-400 mt-3 flex-1">
                        {{ $project['description'] ?? 'Project description.' }}
                    </p>
                    
                    <!-- Project Stats -->
                    <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                        <div class="flex items-center">
                            <i class="uil uil-calendar-alt text-slate-400 me-2"></i>
                            <span class="text-sm text-slate-400">{{ $project['duration'] ?? '2023-2025' }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="uil uil-users-alt text-slate-400 me-2"></i>
                            <span class="text-sm text-slate-400">{{ $project['team_size'] ?? 'Team' }}</span>
                        </div>
                    </div>

                    <!-- Technologies Used -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        @foreach($project['technologies'] ?? [] as $tech)
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

        </div><!--end grid-->
    </div>
</section>

<!-- Project Categories Section -->
<section class="relative md:py-24 py-16 research-areas-grid-bg">
    <div class="container relative">
        <div class="text-center mb-16">
            <h6 class="text-emerald-600 text-sm font-bold uppercase mb-2 tracking-wider">Research Domains</h6>
            <h2 class="text-4xl font-bold text-slate-900 mb-6">
                Diverse 
                <span class="text-emerald-600">Research Categories</span>
            </h2>
            <p class="text-slate-600 max-w-3xl mx-auto text-lg">
                Our projects span multiple research domains, each contributing to the advancement of empathic computing technology.
            </p>
        </div>
        
        <!-- Categories Grid -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="text-center p-6 bg-white rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-blue-100 rounded-xl mx-auto mb-4 flex items-center justify-center">
                    <i class="uil uil-robot text-2xl text-blue-600"></i>
                </div>
                <h4 class="font-semibold text-slate-900 mb-2">AI & Machine Learning</h4>
                <p class="text-sm text-slate-600">3 Projects</p>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-emerald-100 rounded-xl mx-auto mb-4 flex items-center justify-center">
                    <i class="uil uil-sim-card text-2xl text-emerald-600"></i>
                </div>
                <h4 class="font-semibold text-slate-900 mb-2">VR/AR Technology</h4>
                <p class="text-sm text-slate-600">3 Projects</p>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-violet-100 rounded-xl mx-auto mb-4 flex items-center justify-center">
                    <i class="uil uil-user-check text-2xl text-violet-600"></i>
                </div>
                <h4 class="font-semibold text-slate-900 mb-2">Human-Computer Interaction</h4>
                <p class="text-sm text-slate-600">4 Projects</p>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-lg">
                <div class="w-16 h-16 bg-amber-100 rounded-xl mx-auto mb-4 flex items-center justify-center">
                    <i class="uil uil-heart text-2xl text-amber-600"></i>
                </div>
                <h4 class="font-semibold text-slate-900 mb-2">Health & Therapy</h4>
                <p class="text-sm text-slate-600">2 Projects</p>
            </div>
        </div>
    </div>
</section>


@endsection

@push('styles')
<style>
.animation-delay-2000 {
    animation-delay: 2s;
}
</style>
@endpush