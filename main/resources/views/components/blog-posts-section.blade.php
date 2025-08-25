@php
$data = json_decode(file_get_contents(resource_path('data/blogs/latest-blogs.json')), true);
$sectionData = $data['section'] ?? [];
$blogs = $data['blogs'] ?? [];

// Sort by priority
usort($blogs, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});
@endphp

<!-- Blog Posts Section -->
<section class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <!-- Section Header -->
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h6 class="text-blue-600 text-sm font-bold uppercase mb-2">{{ $sectionData['subtitle'] ?? 'Stay Updated' }}</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-slate-900">
                    {{ $sectionData['title'] ?? 'Latest News & Insights' }}
                </h3>
                <p class="text-slate-400 max-w-xl">
                    {{ $sectionData['description'] ?? 'Discover the latest developments in empathic computing.' }}
                </p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="{{ url($sectionData['view_all_link'] ?? '/news') }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600 duration-500 ease-in-out">
                    {{ $sectionData['view_all_text'] ?? 'View All News' }} <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div><!--end grid-->

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            
            @foreach($blogs as $blog)
            <!-- Blog Post {{ $loop->iteration }} -->
            <div class="group relative rounded-xl overflow-hidden shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 hover:shadow-xl transition-all duration-500 h-full min-h-[600px] flex flex-col">
                <div class="relative overflow-hidden h-[250px]">
                    <img src="{{ asset($blog['image'] ?? 'assets/images/blog/default.jpg') }}" class="group-hover:scale-110 duration-500 w-full h-full object-cover" alt="{{ $blog['title'] ?? 'Blog Post' }}">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    
                    <!-- Category Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-{{ $blog['category']['color'] ?? 'blue-600' }} text-white text-xs px-3 py-1 rounded-full font-medium">{{ $blog['category']['name'] ?? 'Blog' }}</span>
                    </div>
                    
                    <!-- Read Time -->
                    <div class="absolute top-4 right-4">
                        <span class="bg-white/90 text-slate-900 text-xs px-2 py-1 rounded-full font-medium">{{ $blog['read_time'] ?? '5 min read' }}</span>
                    </div>
                    
                    <!-- Quick Read Button -->
                    <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <a href="{{ url($blog['url'] ?? '#') }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-white hover:bg-{{ $blog['category']['color'] ?? 'blue-600' }} text-slate-900 hover:text-white rounded-full">
                            <i class="uil uil-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="p-6 flex-1 flex flex-col">
                    <!-- Date and Author -->
                    <div class="flex items-center justify-between mb-4 text-sm text-slate-400">
                        <div class="flex items-center">
                            <i class="uil uil-calendar-alt me-2"></i>
                            <span>{{ $blog['published_date'] ?? 'Date' }}</span>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset($blog['author']['image'] ?? 'assets/images/team/default.jpg') }}" class="size-6 rounded-full me-2" alt="{{ $blog['author']['full_name'] ?? 'Author' }}">
                            <span>{{ $blog['author']['name'] ?? 'Author' }}</span>
                        </div>
                    </div>
                    
                    <h5 class="text-lg font-medium hover:text-{{ $blog['hover_color'] ?? 'blue-600' }} transition-colors duration-300 mb-3">
                        <a href="{{ url($blog['url'] ?? '#') }}">
                            {{ $blog['title'] ?? 'Blog Title' }}
                        </a>
                    </h5>
                    
                    <p class="text-slate-400 mb-4 flex-1">
                        {{ $blog['excerpt'] ?? $blog['description'] ?? 'Blog description.' }}
                    </p>
                    
                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($blog['tags'] ?? [] as $tag)
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">{{ $tag }}</span>
                        @endforeach
                    </div>
                    
                    <!-- Read More Link -->
                    <div class="flex items-center justify-between">
                        <a href="{{ url($blog['url'] ?? '#') }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-sm text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-{{ $blog['hover_color'] ?? 'blue-600' }} hover:text-{{ $blog['hover_color'] ?? 'blue-600' }} after:bg-{{ $blog['hover_color'] ?? 'blue-600' }} duration-500 ease-in-out">
                            Read More <i class="uil uil-arrow-right text-xs"></i>
                        </a>
                        <div class="flex items-center text-slate-400 text-sm">
                            <i class="uil uil-eye me-1"></i>
                            <span>{{ number_format($blog['views'] ?? 0) }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div><!--end grid-->

        <!-- Mobile View All Button -->
        <div class="grid grid-cols-1 mt-8 md:hidden">
            <div class="text-center">
                <a href="{{ url($sectionData['view_all_link'] ?? '/news') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md">
                    {{ $sectionData['view_all_text'] ?? 'View All News' }} <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Blog Posts Section -->