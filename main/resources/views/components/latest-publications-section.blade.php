@php
$data = json_decode(file_get_contents(resource_path('data/publications/latest-publications.json')), true);
$sectionData = $data['section'] ?? [];
$publications = $data['publications'] ?? [];

// Sort by priority
usort($publications, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});
@endphp

<!-- Latest Publications Section -->
<section class="relative md:py-24 py-16 publications-diagonal-bg">
    <div class="container relative">
        <!-- Section Header -->
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h6 class="text-blue-600 text-sm font-bold uppercase mb-2">{{ $sectionData['subtitle'] ?? 'Academic Impact' }}</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-slate-900 dark:text-white">
                    {{ $sectionData['title'] ?? 'Latest Publications' }}
                </h3>
                <p class="text-slate-400 max-w-xl">
                    {{ $sectionData['description'] ?? 'Our recent research contributions to the scientific community.' }}
                </p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="{{ url($sectionData['view_all_link'] ?? '/research/publications') }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600 duration-500 ease-in-out">
                    {{ $sectionData['view_all_text'] ?? 'View All Publications' }} <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div><!--end grid-->

        <!-- Publications List -->
        <div class="grid grid-cols-1 mt-8">
            
            @foreach($publications as $publication)
            <!-- Publication {{ $loop->iteration }} -->
            <div class="group relative p-6 shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 rounded-xl hover:shadow-xl transition-all duration-500 border-l-4 border-{{ $publication['border_color'] ?? 'blue-600' }} mb-8">
                <div class="flex items-start justify-between">
                    <!-- Publication Image -->
                    <div class="w-20 h-20 bg-{{ $publication['bg_color'] ?? 'blue-100' }} rounded-lg mr-4 flex-shrink-0 flex items-center justify-center mt-0 md:mt-12" style="margin-top: 48px">
                        <img src="{{ asset($publication['image'] ?? 'assets/images/publications/default.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="{{ $publication['title'] ?? 'Publication' }}">
                    </div>
                    
                    <div class="flex-1 ml-0 md:ml-8" style="padding-left:32px">
                        <!-- Publication Type Badge -->
                        <div class="flex items-center gap-3 mb-3">
                            @foreach($publication['badges'] ?? [] as $badge)
                            <span class="bg-{{ $badge['bg_color'] ?? 'blue-100' }} text-{{ $badge['text_color'] ?? 'blue-600' }} text-xs px-3 py-1 rounded-full font-medium">{{ $badge['text'] }}</span>
                            @endforeach
                        </div>
                        
                        <h5 class="text-lg font-medium text-slate-900 dark:text-white group-hover:text-{{ $publication['hover_color'] ?? 'blue-600' }} transition-colors duration-300 mb-2">
                            <a href="{{ url($publication['url'] ?? '#') }}">
                                {{ $publication['title'] ?? 'Publication Title' }}
                            </a>
                        </h5>
                        
                        <p class="text-slate-400 mb-3">
                            {{ $publication['description'] ?? 'Publication description.' }}
                        </p>
                        
                        <!-- Authors -->
                        <div class="flex flex-wrap items-center gap-1 mb-3">
                            @foreach($publication['authors'] ?? [] as $author)
                            <span class="text-sm text-slate-600 dark:text-slate-300 {{ $author['lead'] ? 'font-medium' : '' }}">{{ $author['name'] ?? 'Author' }}{{ !$loop->last ? ',' : '' }}</span>
                            @endforeach
                        </div>
                        
                        <!-- Publication Details -->
                        <div class="flex flex-wrap items-center gap-4 text-sm text-slate-400">
                            <div class="flex items-center">
                                <i class="uil uil-calendar-alt me-1"></i>
                                <span>Published: {{ $publication['published_date'] ?? 'Date' }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="uil uil-eye me-1"></i>
                                <span>{{ number_format($publication['views'] ?? 0) }} views</span>
                            </div>
                            <div class="flex items-center">
                                <i class="uil uil-heart me-1"></i>
                                <span>{{ number_format($publication['citations'] ?? 0) }} citations</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col gap-2 ml-6">
                        <a href="{{ url($publication['url'] ?? '#') }}" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-{{ $publication['text_color'] ?? 'blue-600' }} hover:bg-{{ str_replace('-600', '-700', $publication['text_color'] ?? 'blue-700') }} text-white rounded-full" title="View Publication">
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

        <!-- Mobile View All Button -->
        <div class="grid grid-cols-1 mt-8 md:hidden">
            <div class="text-center">
                <a href="{{ url($sectionData['view_all_link'] ?? '/research/publications') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md">
                    {{ $sectionData['view_all_text'] ?? 'View All Publications' }} <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Latest Publications Section -->