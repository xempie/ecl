@extends('layouts.main')

@section('title', $member->name . ' - Team Member')

@section('content')

@include('components.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/team/team.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">{{ $member->name }}</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">{{ $member->title }} • {{ ucfirst($member->lab_location) }} Lab</p>
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

<!-- Team Member Profile Section -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="md:flex">
            <!-- Profile Sidebar -->
            <div class="lg:w-2/5 md:w-1/2 md:px-3">
                <div class="relative md:-mt-48 -mt-32" style="z-index: 1">
                    <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900">
                        <!-- Profile Image and Basic Info -->
                        <div class="profile-pic text-center mb-5">
                            <div class="size-64 mx-auto mb-4">
                                <img src="{{ $member->image_url }}" class="w-full h-full object-cover rounded-md shadow-sm dark:shadow-gray-800" alt="{{ $member->name }}">
                            </div>
                            <div class="mt-4">
                                <h5 class="text-lg font-semibold">{{ $member->name }}</h5>
                                <p class="text-slate-600">{{ $member->title }}</p>
                                <p class="text-blue-600 font-medium text-sm mt-1">{{ ucfirst($member->lab_location) }} Lab</p>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="border-t border-gray-100 dark:border-gray-800 pt-4">
                            <h6 class="text-sm font-semibold uppercase text-slate-400 mb-3">Contact</h6>
                            <ul class="space-y-2">
                                <li class="flex items-center">
                                    <i data-feather="mail" class="size-4 text-slate-400" style="margin-right: 5px;"></i>
                                    <span class="text-slate-600 text-sm">{{ $member->social_email ?? $member->slug . '@empathiccomputing.org' }}</span>
                                </li>
                                @if($member->phone)
                                <li class="flex items-center">
                                    <i data-feather="phone" class="size-4 text-slate-400" style="margin-right: 5px;"></i>
                                    <span class="text-slate-600 text-sm">{{ $member->phone }}</span>
                                </li>
                                @endif
                                <li class="flex items-center">
                                    <i data-feather="map-pin" class="size-4 text-slate-400" style="margin-right: 5px;"></i>
                                    <span class="text-slate-600 text-sm">{{ $member->location ?? ($member->lab_location == 'auckland' ? 'Auckland, New Zealand' : 'Adelaide, Australia') }}</span>
                                </li>
                            </ul>

                            <!-- Social Links -->
                            <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                                <h6 class="text-sm font-semibold uppercase text-slate-400 mb-3">Connect</h6>
                                <div class="flex space-x-4">
                                    @if($member->social_linkedin)
                                    <a href="{{ $member->social_linkedin }}" target="_blank" class="transition-all duration-300 transform hover:scale-110" title="LinkedIn Profile">
                                        <svg class="size-6" fill="#0077B5" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </a>
                                    @endif
                                    @if($member->social_website)
                                    <a href="{{ $member->social_website }}" target="_blank" class="transition-all duration-300 transform hover:scale-110" title="Personal Website">
                                        <svg class="size-6" fill="#475569" viewBox="0 0 24 24">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                                        </svg>
                                    </a>
                                    @endif
                                    @if($member->social_google_scholar)
                                    <a href="{{ $member->social_google_scholar }}" target="_blank" class="transition-all duration-300 transform hover:scale-110" title="Google Scholar Profile">
                                        <svg class="size-6" fill="#4285F4" viewBox="0 0 24 24">
                                            <path d="M5.242 13.769L0 9.5 12 0l12 9.5-5.242 4.269C17.548 11.249 14.978 9.5 12 9.5c-2.977 0-5.548 1.748-6.758 4.269zM12 10a7 7 0 1 0 0 14 7 7 0 0 0 0-14z"/>
                                        </svg>
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <!-- Research Interests -->
                            @if($member->research_interests)
                            <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                                <h6 class="text-sm font-semibold uppercase text-slate-400 mb-3">Research Interests</h6>
                                <div class="text-slate-600 text-sm leading-relaxed">
                                    {!! nl2br(e($member->research_interests)) !!}
                                </div>
                            </div>
                            @endif

                            <!-- Achievements -->
                            @if($member->achievements)
                            <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                                <h6 class="text-sm font-semibold uppercase text-slate-400 mb-3">Achievements</h6>
                                <div class="text-slate-600 text-sm leading-relaxed">
                                    {!! nl2br(e($member->achievements)) !!}
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:w-3/5 md:w-1/2 md:px-3 mt-[30px] md:mt-0">
                <!-- Biography Section -->
                <div class="pb-6 border-b border-gray-100 dark:border-gray-800">
                    <h5 class="text-xl font-semibold mb-4">Biography</h5>
                    <div class="text-slate-600 leading-relaxed text-sm">
                        {!! nl2br(e($member->bio ?? 'Biography information will be available soon.')) !!}
                    </div>
                </div>

                <!-- Projects -->
                @if(isset($projects) && $projects->count() > 0)
                <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800">
                    <div class="flex justify-between items-center mb-6">
                        <h5 class="text-xl font-semibold">Projects</h5>
                        <span class="text-sm text-slate-500">{{ $projects->total() }} total</span>
                    </div>
                    <div class="space-y-4">
                        @foreach($projects as $project)
                            <a href="{{ route('research.project.detail', $project->slug) }}" class="block p-4 rounded-md border border-gray-100 dark:border-gray-800 hover:shadow-md transition-all duration-300 hover:border-blue-200">
                                <div class="flex items-start gap-4">
                                    @if($project->image)
                                        <div class="w-16 h-16 rounded-md overflow-hidden flex-shrink-0">
                                            <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                                        </div>
                                    @else
                                        <div class="size-16 bg-blue-100 text-blue-600 rounded-md flex items-center justify-center flex-shrink-0">
                                            <i data-feather="folder" class="size-6"></i>
                                        </div>
                                    @endif
                                    <div class="flex-1">
                                        <h6 class="text-slate-900 font-medium mb-2 hover:text-blue-600 transition-colors">{{ $project->title }}</h6>
                                        @if($project->description)
                                        <p class="text-slate-600 text-sm mb-3">{{ Str::limit($project->description, 100) }}</p>
                                        @endif
                                        @if($project->categories && $project->categories->count() > 0)
                                        <div class="flex flex-wrap gap-2 mb-2">
                                            @foreach($project->categories as $category)
                                                <span class="text-xs px-2 py-1 rounded-md" style="background-color: {{ $category->color }}20; color: {{ $category->color }};">{{ $category->name }}</span>
                                            @endforeach
                                        </div>
                                        @endif
                                        <span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-600 rounded-md">{{ ucfirst($project->status) }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <!-- Projects Pagination -->
                    @if($projects->hasPages())
                        <div class="mt-6 flex justify-center">
                            {{ $projects->links() }}
                        </div>
                    @endif
                </div>
                @endif

                <!-- Publications -->
                @if($publications->count() > 0)
                <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800">
                    <div class="flex justify-between items-center mb-6">
                        <h5 class="text-xl font-semibold">Publications</h5>
                        <span class="text-sm text-slate-500">{{ $publications->total() }} total</span>
                    </div>
                    <div class="space-y-6">
                        @foreach($publications as $publication)
                            <div class="flex p-4 rounded-md border border-gray-100 dark:border-gray-800 hover:shadow-md transition-shadow">
                                <!-- Publication Image -->
                                @if($publication->image)
                                    <div class="flex-shrink-0 mr-4">
                                        <img src="{{ asset($publication->image) }}" alt="{{ $publication->title }}"
                                             class="w-24 h-24 object-cover rounded-lg border border-gray-200">
                                    </div>
                                @endif

                                <!-- Publication Content -->
                                <div class="flex-1">
                                    <h6 class="text-slate-900 font-medium mb-2">{{ $publication->title }}</h6>
                                    @if($publication->authors)
                                    <p class="text-slate-500 mb-2" style="font-size: 10px; line-height: 1.3;">{{ $publication->authors }}</p>
                                    @endif
                                    <p class="text-slate-600 text-sm mb-2">
                                        @if($publication->journal)
                                            {{ $publication->journal }}
                                        @elseif($publication->conference)
                                            {{ $publication->conference }}
                                        @endif
                                        @if($publication->year)
                                            • {{ $publication->year }}
                                        @endif
                                    </p>
                                    @if($publication->abstract)
                                    <div class="text-slate-600 text-sm mb-3">
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
                                    <div class="flex flex-wrap gap-2 mb-3">
                                        @foreach($publication->categories as $category)
                                            <span class="px-2 py-1 text-xs rounded-md" style="background-color: {{ $category->color }}20; color: {{ $category->color }};">{{ $category->name }}</span>
                                        @endforeach
                                    </div>
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

                    <!-- Pagination -->
                    @if($publications->hasPages())
                        <div class="mt-6 flex justify-center">
                            {{ $publications->links() }}
                        </div>
                    @endif
                </div>
                @endif


            </div>
        </div><!--end grid-->
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