@extends('layouts.main')

@section('title', 'News & Insights - Empathic Computing Research Lab')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/images/research/research.jpg') }}');">
    <div class="absolute inset-0 bg-black/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="text-4xl lg:text-5xl text-white font-bold">News & Insights</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto mt-3">Stay updated with the latest developments in empathic computing research and lab announcements.</p>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-16 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                <a href="{{ route('home') }}">Empathic Computing Lab</a>
            </li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                <i class="uil uil-angle-right"></i>
            </li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">News</li>
        </ul>
    </div>

    <!-- Curved Bottom Design -->
    <div class="absolute bottom-0 start-0 end-0">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 52 720 52C720 52 405 52 0 48Z" fill="currentColor" class="text-white"></path>
        </svg>
    </div>
</section><!--end section-->
<!-- End Hero -->

<!-- News Section -->
<section class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <!-- News Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            @forelse($news as $newsItem)
            <!-- News Article {{ $loop->iteration }} -->
            <div class="group relative rounded-xl overflow-hidden shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 hover:shadow-xl transition-all duration-500 h-full min-h-[600px] flex flex-col">
                <div class="relative overflow-hidden h-[250px]">
                    @if($newsItem->image)
                        <img src="{{ asset('storage/' . $newsItem->image) }}" class="group-hover:scale-110 duration-500 w-full h-full object-cover" alt="{{ $newsItem->title }}">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="uil uil-newspaper text-6xl text-white/50"></i>
                        </div>
                    @endif

                    <!-- Status Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white text-xs px-3 py-1 rounded-full font-medium">News</span>
                    </div>
                </div>

                <div class="p-6 flex-1 flex flex-col">
                    <!-- Date -->
                    <div class="flex items-center mb-4 text-sm text-slate-400">
                        <i class="uil uil-calendar-alt me-2"></i>
                        <span>{{ $newsItem->published_date_formatted ?: $newsItem->created_at->format('M d, Y') }}</span>
                    </div>

                    <h5 class="text-lg font-medium hover:text-blue-600 transition-colors duration-300 mb-3">
                        <a href="{{ route('news.detail', $newsItem->slug) }}">
                            {{ $newsItem->title }}
                        </a>
                    </h5>

                    <p class="text-slate-400 mb-4 flex-1">
                        {{ $newsItem->excerpt_display }}
                    </p>

                    <!-- Tags -->
                    @if($newsItem->tags && is_array($newsItem->tags))
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach(array_slice($newsItem->tags, 0, 3) as $tag)
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">{{ $tag }}</span>
                        @endforeach
                    </div>
                    @endif

                    <!-- Author -->
                    @if($newsItem->author)
                    <div class="flex items-center mb-4 text-sm text-slate-500">
                        <i class="uil uil-user me-2"></i>
                        <span>{{ $newsItem->author }}</span>
                    </div>
                    @endif

                    <!-- Read More Link -->
                    <div>
                        <a href="{{ route('news.detail', $newsItem->slug) }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-sm text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600 duration-500 ease-in-out">
                            Read More <i class="uil uil-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <div class="mb-4">
                    <i class="uil uil-newspaper text-6xl text-slate-300"></i>
                </div>
                <h5 class="text-slate-500 text-lg">No news articles published yet</h5>
                <p class="text-slate-400">Check back soon for the latest updates and insights from our research lab.</p>
            </div>
            @endforelse
        </div><!--end grid-->

        <!-- Pagination -->
        @if($news->hasPages())
        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                {{ $news->links() }}
            </div><!--end col-->
        </div><!--end grid-->
        @endif
    </div><!--end container-->
</section><!--end section-->

@endsection