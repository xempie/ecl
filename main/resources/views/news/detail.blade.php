@extends('layouts.main')

@section('title', $news->title . ' - Empathic Computing Research Lab')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/research/research.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">{{ $news->title }}</h3>
            @if($news->excerpt)
            <p class="text-slate-300 text-lg max-w-xl mx-auto">{{ $news->excerpt }}</p>
            @else
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Latest news and insights from our empathic computing research lab.</p>
            @endif
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

<!-- News Detail Section -->
<section class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 md:grid-cols-1 grid-cols-1 gap-[30px]">
            <!-- Main Content -->
            <div class="lg:col-span-8">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    @if($news->image)
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/' . $news->image) }}" class="w-full" alt="{{ $news->title }}">
                    </div>
                    @endif

                    <div class="p-6">
                        <!-- Meta Info -->
                        <div class="flex items-center justify-between mb-6 text-sm text-slate-400">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <i class="uil uil-calendar-alt me-2"></i>
                                    <span>{{ $news->published_date_formatted ?: $news->created_at->format('M d, Y') }}</span>
                                </div>
                                @if($news->author)
                                <div class="flex items-center">
                                    <i class="uil uil-user me-2"></i>
                                    <span>{{ $news->author }}</span>
                                </div>
                                @endif
                            </div>

                            <div class="flex items-center space-x-2">
                                <span class="bg-blue-600 text-white text-xs px-3 py-1 rounded-full font-medium">{{ ucfirst($news->status) }}</span>
                                @if($news->is_featured)
                                <span class="bg-amber-600 text-white text-xs px-3 py-1 rounded-full font-medium">Featured</span>
                                @endif
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="prose dark:prose-invert max-w-none">
                            {!! $news->content !!}
                        </div>

                        <!-- Tags -->
                        @if($news->tags && is_array($news->tags))
                        <div class="flex flex-wrap gap-2 mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <h6 class="font-semibold w-full mb-2">Tags:</h6>
                            @foreach($news->tags as $tag)
                            <span class="bg-gray-100 text-gray-600 text-sm px-3 py-1 rounded">{{ $tag }}</span>
                            @endforeach
                        </div>
                        @endif

                        <!-- Categories -->
                        @if($news->categories && $news->categories->count() > 0)
                        <div class="flex flex-wrap gap-2 mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <h6 class="font-semibold w-full mb-2">Categories:</h6>
                            @foreach($news->categories as $category)
                            <span class="bg-indigo-100 text-indigo-800 text-sm px-3 py-1 rounded">{{ $category->name }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-4">
                <!-- Back to News -->
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 mb-6">
                    <div class="p-6 text-center">
                        <a href="{{ route('news') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md">
                            <i class="uil uil-arrow-left"></i> Back to All News
                        </a>
                    </div>
                </div>

                <!-- Related News -->
                @if($relatedNews->count() > 0)
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6">
                        <h6 class="text-lg font-semibold mb-4">Related News</h6>

                        @foreach($relatedNews as $related)
                        <div class="flex items-start space-x-3 {{ !$loop->last ? 'mb-6 pb-6 border-b border-gray-200 dark:border-gray-700' : '' }}">
                            @if($related->image)
                            <img src="{{ asset('storage/' . $related->image) }}" class="w-16 h-16 rounded object-cover" alt="{{ $related->title }}">
                            @else
                            <div class="w-16 h-16 bg-blue-100 rounded flex items-center justify-center">
                                <i class="uil uil-newspaper text-blue-600"></i>
                            </div>
                            @endif

                            <div class="flex-1">
                                <h6 class="font-medium text-sm">
                                    <a href="{{ route('news.detail', $related->slug) }}" class="text-slate-900 dark:text-white hover:text-blue-600 transition-colors">
                                        {{ \Illuminate\Support\Str::limit($related->title, 50) }}
                                    </a>
                                </h6>
                                <p class="text-xs text-slate-400 mt-1">
                                    {{ $related->published_date_formatted ?: $related->created_at->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->

@endsection