@extends('admin.layouts.main')

@section('title', 'View Event')

@section('content')
<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">{{ $event->title }}</h5>
                <h6 class="text-slate-400 font-semibold">View event details</h6>
            </div>

            <div class="flex items-center space-x-2">
                <a href="{{ route('admin.events.edit', $event) }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-amber-600/5 hover:bg-amber-600 border-amber-600/10 hover:border-amber-600 text-amber-600 hover:text-white rounded-md">
                    <i class="uil uil-edit"></i> Edit
                </a>
                <a href="{{ route('admin.events') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-600/5 hover:bg-gray-600 border-gray-600/10 hover:border-gray-600 text-gray-600 hover:text-white rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to Events
                </a>
            </div>
        </div>

        <!-- Event Details -->
        <div class="mt-6">
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-6">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        @if($event->featured_image)
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ asset($event->featured_image) }}" class="w-full h-full object-cover" alt="{{ $event->title }}">
                        </div>
                        @endif
                        
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                @php
                                    $statusColors = [
                                        'draft' => 'bg-yellow-100 text-yellow-800',
                                        'published' => 'bg-green-100 text-green-800',
                                        'scheduled' => 'bg-blue-100 text-blue-800',
                                        'archived' => 'bg-gray-100 text-gray-800',
                                    ];
                                @endphp
                                <span class="px-3 py-1 text-sm rounded-full {{ $statusColors[$event->status] ?? $statusColors['draft'] }}">
                                    {{ ucfirst($event->status) }}
                                </span>
                                <span class="text-sm text-slate-400">
                                    Created {{ $event->created_at->format('F j, Y') }}
                                </span>
                            </div>

                            <!-- Event Date & Time -->
                            @if($event->event_date)
                            <div class="mb-6 p-4 bg-purple-50 dark:bg-purple-900/20 border-l-4 border-purple-500 rounded-r-md">
                                <div class="flex items-center space-x-2">
                                    <i class="uil uil-calendar-alt text-purple-600"></i>
                                    <div>
                                        <div class="font-semibold text-purple-800 dark:text-purple-300">
                                            {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}
                                        </div>
                                        @if($event->event_time)
                                        <div class="text-sm text-purple-600 dark:text-purple-400">
                                            {{ \Carbon\Carbon::parse($event->event_time)->format('g:i A') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endif

                            <!-- Location & URL -->
                            @if($event->event_location || $event->event_url)
                            <div class="mb-6 space-y-2">
                                @if($event->event_location)
                                <div class="flex items-center space-x-2">
                                    <i class="uil uil-location-pin-alt text-slate-600"></i>
                                    <span class="text-slate-700 dark:text-slate-300">{{ $event->event_location }}</span>
                                </div>
                                @endif
                                @if($event->event_url)
                                <div class="flex items-center space-x-2">
                                    <i class="uil uil-link text-slate-600"></i>
                                    <a href="{{ $event->event_url }}" target="_blank" class="text-blue-600 hover:underline">{{ $event->event_url }}</a>
                                </div>
                                @endif
                            </div>
                            @endif

                            @if($event->excerpt)
                            <div class="mb-6 p-4 bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 rounded-r-md">
                                <p class="text-slate-700 dark:text-slate-300 italic">{{ $event->excerpt }}</p>
                            </div>
                            @endif

                            <div class="prose dark:prose-invert max-w-none">
                                {!! $event->content !!}
                            </div>

                            @if($event->categories->count() > 0)
                            <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                                <h6 class="font-semibold mb-2">Categories:</h6>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($event->categories as $category)
                                    <span class="px-2 py-1 text-xs bg-indigo-100 text-indigo-800 rounded-full">
                                        {{ $category->name }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Event Info -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 mb-6">
                        <div class="p-6">
                            <h6 class="text-lg font-semibold mb-4">Event Information</h6>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Organizer:</label>
                                    <p class="text-slate-900 dark:text-white">{{ $event->author->name ?? 'Unknown' }}</p>
                                </div>

                                @if($event->event_date)
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Event Date:</label>
                                    <p class="text-slate-900 dark:text-white">{{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}</p>
                                </div>
                                @endif

                                @if($event->event_time)
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Event Time:</label>
                                    <p class="text-slate-900 dark:text-white">{{ \Carbon\Carbon::parse($event->event_time)->format('g:i A') }}</p>
                                </div>
                                @endif

                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Created:</label>
                                    <p class="text-slate-900 dark:text-white">{{ $event->created_at->format('F j, Y g:i A') }}</p>
                                </div>

                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Last Updated:</label>
                                    <p class="text-slate-900 dark:text-white">{{ $event->updated_at->format('F j, Y g:i A') }}</p>
                                </div>

                                @if($event->published_at)
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Published:</label>
                                    <p class="text-slate-900 dark:text-white">{{ $event->published_at->format('F j, Y g:i A') }}</p>
                                </div>
                                @endif

                                @if($event->slug)
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Slug:</label>
                                    <p class="text-slate-900 dark:text-white text-sm font-mono">{{ $event->slug }}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- SEO Info -->
                    @if($event->meta_description || $event->meta_keywords)
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6">
                            <h6 class="text-lg font-semibold mb-4">SEO Information</h6>
                            
                            <div class="space-y-4">
                                @if($event->meta_description)
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Meta Description:</label>
                                    <p class="text-slate-900 dark:text-white text-sm">{{ $event->meta_description }}</p>
                                </div>
                                @endif

                                @if($event->meta_keywords)
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Meta Keywords:</label>
                                    <p class="text-slate-900 dark:text-white text-sm">{{ $event->meta_keywords }}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div>
@endsection