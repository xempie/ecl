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
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ route('home') }}">Empathic Computing Lab</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ route('research') }}">Research</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Publications</li>
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

@php
$data = json_decode(file_get_contents(resource_path('data/publications.json')), true);
$sectionData = $data['section'] ?? [];
$publications = $data['publications'] ?? [];

// Sort by priority
usort($publications, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});

// Convert publications to match homepage format
$convertedPublications = [];
$colors = [
    ['border' => 'blue-600', 'bg' => 'blue-100', 'text' => 'blue-600', 'hover' => 'blue-600'],
    ['border' => 'emerald-600', 'bg' => 'emerald-100', 'text' => 'emerald-600', 'hover' => 'emerald-600'],
    ['border' => 'violet-600', 'bg' => 'violet-100', 'text' => 'violet-600', 'hover' => 'violet-600'],
    ['border' => 'amber-600', 'bg' => 'amber-100', 'text' => 'amber-600', 'hover' => 'amber-600']
];

foreach ($publications as $index => $publication) {
    $colorIndex = $index % count($colors);
    $color = $colors[$colorIndex];
    
    $convertedPublications[] = [
        'title' => $publication['title'],
        'description' => $publication['abstract'],
        'url' => '#',
        'image' => 'assets/images/publications/cnf.png',
        'border_color' => $color['border'],
        'bg_color' => $color['bg'],
        'text_color' => $color['text'],
        'hover_color' => $color['hover'],
        'badges' => [
            ['text' => $publication['type'] === 'journal' ? 'Journal Article' : 'Conference Paper', 'bg_color' => $color['bg'], 'text_color' => $color['text']]
        ],
        'authors' => [
            ['name' => $publication['authors'], 'lead' => true]
        ],
        'published_date' => $publication['year'],
        'views' => rand(500, 5000),
        'citations' => rand(10, 200)
    ];
}
@endphp

