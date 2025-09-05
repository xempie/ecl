@extends('admin.layouts.main')

@section('title', 'View News Article')

@section('content')
<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">{{ $news->title }}</h5>
                <h6 class="text-slate-400 font-semibold">View news article details</h6>
            </div>

            <div class="flex items-center space-x-2">
                <a href="{{ route('admin.news.edit', $news) }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-amber-600/5 hover:bg-amber-600 border-amber-600/10 hover:border-amber-600 text-amber-600 hover:text-white rounded-md">
                    <i class="uil uil-edit"></i> Edit
                </a>
                <a href="{{ route('admin.news') }}" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-600/5 hover:bg-gray-600 border-gray-600/10 hover:border-gray-600 text-gray-600 hover:text-white rounded-md">
                    <i class="uil uil-arrow-left"></i> Back to News
                </a>
            </div>
        </div>

        <!-- News Details -->
        <div class="mt-6">
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-6">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        @if($news->featured_image)
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ asset($news->featured_image) }}" class="w-full h-full object-cover" alt="{{ $news->title }}">
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
                                <span class="px-3 py-1 text-sm rounded-full {{ $statusColors[$news->status] ?? $statusColors['draft'] }}">
                                    {{ ucfirst($news->status) }}
                                </span>
                                <span class="text-sm text-slate-400">
                                    {{ $news->published_at ? $news->published_at->format('F j, Y g:i A') : 'Not published' }}
                                </span>
                            </div>

                            @if($news->excerpt)
                            <div class="mb-6 p-4 bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 rounded-r-md">
                                <p class="text-slate-700 dark:text-slate-300 italic">{{ $news->excerpt }}</p>
                            </div>
                            @endif

                            <div class="prose dark:prose-invert max-w-none">
                                {!! $news->content !!}
                            </div>

                            @if($news->categories->count() > 0)
                            <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                                <h6 class="font-semibold mb-2">Categories:</h6>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($news->categories as $category)
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
                    <!-- Article Info -->
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 mb-6">
                        <div class="p-6">
                            <h6 class="text-lg font-semibold mb-4">Article Information</h6>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Author:</label>
                                    <p class="text-slate-900 dark:text-white">{{ $news->author->name ?? 'Unknown' }}</p>
                                </div>

                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Created:</label>
                                    <p class="text-slate-900 dark:text-white">{{ $news->created_at->format('F j, Y g:i A') }}</p>
                                </div>

                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Last Updated:</label>
                                    <p class="text-slate-900 dark:text-white">{{ $news->updated_at->format('F j, Y g:i A') }}</p>
                                </div>

                                @if($news->slug)
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Slug:</label>
                                    <p class="text-slate-900 dark:text-white text-sm font-mono">{{ $news->slug }}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- SEO Info -->
                    @if($news->meta_description || $news->meta_keywords)
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6">
                            <h6 class="text-lg font-semibold mb-4">SEO Information</h6>
                            
                            <div class="space-y-4">
                                @if($news->meta_description)
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Meta Description:</label>
                                    <p class="text-slate-900 dark:text-white text-sm">{{ $news->meta_description }}</p>
                                </div>
                                @endif

                                @if($news->meta_keywords)
                                <div>
                                    <label class="text-sm font-semibold text-slate-600 dark:text-slate-300">Meta Keywords:</label>
                                    <p class="text-slate-900 dark:text-white text-sm">{{ $news->meta_keywords }}</p>
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