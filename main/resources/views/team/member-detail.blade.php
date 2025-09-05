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
                                <p class="text-slate-400">{{ $member->title }}</p>
                                <p class="text-blue-600 font-medium text-sm mt-1">{{ ucfirst($member->lab_location) }} Lab</p>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="border-t border-gray-100 dark:border-gray-800 pt-4">
                            <h6 class="text-sm font-semibold uppercase text-slate-400 mb-3">Contact</h6>
                            <ul class="space-y-2">
                                <li class="flex items-center">
                                    <i data-feather="mail" class="size-4 text-slate-400 mr-3"></i>
                                    <span class="text-slate-600 text-sm">{{ $member->social_email ?? $member->slug . '@empathiccomputing.org' }}</span>
                                </li>
                                <li class="flex items-center">
                                    <i data-feather="phone" class="size-4 text-slate-400 mr-3"></i>
                                    <span class="text-slate-600 text-sm">{{ $member->phone ?? '+64 9 123 4567' }}</span>
                                </li>
                                <li class="flex items-center">
                                    <i data-feather="map-pin" class="size-4 text-slate-400 mr-3"></i>
                                    <span class="text-slate-600 text-sm">{{ $member->location ?? ($member->lab_location == 'auckland' ? 'Auckland, New Zealand' : 'Adelaide, Australia') }}</span>
                                </li>
                            </ul>

                            <!-- Social Links -->
                            <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                                <h6 class="text-sm font-semibold uppercase text-slate-400 mb-3">Connect</h6>
                                <div class="flex space-x-2">
                                    @if($member->social_linkedin)
                                    <a href="{{ $member->social_linkedin }}" target="_blank" class="size-8 inline-flex items-center justify-center bg-blue-100 hover:bg-blue-600 text-blue-600 hover:text-white rounded-md transition-colors">
                                        <i data-feather="linkedin" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($member->social_website)
                                    <a href="{{ $member->social_website }}" target="_blank" class="size-8 inline-flex items-center justify-center bg-gray-100 hover:bg-gray-600 text-gray-600 hover:text-white rounded-md transition-colors">
                                        <i data-feather="globe" class="size-3"></i>
                                    </a>
                                    @endif
                                    @if($member->social_google_scholar)
                                    <a href="{{ $member->social_google_scholar }}" target="_blank" class="size-8 inline-flex items-center justify-center bg-purple-100 hover:bg-purple-600 text-purple-600 hover:text-white rounded-md transition-colors">
                                        <i data-feather="book-open" class="size-3"></i>
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
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:w-3/5 md:w-1/2 md:px-3 mt-[30px] md:mt-0">
                <!-- Biography Section -->
                <div class="pb-6 border-b border-gray-100 dark:border-gray-800">
                    <h5 class="text-xl font-semibold mb-4">Biography</h5>
                    <p class="text-slate-400 leading-relaxed">{{ $member->bio ?? 'Biography information will be available soon.' }}</p>
                </div>

                <!-- Achievements -->
                @if($member->achievements)
                <div class="pt-6">
                    <h5 class="text-xl font-semibold mb-4">Achievements</h5>
                    <div class="text-slate-600 leading-relaxed">
                        {!! nl2br(e($member->achievements)) !!}
                    </div>
                </div>
                @endif

                <!-- Recent Publications -->
                @if($publications->count() > 0)
                <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800">
                    <h5 class="text-xl font-semibold mb-6">Recent Publications</h5>
                    <div class="space-y-4">
                        @foreach($publications as $publication)
                            <div class="p-4 rounded-md border border-gray-100 dark:border-gray-800 hover:shadow-md transition-shadow">
                                <h6 class="text-slate-900 font-medium mb-2">{{ $publication->title }}</h6>
                                <p class="text-slate-400 text-sm mb-2">
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
                                <p class="text-slate-600 text-sm mb-3">{{ Str::limit($publication->abstract, 150) }}</p>
                                @endif
                                <div class="flex flex-wrap gap-2 mb-3">
                                    @foreach($publication->categories as $category)
                                        <span class="px-2 py-1 text-xs rounded-md" style="background-color: {{ $category->color }}20; color: {{ $category->color }};">{{ $category->name }}</span>
                                    @endforeach
                                </div>
                                <div class="flex space-x-2">
                                    @if($publication->download_url)
                                        <a href="{{ $publication->download_url }}" class="text-xs px-3 py-1 bg-blue-100 text-blue-600 rounded-md hover:bg-blue-600 hover:text-white transition-colors" target="_blank">
                                            <i data-feather="download" class="size-3 inline mr-1"></i>PDF
                                        </a>
                                    @endif
                                    @if($publication->url)
                                        <a href="{{ $publication->url }}" class="text-xs px-3 py-1 bg-gray-100 text-gray-600 rounded-md hover:bg-gray-600 hover:text-white transition-colors" target="_blank">
                                            <i data-feather="external-link" class="size-3 inline mr-1"></i>View
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Current Projects -->
                @if($projects->count() > 0)
                <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800">
                    <h5 class="text-xl font-semibold mb-6">Current Projects</h5>
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach($projects as $project)
                            <div class="p-4 rounded-md border border-gray-100 dark:border-gray-800 hover:shadow-md transition-shadow">
                                <div class="flex items-start">
                                    <div class="size-12 bg-blue-100 text-blue-600 rounded-md flex items-center justify-center mr-4 flex-shrink-0">
                                        <i data-feather="folder" class="size-5"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="text-slate-900 font-medium mb-2">{{ $project->title }}</h6>
                                        @if($project->description)
                                        <p class="text-slate-600 text-sm mb-3">{{ Str::limit($project->description, 100) }}</p>
                                        @endif
                                        <div class="flex flex-wrap gap-2 mb-2">
                                            @foreach($project->categories as $category)
                                                <span class="text-xs px-2 py-1 rounded-md" style="background-color: {{ $category->color }}20; color: {{ $category->color }};">{{ $category->name }}</span>
                                            @endforeach
                                        </div>
                                        <span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-600 rounded-md">{{ ucfirst($project->status) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->

@endsection