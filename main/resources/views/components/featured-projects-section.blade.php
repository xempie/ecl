@php
$data = json_decode(file_get_contents(resource_path('data/projects/featured-projects.json')), true);
$sectionData = $data['section'] ?? [];
$projects = $data['projects'] ?? [];

// Sort by priority
usort($projects, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});
@endphp

<!-- Featured Projects Section -->
<section class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <!-- Section Header -->
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h6 class="text-blue-600 text-sm font-bold uppercase mb-2">{{ $sectionData['subtitle'] ?? 'Our Work' }}</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-slate-900">
                    {{ $sectionData['title'] ?? 'Featured Research Projects' }}
                </h3>
                <p class="text-slate-400 max-w-xl">
                    {{ $sectionData['description'] ?? 'Discover our groundbreaking projects.' }}
                </p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="{{ url($sectionData['view_all_link'] ?? '/research/projects') }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600 duration-500 ease-in-out">
                    {{ $sectionData['view_all_text'] ?? 'View All Projects' }} <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div><!--end grid-->

        <!-- Projects Grid -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            @foreach($projects as $project)
            <!-- Project {{ $loop->iteration }}: {{ $project['title'] ?? 'Project' }} -->
            <div class="group relative rounded-xl overflow-hidden shadow-md dark:shadow-gray-800 hover:shadow-xl transition-all duration-500 h-full min-h-[500px] flex flex-col">
                <div class="relative overflow-hidden h-[200px]">
                    <img src="{{ asset($project['image'] ?? 'assets/images/projects/default.jpg') }}" class="group-hover:scale-110 duration-500 w-full h-full object-cover" alt="{{ $project['title'] ?? 'Project' }}">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    
                    <!-- Project Category Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-{{ $project['category']['color'] ?? 'blue-600' }} text-white text-xs px-3 py-1 rounded-full font-medium">{{ $project['category']['name'] ?? 'Research' }}</span>
                    </div>
                    
                    <!-- Quick View Button -->
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <a href="{{ url($project['url'] ?? '#') }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-white hover:bg-{{ $project['category']['color'] ?? 'blue-600' }} text-slate-900 hover:text-white rounded-full">
                            <i class="uil uil-eye"></i>
                        </a>
                    </div>
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

        <!-- Mobile View All Button -->
        <div class="grid grid-cols-1 mt-8 md:hidden">
            <div class="text-center">
                <a href="{{ url($sectionData['view_all_link'] ?? '/research/projects') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md">
                    {{ $sectionData['view_all_text'] ?? 'View All Projects' }} <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Featured Projects Section -->