@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - Research Projects | Innovative AI & HCI Projects')

@section('description', 'Explore our comprehensive portfolio of groundbreaking research projects in empathic computing, AI emotion recognition, VR/AR, and human-computer interaction.')

@section('keywords', 'research projects, empathic computing projects, AI emotion recognition, VR research, AR projects, human-computer interaction, innovative technology')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/projects/emotivr.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">Research Projects</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Discover our complete portfolio of innovative projects spanning AI emotion recognition, virtual reality, and human-computer interaction research.</p>
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
                Our Complete Research Projects
            </h2>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg leading-relaxed">
                Explore our diverse range of research initiatives that are pushing the boundaries of empathic computing, artificial intelligence, and human-computer interaction.
            </p>
        </div>

        <!-- Project Statistics -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 mb-16">
            <div class="text-center">
                <div class="size-16 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="uil uil-folder-open text-2xl"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-1">{{ $projects->total() }}</h4>
                <p class="text-slate-500 text-sm">Active Projects</p>
            </div>
            <div class="text-center">
                <div class="size-16 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="uil uil-users-alt text-2xl"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-1">{{ $projects->sum(function($project) { return $project->members->count(); }) }}</h4>
                <p class="text-slate-500 text-sm">Researchers Involved</p>
            </div>
            <div class="text-center">
                <div class="size-16 bg-violet-100 text-violet-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="uil uil-tag-alt text-2xl"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-1">{{ $categories->count() }}</h4>
                <p class="text-slate-500 text-sm">Research Topics</p>
            </div>
            <div class="text-center">
                <div class="size-16 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="uil uil-rocket text-2xl"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-1">{{ $projects->where('status', 'active')->count() }}</h4>
                <p class="text-slate-500 text-sm">Currently Active</p>
            </div>
        </div>

        <!-- Research Topics -->
        @if($categories->count() > 0)
        <div class="relative mb-12">
            <div class="bg-gray-50 dark:bg-slate-800 rounded-2xl p-6 shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="size-8 bg-blue-600 rounded-lg flex items-center justify-center mr-3">
                        <i class="uil uil-tag-alt text-white text-sm"></i>
                    </div>
                    <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Research Topics</h4>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('research.projects') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                        All Projects
                    </a>
                    @foreach($categories as $category)
                        <a href="{{ route('research.projects') }}?topic={{ $category->slug }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors border" style="border-color: {{ $category->color }}; color: {{ $category->color }};" onmouseover="this.style.backgroundColor='{{ $category->color }}'; this.style.color='white';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='{{ $category->color }}';">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- Projects Grid -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
            @forelse($projects as $project)
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 bg-white">
                    <!-- Project Image -->
                    <div class="relative h-64 overflow-hidden">
                        @if($project->image)
                        <img src="{{ asset($project->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $project->title }}">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="uil uil-folder-open text-6xl text-white/50"></i>
                        </div>
                        @endif
                        
                        <!-- Status Badge -->
                        <div class="absolute top-4 left-4">
                            @if($project->status === 'active')
                                <span class="px-3 py-1 bg-green-600 text-white text-xs font-medium rounded-full">Active</span>
                            @elseif($project->status === 'completed')
                                <span class="px-3 py-1 bg-blue-600 text-white text-xs font-medium rounded-full">Completed</span>
                            @elseif($project->status === 'on_hold')
                                <span class="px-3 py-1 bg-amber-600 text-white text-xs font-medium rounded-full">On Hold</span>
                            @else
                                <span class="px-3 py-1 bg-gray-600 text-white text-xs font-medium rounded-full">{{ ucfirst($project->status) }}</span>
                            @endif
                        </div>

                        <!-- Year Badge -->
                        @if($project->year)
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-white/90 text-slate-700 text-xs font-medium rounded-full">{{ $project->year }}</span>
                        </div>
                        @endif

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <!-- Categories -->
                        @if($project->categories->count() > 0)
                        <div class="flex flex-wrap gap-2 mb-3">
                            @foreach($project->categories->take(3) as $category)
                                <span class="text-xs px-2 py-1 rounded-md font-medium" style="background-color: {{ $category->color }}20; color: {{ $category->color }};">
                                    {{ $category->name }}
                                </span>
                            @endforeach
                        </div>
                        @endif

                        <!-- Project Title -->
                        <h4 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                            {{ $project->title }}
                        </h4>

                        <!-- Project Description -->
                        @if($project->description)
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            {{ Str::limit($project->description, 120) }}
                        </p>
                        @endif

                        <!-- Project Members -->
                        @if($project->members->count() > 0)
                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                            <div class="flex -space-x-2">
                                @foreach($project->members->take(4) as $member)
                                    <img src="{{ $member->image_url }}" alt="{{ $member->name }}" class="size-8 rounded-full border-2 border-white shadow-sm" title="{{ $member->name }}">
                                @endforeach
                                @if($project->members->count() > 4)
                                    <div class="size-8 rounded-full bg-slate-100 border-2 border-white shadow-sm flex items-center justify-center">
                                        <span class="text-xs font-medium text-slate-600">+{{ $project->members->count() - 4 }}</span>
                                    </div>
                                @endif
                            </div>
                            <span class="text-xs text-slate-500">{{ $project->members->count() }} member{{ $project->members->count() !== 1 ? 's' : '' }}</span>
                        </div>
                        @endif

                        <!-- Project Timeline -->
                        @if($project->start_date || $project->end_date)
                        <div class="flex items-center gap-2 mt-3 text-xs text-slate-500">
                            <i class="uil uil-calendar-alt"></i>
                            @if($project->start_date)
                                {{ \Carbon\Carbon::parse($project->start_date)->format('M Y') }}
                            @endif
                            @if($project->start_date && $project->end_date)
                                - 
                            @endif
                            @if($project->end_date)
                                {{ \Carbon\Carbon::parse($project->end_date)->format('M Y') }}
                            @else
                                - Present
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <div class="size-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="uil uil-folder-open text-4xl text-gray-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">No Projects Found</h3>
                    <p class="text-slate-500 text-lg max-w-md mx-auto">
                        Our research projects will be displayed here once they are added through the admin panel.
                    </p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($projects->hasPages())
        <div class="grid md:grid-cols-12 grid-cols-1 mt-12">
            <div class="md:col-span-12 text-center">
                {{ $projects->links() }}
            </div><!--end col-->
        </div><!--end grid-->
        @endif
    </div><!--end container-->
</section><!--end section-->

@endsection