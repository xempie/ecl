<!-- Featured Projects Section -->
<section class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <!-- Section Header -->
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h6 class="text-blue-600 text-sm font-bold uppercase mb-2">Our Work</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-slate-900">
                    Featured Research Projects
                </h3>
                <p class="text-slate-400 max-w-xl">
                    Discover our groundbreaking projects in empathic computing, AI emotion recognition, and human-computer interaction.
                </p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="{{ url('/research/projects') }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600 duration-500 ease-in-out">
                    View All Projects <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div><!--end grid-->

        <!-- Projects Grid -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            @forelse($recentProjects as $project)
            <!-- Project {{ $loop->iteration }}: {{ $project->title }} -->
            <div class="group relative rounded-xl overflow-hidden shadow-md dark:shadow-gray-800 hover:shadow-xl transition-all duration-500 h-full min-h-[500px] flex flex-col">
                <div class="relative overflow-hidden h-[200px] cursor-pointer">
                    <a href="{{ route('research.project.detail', $project->slug) }}">
                        @if($project->image)
                            <img src="{{ asset($project->image) }}" class="group-hover:scale-110 duration-500 w-full h-full object-cover cursor-pointer" alt="{{ $project->title }}">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                <i class="uil uil-folder-open text-6xl text-white/50"></i>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    </a>

                    <!-- Project Category Badge -->
                    @if($project->categories && $project->categories->count() > 0)
                    <div class="absolute top-4 left-4">
                        @php $firstCategory = $project->categories->first(); @endphp
                        <span class="text-white text-xs px-3 py-1 rounded-full font-medium" style="background-color: {{ $firstCategory->color }};">{{ $firstCategory->name }}</span>
                    </div>
                    @endif

                </div>

                <div class="p-6 flex-1 flex flex-col">
                    <h5 class="text-lg font-medium hover:text-blue-600 transition-colors duration-300">
                        <a href="{{ route('research.project.detail', $project->slug) }}">{{ $project->title }}</a>
                    </h5>
                    @if($project->description)
                    <p class="text-slate-400 mt-3 flex-1">
                        {{ Str::limit($project->description, 120) }}
                    </p>
                    @endif

                    <!-- Project Stats -->
                    <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                        @if($project->start_date || $project->end_date)
                        <div class="flex items-center">
                            <i class="uil uil-calendar-alt text-slate-400 me-2"></i>
                            <span class="text-sm text-slate-400">
                                @if($project->start_date)
                                    {{ \Carbon\Carbon::parse($project->start_date)->format('M Y') }}
                                @endif
                                @if($project->start_date && $project->end_date)
                                    - {{ \Carbon\Carbon::parse($project->end_date)->format('M Y') }}
                                @elseif($project->start_date)
                                    - Present
                                @endif
                            </span>
                        </div>
                        @endif
                        @if($project->members && $project->members->count() > 0)
                        <div class="flex items-center">
                            <i class="uil uil-users-alt text-slate-400 me-2"></i>
                            <span class="text-sm text-slate-400">{{ $project->members->count() }} member{{ $project->members->count() !== 1 ? 's' : '' }}</span>
                        </div>
                        @endif
                    </div>

                    <!-- Categories -->
                    @if($project->categories && $project->categories->count() > 1)
                    <div class="flex flex-wrap gap-2 mt-3">
                        @foreach($project->categories->skip(1)->take(2) as $category)
                        <span class="text-xs px-2 py-1 rounded-md" style="background-color: {{ $category->color }}20; color: {{ $category->color }};">{{ $category->name }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-slate-500 text-lg">No featured projects available yet.</p>
            </div>
            @endforelse

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