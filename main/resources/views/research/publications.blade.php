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

        <!-- Advanced Filter Section -->
        <div class="relative mb-12">
            <div class="bg-gray-100 dark:bg-slate-800 rounded-2xl p-8 border border-gray-200 dark:border-slate-600">
                <!-- Filter Header -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-3">
                        <div class="size-10 bg-blue-600 rounded-xl flex items-center justify-center">
                            <i class="uil uil-filter text-white text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Filter Publications</h4>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Find research by year, topic, or publication type</p>
                        </div>
                    </div>
                    <button id="resetFilters" class="text-sm font-medium text-blue-600 hover:text-blue-700 duration-300 flex items-center cursor-pointer" style="gap: 6px;">
                        <i class="uil uil-redo text-xs"></i>
                        <span>Reset Filters</span>
                    </button>
                </div>

                <!-- Filter Form -->
                <form method="GET" action="{{ route('research.publications') }}" class="filter-form">
                    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
                        
                        <!-- Year Filter -->
                        <div class="filter-group">
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-3 flex items-center space-x-2">
                                <i class="uil uil-calendar-alt text-emerald-600"></i>
                                <span>Publication Year</span>
                            </label>
                            <div class="relative">
                                <select name="year" class="w-full px-4 py-3 bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-600 rounded-xl text-slate-900 dark:text-white focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all duration-300 appearance-none cursor-pointer">
                                    <option value="">All Years</option>
                                    @php
                                        $currentYear = date('Y');
                                        $startYear = 2015; // Adjust based on your oldest publications
                                    @endphp
                                    @for($year = $currentYear; $year >= $startYear; $year--)
                                        <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                    @endfor
                                </select>
                                <i class="uil uil-angle-down absolute right-4 top-1/2 transform -translate-y-1/2 text-slate-400 pointer-events-none"></i>
                            </div>
                        </div>

                        <!-- Research Topic Filter -->
                        <div class="filter-group">
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-3 flex items-center space-x-2">
                                <i class="uil uil-tag-alt text-violet-600"></i>
                                <span>Research Topic</span>
                            </label>
                            <div class="relative">
                                <select name="topic" class="w-full px-4 py-3 bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-600 rounded-xl text-slate-900 dark:text-white focus:ring-2 focus:ring-violet-500 focus:border-violet-500 outline-none transition-all duration-300 appearance-none cursor-pointer">
                                    <option value="">All Topics</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->slug }}" {{ request('topic') == $category->slug ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <i class="uil uil-angle-down absolute right-4 top-1/2 transform -translate-y-1/2 text-slate-400 pointer-events-none"></i>
                            </div>
                        </div>

                        <!-- Publication Type Filter -->
                        <div class="filter-group">
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-3 flex items-center space-x-2">
                                <i class="uil uil-file-alt text-amber-600"></i>
                                <span>Publication Type</span>
                            </label>
                            <div class="relative">
                                <select name="type" class="w-full px-4 py-3 bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-600 rounded-xl text-slate-900 dark:text-white focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition-all duration-300 appearance-none cursor-pointer">
                                    <option value="">All Types</option>
                                    @foreach(\App\Models\Publication::getPublicationTypes() as $key => $label)
                                        <option value="{{ $key }}" {{ request('type') == $key ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                                <i class="uil uil-angle-down absolute right-4 top-1/2 transform -translate-y-1/2 text-slate-400 pointer-events-none"></i>
                            </div>
                        </div>

                        <!-- Search Filter -->
                        <div class="filter-group">
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-3 flex items-center space-x-2">
                                <i class="uil uil-search text-blue-600"></i>
                                <span>Search</span>
                            </label>
                            <div class="relative">
                                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search titles, authors..." class="w-full px-4 py-3 bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-600 rounded-xl text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all duration-300">
                                <i class="uil uil-search absolute right-4 top-1/2 transform -translate-y-1/2 text-slate-400 pointer-events-none"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Filter Actions -->
                    <div class="flex flex-wrap items-center justify-between mt-6 pt-6 border-t border-gray-200 dark:border-slate-600">
                        <div class="flex flex-wrap items-center gap-3 mb-3 md:mb-0">
                            <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-xl transition-colors duration-300 flex items-center space-x-2 cursor-pointer">
                                <i class="uil uil-filter text-sm"></i>
                                <span>Apply Filters</span>
                            </button>
                        </div>
                        
                        <div class="text-sm text-slate-500 dark:text-slate-400">
                            @if(request()->hasAny(['year', 'topic', 'type', 'search']))
                                <span class="font-medium">Filtered Results:</span> {{ $publications->total() }} publications
                            @else
                                <span class="font-medium">Total:</span> {{ $publications->total() }} publications
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Publications List -->
        <div class="grid grid-cols-1 gap-9">
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
                <div class="group relative p-6 bg-gray-50 dark:bg-slate-800 rounded-xl transition-all duration-300 border-l-4 border-{{ $color['border'] }}" style="margin-bottom: 36px; border: 1px solid #ddd;">
                    <div class="flex items-start gap-4">
                        <!-- Publication Image -->
                        <div class="w-20 h-20 bg-{{ $color['bg'] }} rounded-lg flex-shrink-0 flex items-center justify-center" style="margin-top: 48px">
                            <img src="{{ $publication->image_url ?? asset('assets/images/publications/default-publication.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="{{ $publication->title }}">
                        </div>

                        <div class="flex-1">
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

                            <!-- Full Authors List -->
                            @if($publication->authors)
                            <p class="text-slate-500 mb-3" style="font-size: 12px; line-height: 1.4;">{{ $publication->authors }}</p>
                            @endif
                            
                            <!-- Journal/Conference -->
                            <div class="flex items-center gap-4 mb-3 text-sm text-slate-600">
                                @if($publication->journal)
                                <span><strong>Journal:</strong> {{ $publication->journal }}</span>
                                @endif
                                @if($publication->conference)
                                <span><strong>Conference:</strong> {{ $publication->conference }}</span>
                                @endif
                            </div>
                            
                            <!-- Abstract -->
                            @if($publication->abstract)
                            <div class="text-slate-500 text-sm mb-4">
                                <div class="expandable-text" data-lines="2">
                                    <div class="text-content line-clamp-2">
                                        {{ $publication->abstract }}
                                    </div>
                                    <button class="show-more-btn text-blue-600 hover:text-blue-800 text-xs font-medium mt-1 focus:outline-none cursor-pointer" onclick="toggleText(this)">
                                        Show more...
                                    </button>
                                </div>
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

                            <!-- Publication Links -->
                            <div class="flex flex-wrap gap-2 mt-4 pt-4 border-t border-gray-100 dark:border-gray-700">
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

@push('styles')
<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.expandable-text .text-content {
    transition: all 0.3s ease;
}

.expandable-text.expanded .text-content {
    -webkit-line-clamp: unset;
    overflow: visible;
    display: block;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Remove auto-submit functionality - filters only apply when button is pressed

    // Clear filters functionality
    const resetFiltersBtn = document.getElementById('resetFilters');

    function clearAllFilters() {
        const form = document.querySelector('.filter-form');
        form.reset();
        // Clear URL parameters by submitting empty form
        window.location.href = "{{ route('research.publications') }}";
    }

    if (resetFiltersBtn) {
        resetFiltersBtn.addEventListener('click', clearAllFilters);
    }

    // Remove search input auto-submit - search only applies when button is pressed
});

// Expandable text functionality
function toggleText(button) {
    const expandableDiv = button.closest('.expandable-text');
    const textContent = expandableDiv.querySelector('.text-content');
    const isExpanded = expandableDiv.classList.contains('expanded');

    if (isExpanded) {
        // Collapse the text
        expandableDiv.classList.remove('expanded');
        textContent.classList.add('line-clamp-2');
        button.textContent = 'Show more...';
    } else {
        // Expand the text
        expandableDiv.classList.add('expanded');
        textContent.classList.remove('line-clamp-2');
        button.textContent = 'Show less';
    }
}
</script>
@endpush