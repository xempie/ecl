
<!-- Latest Publications Section -->
<section class="relative md:py-24 py-16 publications-diagonal-bg">
    <div class="container relative">
        <!-- Section Header -->
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h6 class="text-blue-600 text-sm font-bold uppercase mb-2">Academic Impact</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-slate-900 dark:text-white">
                    Latest Publications
                </h3>
                <p class="text-slate-400 max-w-xl">
                    Our recent research contributions to the scientific community in empathic computing and human-computer interaction.
                </p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="{{ url('/research/publications') }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600 duration-500 ease-in-out">
                    View All Publications <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div><!--end grid-->

        <!-- Publications List -->
        <div class="grid grid-cols-1 mt-8">
            
            @forelse($featuredPublications as $publication)
            <!-- Publication {{ $loop->iteration }} -->
            <div class="group relative p-6 shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 rounded-xl hover:shadow-xl transition-all duration-500 border-l-4 border-blue-600 mb-8">
                <!-- Mobile Layout: Image on Top -->
                <div class="md:hidden">
                    <!-- Publication Image - Mobile -->
                    <div class="w-full h-32 bg-blue-100 rounded-lg mb-4 flex items-center justify-center">
                        <img src="{{ $publication->image_url ?? asset('assets/images/publications/default-publication.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="{{ $publication->title }}">
                    </div>

                    <!-- Content - Mobile -->
                    <div class="w-full">
                        <!-- Publication Type Badge -->
                        <div class="flex items-center gap-3 mb-3">
                            <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full font-medium">{{ ucfirst($publication->type) }}</span>
                            @if($publication->year)
                            <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full font-medium">{{ $publication->year }}</span>
                            @endif
                        </div>

                        <h5 class="text-lg font-medium text-slate-900 dark:text-white group-hover:text-blue-600 transition-colors duration-300 mb-2">
                            @if($publication->url)
                            <a href="{{ $publication->url }}" target="_blank">
                                {{ $publication->title }}
                            </a>
                            @else
                                {{ $publication->title }}
                            @endif
                        </h5>

                        @if($publication->abstract)
                        <p class="text-slate-400 mb-3">
                            {{ Str::limit($publication->abstract, 150) }}
                        </p>
                        @endif

                        <!-- Authors -->
                        <div class="flex flex-wrap items-center gap-1 mb-3">
                            <span class="text-sm text-slate-600 dark:text-slate-300">{{ $publication->authors }}</span>
                        </div>

                        <!-- Categories -->
                        @if($publication->categories->count() > 0)
                        <div class="flex flex-wrap gap-2 mb-3">
                            @foreach($publication->categories as $category)
                                <span class="text-xs px-2 py-1 rounded-md" style="background-color: {{ $category->color }}20; color: {{ $category->color }};">{{ $category->name }}</span>
                            @endforeach
                        </div>
                        @endif

                        <!-- Publication Links - Mobile -->
                        <div class="flex flex-wrap gap-2 mt-4">
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
                                <a href="{{ $publication->doi }}" target="_blank"
                                   class="inline-flex items-center px-3 py-1 text-xs font-medium text-purple-600 bg-purple-50 border border-purple-200 rounded-md hover:bg-purple-100 transition-colors">
                                    <i class="uil uil-link mr-1"></i>
                                    DOI
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Desktop Layout: Side by Side -->
                <div class="hidden md:flex items-start justify-between">
                    <!-- Publication Image - Desktop -->
                    <div class="w-20 h-20 bg-blue-100 rounded-lg mr-4 flex-shrink-0 flex items-center justify-center" style="margin-top: 48px">
                        <img src="{{ $publication->image_url ?? asset('assets/images/publications/default-publication.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="{{ $publication->title }}">
                    </div>

                    <div class="flex-1 ml-0 md:ml-8" style="padding-left:32px">
                        <!-- Publication Type Badge -->
                        <div class="flex items-center gap-3 mb-3">
                            <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full font-medium">{{ ucfirst($publication->type) }}</span>
                            @if($publication->year)
                            <span class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full font-medium">{{ $publication->year }}</span>
                            @endif
                        </div>

                        <h5 class="text-lg font-medium text-slate-900 dark:text-white group-hover:text-blue-600 transition-colors duration-300 mb-2">
                            @if($publication->url)
                            <a href="{{ $publication->url }}" target="_blank">
                                {{ $publication->title }}
                            </a>
                            @else
                                {{ $publication->title }}
                            @endif
                        </h5>

                        @if($publication->abstract)
                        <p class="text-slate-400 mb-3">
                            {{ Str::limit($publication->abstract, 150) }}
                        </p>
                        @endif

                        <!-- Authors -->
                        <div class="flex flex-wrap items-center gap-1 mb-3">
                            <span class="text-sm text-slate-600 dark:text-slate-300">{{ $publication->authors }}</span>
                        </div>

                        <!-- Categories -->
                        @if($publication->categories->count() > 0)
                        <div class="flex flex-wrap gap-2 mb-3">
                            @foreach($publication->categories as $category)
                                <span class="text-xs px-2 py-1 rounded-md" style="background-color: {{ $category->color }}20; color: {{ $category->color }};">{{ $category->name }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>

                    <!-- Publication Links - Desktop Bottom Right -->
                    <div class="flex flex-col gap-2 ml-6 self-end">
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
            @empty
            <div class="text-center py-12">
                <p class="text-slate-500 text-lg">No featured publications available yet.</p>
            </div>
            @endforelse

        </div><!--end grid-->

        <!-- Mobile View All Button -->
        <div class="grid grid-cols-1 mt-8 md:hidden">
            <div class="text-center">
                <a href="{{ url('/research/publications') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md">
                    View All Publications <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Latest Publications Section -->