<!-- Publications Section -->
<section class="relative md:py-24 py-16 publications-diagonal-bg">
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
                    <span class="font-semibold">{{ count($publications) }}</span> Publications Total
                </div>
            </div>
        </div><!--end grid-->

        <!-- Advanced Filter Section -->
        <div class="relative mb-12">
            <div class="bg-gray-100 dark:bg-slate-800 rounded-2xl p-8 shadow-lg border border-gray-200 dark:border-slate-600">
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
                    <button class="text-sm font-medium text-blue-600 hover:text-blue-700 duration-300 flex items-center space-x-1">
                        <i class="uil uil-redo text-xs"></i>
                        <span>Reset Filters</span>
                    </button>
                </div>

                <!-- Filter Controls -->
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                    
                    <!-- Year Filter -->
                    <div class="filter-group">
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-3 flex items-center space-x-2">
                            <i class="uil uil-calendar-alt text-emerald-600"></i>
                            <span>Publication Year</span>
                        </label>
                        <div class="relative">
                            <select class="w-full px-4 py-3 bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-600 rounded-xl text-slate-900 dark:text-white focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all duration-300 appearance-none cursor-pointer">
                                <option value="">All Years</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="older">2019 & Earlier</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <i class="uil uil-angle-down text-slate-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Topic Filter -->
                    <div class="filter-group">
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-3 flex items-center space-x-2">
                            <i class="uil uil-brain text-violet-600"></i>
                            <span>Research Topic</span>
                        </label>
                        <div class="relative">
                            <select class="w-full px-4 py-3 bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-600 rounded-xl text-slate-900 dark:text-white focus:ring-2 focus:ring-violet-500 focus:border-violet-500 outline-none transition-all duration-300 appearance-none cursor-pointer">
                                <option value="">All Topics</option>
                                <option value="empathic-computing">Empathic Computing</option>
                                <option value="emotion-recognition">Emotion Recognition</option>
                                <option value="virtual-reality">Virtual Reality</option>
                                <option value="augmented-reality">Augmented Reality</option>
                                <option value="ai-ethics">AI Ethics</option>
                                <option value="hci">Human-Computer Interaction</option>
                                <option value="machine-learning">Machine Learning</option>
                                <option value="nlp">Natural Language Processing</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <i class="uil uil-angle-down text-slate-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Publication Type Filter -->
                    <div class="filter-group">
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-3 flex items-center space-x-2">
                            <i class="uil uil-file-alt text-amber-600"></i>
                            <span>Publication Type</span>
                        </label>
                        <div class="relative">
                            <select class="w-full px-4 py-3 bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-600 rounded-xl text-slate-900 dark:text-white focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition-all duration-300 appearance-none cursor-pointer">
                                <option value="">All Types</option>
                                <option value="journal">Journal Articles</option>
                                <option value="conference">Conference Papers</option>
                                <option value="workshop">Workshop Papers</option>
                                <option value="book-chapter">Book Chapters</option>
                                <option value="thesis">Thesis & Dissertations</option>
                                <option value="patent">Patents</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <i class="uil uil-angle-down text-slate-400"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Search Bar -->
                <div class="mt-6 pt-6 border-t border-gray-300 dark:border-slate-600">
                    <div class="flex items-center max-w-lg mx-auto gap-4">
                        <div class="relative flex-1">
                            <div class="absolute top-3 left-3 pl-4 flex items-center justify-center pointer-events-none" style="left: 5px;">
                                <i class="uil uil-search text-slate-400 text-lg"></i>
                            </div>
                            <input type="text" placeholder="Search publications by title, author, or keywords..." class="w-full pl-4 pr-4 py-3 bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-600 rounded-xl text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all duration-300" style="padding-left: 24px;">
                        </div>
                        <button type="button" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl flex items-center gap-2 transition-colors duration-300 text-sm font-medium whitespace-nowrap">
                            <span>Apply Filter</span>
                            <i class="uil uil-arrow-right text-xs"></i>
                        </button>
                    </div>
                </div>

                <!-- Filter Results Summary -->
                <div class="mt-6 flex flex-wrap items-center justify-between gap-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="text-sm text-slate-600 dark:text-slate-400">Active filters:</span>
                        <!-- Example filter tags (these would be dynamically generated) -->
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                            2024 <i class="uil uil-times ml-1 cursor-pointer hover:text-blue-600"></i>
                        </span>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900 dark:text-emerald-200">
                            Journal Articles <i class="uil uil-times ml-1 cursor-pointer hover:text-emerald-600"></i>
                        </span>
                    </div>
                    <div class="text-sm text-slate-500 dark:text-slate-400">
                        Showing <span class="font-semibold text-slate-700 dark:text-slate-300">{{ count($publications) }}</span> of <span class="font-semibold text-slate-700 dark:text-slate-300">{{ count($publications) }}</span> publications
                    </div>
                </div>
            </div>
        </div><!--end filter section-->

        <!-- Publications List -->
        <div class="grid grid-cols-1 mt-8">
            
            @foreach($convertedPublications as $publication)
            <!-- Publication {{ $loop->iteration }} -->
            <div class="group relative p-6 shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 rounded-xl hover:shadow-xl transition-all duration-500 border-l-4 border-{{ $publication['border_color'] }} mb-8">
                <div class="flex items-start justify-between">
                    <!-- Publication Image -->
                    <div class="w-20 h-20 bg-{{ $publication['bg_color'] }} rounded-lg mr-4 flex-shrink-0 flex items-center justify-center mt-0 md:mt-12" style="margin-top: 48px">
                        <img src="{{ asset($publication['image']) }}" class="w-full h-full object-cover rounded-lg" alt="{{ $publication['title'] }}">
                    </div>
                    
                    <div class="flex-1 ml-0 md:ml-8" style="padding-left:32px">
                        <!-- Publication Type Badge -->
                        <div class="flex items-center gap-3 mb-3">
                            @foreach($publication['badges'] as $badge)
                            <span class="bg-{{ $badge['bg_color'] }} text-{{ $badge['text_color'] }} text-xs px-3 py-1 rounded-full font-medium">{{ $badge['text'] }}</span>
                            @endforeach
                        </div>
                        
                        <h5 class="text-lg font-medium text-slate-900 dark:text-white group-hover:text-{{ $publication['hover_color'] }} transition-colors duration-300 mb-2">
                            <a href="{{ $publication['url'] }}">
                                {{ $publication['title'] }}
                            </a>
                        </h5>
                        
                        <p class="text-slate-400 mb-3">
                            {{ $publication['description'] }}
                        </p>
                        
                        <!-- Authors -->
                        <div class="flex flex-wrap items-center gap-1 mb-3">
                            @foreach($publication['authors'] as $author)
                            <span class="text-sm text-slate-600 dark:text-slate-300 {{ $author['lead'] ? 'font-medium' : '' }}">{{ $author['name'] }}{{ !$loop->last ? ',' : '' }}</span>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col gap-2 ml-6">
                        <a href="{{ $publication['url'] }}" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-{{ $publication['text_color'] }} hover:bg-{{ str_replace('-600', '-700', $publication['text_color']) }} text-white rounded-full" title="View Publication">
                            <i class="uil uil-eye"></i>
                        </a>
                        <a href="#" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-full" title="Download PDF">
                            <i class="uil uil-download-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div><!--end grid-->

        <!-- Publication Stats -->
        <div class="grid md:grid-cols-4 grid-cols-2 gap-6 mt-16">
            <div class="counter-box text-center">
                <h1 class="text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="150">1</span>+</h1>
                <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase">Publications</h5>
            </div><!--end counter box-->

            <div class="counter-box text-center">
                <h1 class="text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="25">1</span>+</h1>
                <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase">Journal Articles</h5>
            </div><!--end counter box-->

            <div class="counter-box text-center">
                <h1 class="text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="85">1</span>+</h1>
                <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase">Conference Papers</h5>
            </div><!--end counter box-->

            <div class="counter-box text-center">
                <h1 class="text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="2500">1</span>+</h1>
                <h5 class="counter-head text-sm font-semibold text-slate-400 uppercase">Citations</h5>
            </div><!--end counter box-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Publications Section -->

@endsection