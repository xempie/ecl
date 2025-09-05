@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - Publications | Research Papers & Academic Works')

@section('description', 'Explore our extensive collection of research publications, peer-reviewed papers, and academic contributions in empathic computing, AI emotion recognition, and human-computer interaction.')

@section('keywords', 'research publications, empathic computing papers, AI emotion recognition research, HCI publications, academic papers, peer-reviewed articles')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/research/research.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Research Publications</h3>

            <p class="text-slate-300 text-lg max-w-xl mx-auto">Discover our cutting-edge research contributions to empathic computing, AI emotion recognition, and human-computer interaction.</p>
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

<!-- Publications Section -->
<section class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <!-- Section Header -->
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h6 class="text-blue-600 text-sm font-bold uppercase mb-2">Academic Impact</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-slate-900 dark:text-white">
                    All Publications
                </h3>
                <p class="text-slate-400 max-w-xl">
                    Our complete collection of research contributions to the scientific community in empathic computing and human-computer interaction.
                </p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <div class="text-slate-400">
                    <span class="font-semibold">{{ $publications->total() }}</span> Publications Total
                </div>
            </div>
        </div><!--end grid-->

        <!-- Research Topics Filter -->
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
                    <a href="{{ route('research.publications') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                        All Publications
                    </a>
                    @foreach($categories as $category)
                        <a href="{{ route('research.publications') }}?topic={{ $category->slug }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors border" style="border-color: {{ $category->color }}; color: {{ $category->color }};" onmouseover="this.style.backgroundColor='{{ $category->color }}'; this.style.color='white';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='{{ $category->color }}';">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- Publications List -->
        <div class="grid grid-cols-1 gap-8">
            @forelse($publications as $index => $publication)
                @php
                    $colors = [
                        ['border' => 'blue-600', 'bg' => 'blue-100', 'text' => 'blue-600'],
                        ['border' => 'emerald-600', 'bg' => 'emerald-100', 'text' => 'emerald-600'],
                        ['border' => 'violet-600', 'bg' => 'violet-100', 'text' => 'violet-600'],
                        ['border' => 'amber-600', 'bg' => 'amber-100', 'text' => 'amber-600']
                    ];
                    $colorIndex = $index % count($colors);
                    $color = $colors[$colorIndex];
                @endphp
                
                <!-- Publication {{ $loop->iteration }} -->
                <div class="group relative p-6 shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 rounded-xl hover:shadow-xl transition-all duration-500 border-l-4 border-{{ $color['border'] }}">
                    <div class="flex items-start justify-between">
                        <!-- Publication Image -->
                        <div class="w-20 h-20 bg-{{ $color['bg'] }} rounded-lg mr-4 flex-shrink-0 flex items-center justify-center" style="margin-top: 48px">
                            <img src="{{ $publication->image_url ?? asset('assets/images/publications/default-publication.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="{{ $publication->title }}">
                        </div>
                        
                        <div class="flex-1 ml-8">
                            <!-- Publication Type Badges -->
                            <div class="flex items-center gap-3 mb-3">
                                <span class="bg-{{ $color['bg'] }} text-{{ $color['text'] }} text-xs px-3 py-1 rounded-full font-medium">{{ ucfirst($publication->type) }}</span>
                                @if($publication->year)
                                <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full font-medium">{{ $publication->year }}</span>
                                @endif
                                @if($publication->status)
                                <span class="bg-green-100 text-green-600 text-xs px-3 py-1 rounded-full font-medium">{{ ucfirst($publication->status) }}</span>
                                @endif
                            </div>
                            
                            <!-- Title -->
                            <h5 class="text-lg font-medium text-slate-900 dark:text-white group-hover:text-{{ $color['text'] }} transition-colors duration-300 mb-2">
                                @if($publication->url)
                                <a href="{{ $publication->url }}" target="_blank">
                                    {{ $publication->title }}
                                </a>
                                @else
                                    {{ $publication->title }}
                                @endif
                            </h5>
                            
                            <!-- Journal/Conference -->
                            <div class="flex items-center gap-4 mb-3 text-sm text-slate-600">
                                @if($publication->journal)
                                <span><strong>Journal:</strong> {{ $publication->journal }}</span>
                                @endif
                                @if($publication->conference)
                                <span><strong>Conference:</strong> {{ $publication->conference }}</span>
                                @endif
                                @if($publication->doi)
                                <span><strong>DOI:</strong> {{ $publication->doi }}</span>
                                @endif
                            </div>
                            
                            <!-- Abstract -->
                            @if($publication->abstract)
                            <p class="text-slate-400 mb-4">
                                {{ Str::limit($publication->abstract, 200) }}
                            </p>
                            @endif
                            
                            <!-- Authors -->
                            <div class="flex flex-wrap items-center gap-1 mb-3">
                                <span class="text-sm text-slate-600 dark:text-slate-300"><strong>Authors:</strong> {{ $publication->authors }}</span>
                            </div>

                            <!-- Lab Members -->
                            @if($publication->members->count() > 0)
                            <div class="flex flex-wrap items-center gap-2 mb-3">
                                <span class="text-sm text-slate-500">Lab Members:</span>
                                @foreach($publication->members as $member)
                                    <a href="{{ url('/team/' . $member->slug) }}" class="text-sm bg-gray-100 hover:bg-gray-200 text-gray-700 px-2 py-1 rounded-md transition-colors">{{ $member->name }}</a>
                                @endforeach
                            </div>
                            @endif

                            <!-- Categories -->
                            @if($publication->categories->count() > 0)
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach($publication->categories as $category)
                                    <span class="text-xs px-2 py-1 rounded-md" style="background-color: {{ $category->color }}20; color: {{ $category->color }};">{{ $category->name }}</span>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex flex-col gap-2 ml-6">
                            @if($publication->url)
                            <a href="{{ $publication->url }}" target="_blank" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-{{ $color['text'] }} hover:bg-{{ str_replace('-600', '-700', $color['text']) }} text-white rounded-full" title="View Publication">
                                <i class="uil uil-eye"></i>
                            </a>
                            @endif
                            @if($publication->download_url)
                            <a href="{{ $publication->download_url }}" target="_blank" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-emerald-600 hover:bg-emerald-700 text-white rounded-full" title="Download PDF">
                                <i class="uil uil-download-alt"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-12">
                    <div class="size-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="uil uil-file-alt text-3xl text-gray-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-2">No Publications Found</h3>
                    <p class="text-slate-500">Publications will appear here once they are added through the admin panel.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($publications->hasPages())
        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                {{ $publications->links() }}
            </div><!--end col-->
        </div><!--end grid-->
        @endif
    </div><!--end container-->
</section><!--end section-->

@endsection