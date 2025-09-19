@extends('layouts.main')

@section('title', $project->title . ' - Research Project | Empathic Computing Research Lab')

@section('description', 'Explore ' . $project->title . ' - ' . Str::limit($project->description, 150))

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $project->image ? asset($project->image) : 'https://picsum.photos/1920/700?random=30' }}');">
    <div class="absolute inset-0 bg-black/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="text-4xl lg:text-5xl text-white font-bold">{{ $project->title }}</h3>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-16 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                <a href="{{ route('home') }}">Empathic Computing Lab</a>
            </li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                <i class="uil uil-angle-right"></i>
            </li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                <a href="{{ route('research.projects') }}">Projects</a>
            </li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                <i class="uil uil-angle-right"></i>
            </li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">{{ $project->title }}</li>
        </ul>
    </div>

    <!-- Curved Bottom Design -->
    <div class="absolute bottom-0 start-0 end-0">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 52 720 52C720 52 405 52 0 48Z" fill="currentColor" class="text-white"></path>
        </svg>
    </div>
</section><!--end section-->

<!-- Project Details Section -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Project Overview -->
                <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-8 mb-8">
                    <!-- Project Status and Type -->
                    <div class="flex flex-wrap gap-3 mb-6">
                        @if($project->status === 'active')
                            <span class="px-4 py-2 bg-green-100 text-green-700 text-sm font-medium rounded-full">🟢 Active Project</span>
                        @elseif($project->status === 'completed')
                            <span class="px-4 py-2 bg-blue-100 text-blue-700 text-sm font-medium rounded-full">✅ Completed</span>
                        @elseif($project->status === 'on_hold')
                            <span class="px-4 py-2 bg-amber-100 text-amber-700 text-sm font-medium rounded-full">⏸️ On Hold</span>
                        @endif

                        @if($project->project_type)
                            <span class="px-4 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-full">{{ ucfirst(str_replace('_', ' ', $project->project_type)) }}</span>
                        @endif
                    </div>

                    <!-- Project Timeline -->
                    @if($project->start_date || $project->end_date)
                    <div class="bg-slate-50 dark:bg-slate-800 rounded-lg p-4 mb-6">
                        <div class="flex items-center gap-2 text-slate-600 dark:text-slate-300">
                            <i class="uil uil-calendar-alt text-blue-600"></i>
                            <span class="font-medium">Project Timeline:</span>
                            @if($project->start_date)
                                {{ \Carbon\Carbon::parse($project->start_date)->format('F Y') }}
                            @endif
                            @if($project->start_date && $project->end_date)
                                -
                            @endif
                            @if($project->end_date)
                                {{ \Carbon\Carbon::parse($project->end_date)->format('F Y') }}
                            @else
                                - Present
                            @endif
                        </div>
                    </div>
                    @endif

                    <!-- Project Description -->
                    <div class="prose prose-slate max-w-none">
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Project Overview</h3>
                        @if($project->description)
                            <div class="text-slate-600 dark:text-slate-300 leading-relaxed text-lg">
                                {!! nl2br(e($project->description)) !!}
                            </div>
                        @else
                            <p class="text-slate-500 italic">Project description will be available soon.</p>
                        @endif
                    </div>
                </div>

                <!-- Research Categories -->
                @if(isset($project->categories) && $project->categories && $project->categories->count() > 0)
                <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-8 mb-8">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Research Areas</h3>
                    <div class="flex flex-wrap gap-3">
                        @foreach($project->categories as $category)
                            <a href="{{ route('research.projects') }}?topic={{ $category->slug }}"
                               class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-md"
                               style="background-color: {{ $category->color }}20; color: {{ $category->color }}; border: 1px solid {{ $category->color }}30;"
                               onmouseover="this.style.backgroundColor='{{ $category->color }}'; this.style.color='white';"
                               onmouseout="this.style.backgroundColor='{{ $category->color }}20'; this.style.color='{{ $category->color }}';">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Project Publications -->
                @if(isset($project->publications) && $project->publications && $project->publications->count() > 0)
                <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-8">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Related Publications</h3>
                    <div class="space-y-6">
                        @foreach($project->publications as $publication)
                            <div class="flex gap-4 border border-gray-200 dark:border-gray-700 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <!-- Publication Image -->
                                @if($publication->image)
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset($publication->image) }}" alt="{{ $publication->title }}"
                                             class="w-20 h-20 object-cover rounded-lg border border-gray-200">
                                    </div>
                                @endif

                                <!-- Publication Content -->
                                <div class="flex-1">
                                    <h4 class="font-semibold text-slate-900 dark:text-white mb-2">{{ $publication->title }}</h4>
                                    <p class="text-slate-600 dark:text-slate-300 text-sm mb-2">{{ $publication->authors }}</p>
                                    @if($publication->journal)
                                        <p class="text-slate-500 text-sm mb-3">{{ $publication->journal }} ({{ $publication->year }})</p>
                                    @elseif($publication->conference)
                                        <p class="text-slate-500 text-sm mb-3">{{ $publication->conference }} ({{ $publication->year }})</p>
                                    @endif

                                    <!-- Publication Links -->
                                    <div class="flex flex-wrap gap-2">
                                        @if($publication->url)
                                            <a href="{{ $publication->url }}" target="_blank"
                                               class="inline-flex items-center px-3 py-1 text-xs font-medium text-blue-600 bg-blue-50 border border-blue-200 rounded-md hover:bg-blue-100 transition-colors">
                                                <i class="uil uil-external-link-alt mr-1"></i>
                                                View Publication
                                            </a>
                                        @endif
                                        @if($publication->download_url)
                                            <a href="{{ $publication->download_url }}" target="_blank"
                                               class="inline-flex items-center px-3 py-1 text-xs font-medium text-green-600 bg-green-50 border border-green-200 rounded-md hover:bg-green-100 transition-colors">
                                                <i class="uil uil-download-alt mr-1"></i>
                                                Download PDF
                                            </a>
                                        @endif
                                        @if($publication->doi)
                                            <a href="https://doi.org/{{ $publication->doi }}" target="_blank"
                                               class="inline-flex items-center px-3 py-1 text-xs font-medium text-purple-600 bg-purple-50 border border-purple-200 rounded-md hover:bg-purple-100 transition-colors">
                                                <i class="uil uil-link mr-1"></i>
                                                DOI
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Project Team -->
                @if(isset($project->members) && $project->members && $project->members->count() > 0)
                <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-6 mb-8">
                    <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-6 flex items-center">
                        <i class="uil uil-users-alt text-blue-600 mr-2"></i>
                        Project Team
                    </h4>
                    <div class="space-y-4">
                        @foreach($project->members as $member)
                            <div class="flex items-center space-x-3">
                                <img src="{{ $member->image_url }}" alt="{{ $member->name }}" class="size-12 rounded-full object-cover">
                                <div class="flex-1">
                                    <a href="{{ route('team.member', $member->slug) }}" class="font-medium text-slate-900 dark:text-white hover:text-blue-600 transition-colors">
                                        {{ $member->name }}
                                    </a>
                                    <p class="text-sm text-slate-500">{{ $member->position }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Project Statistics -->
                <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-6 mb-8">
                    <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-6">Project Info</h4>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600 dark:text-slate-300">Status</span>
                            <span class="font-medium text-slate-900 dark:text-white">{{ ucfirst($project->status) }}</span>
                        </div>
                        @if($project->project_type)
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600 dark:text-slate-300">Type</span>
                            <span class="font-medium text-slate-900 dark:text-white">{{ ucfirst(str_replace('_', ' ', $project->project_type)) }}</span>
                        </div>
                        @endif
                        @if(isset($project->members) && $project->members && $project->members->count() > 0)
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600 dark:text-slate-300">Team Size</span>
                            <span class="font-medium text-slate-900 dark:text-white">{{ $project->members ? $project->members->count() : 0 }} member{{ ($project->members ? $project->members->count() : 0) !== 1 ? 's' : '' }}</span>
                        </div>
                        @endif
                        @if(isset($project->categories) && $project->categories && $project->categories->count() > 0)
                        <div class="flex justify-between items-center">
                            <span class="text-slate-600 dark:text-slate-300">Research Areas</span>
                            <span class="font-medium text-slate-900 dark:text-white">{{ $project->categories ? $project->categories->count() : 0 }}</span>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Back to Projects -->
                <div class="text-center">
                    <a href="{{ route('research.projects') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="uil uil-arrow-left mr-2"></i>
                        Back to All Projects
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects Section -->
@if(isset($relatedProjects) && $relatedProjects && $relatedProjects->count() > 0)
<section class="relative py-16 bg-slate-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">Related Projects</h3>
            <p class="text-slate-600 dark:text-slate-300 max-w-2xl mx-auto">Explore other projects in similar research areas</p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
            @foreach($relatedProjects as $relatedProject)
                <a href="{{ route('research.project.detail', $relatedProject->slug) }}" class="group block">
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <!-- Project Image -->
                        <div class="relative h-48 overflow-hidden">
                            @if($relatedProject->image)
                            <img src="{{ asset($relatedProject->image) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="{{ $relatedProject->title }}">
                            @else
                            <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                <i class="uil uil-folder-open text-4xl text-white/50"></i>
                            </div>
                            @endif
                        </div>

                        <!-- Project Content -->
                        <div class="p-6">
                            <!-- Categories -->
                            @if(isset($relatedProject->categories) && $relatedProject->categories && $relatedProject->categories->count() > 0)
                            <div class="flex flex-wrap gap-2 mb-3">
                                @foreach($relatedProject->categories->take(2) as $category)
                                    <span class="text-xs px-2 py-1 rounded-md font-medium" style="background-color: {{ $category->color }}20; color: {{ $category->color }};">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </div>
                            @endif

                            <!-- Title -->
                            <h4 class="text-lg font-bold text-slate-900 dark:text-white mb-2 group-hover:text-blue-600 transition-colors">
                                {{ $relatedProject->title }}
                            </h4>

                            <!-- Description -->
                            @if($relatedProject->description)
                            <p class="text-slate-600 dark:text-slate-300 text-sm">
                                {{ Str::limit($relatedProject->description, 100) }}
                            </p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection