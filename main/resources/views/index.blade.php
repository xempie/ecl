@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - Advancing Human-Computer Interaction')

@section('description', 'Leading research in empathetic computing systems, emotion recognition, and human-computer interaction. Developing intuitive technologies that understand and respond to human needs.')

@section('keywords', 'empathic computing, human-computer interaction, HCI research, emotion recognition, adaptive interfaces, university research lab')

@section('content')

@include('components.hero-slider')

<!-- Quick Access Cards (keeping these as they're useful) -->
<section class="relative bg-gray-50 dark:bg-slate-800 md:py-24 py-16 hidden">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-2 duration-500 sm:-mt-[200px] -mt-[140px] m-0">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[24px]">
                    
                    <!-- Research Focus Card -->
                    <div class="group relative lg:px-6 px-4 py-10 shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 rounded-xl border-b-4 border-transparent hover:border-blue-400 duration-500 h-full min-h-[300px] flex flex-col">
                        <div class="size-14 bg-blue-100 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800" style="color: #60a5fa;">
                            <i class="uil uil-brain"></i>
                        </div>

                        <div class="content mt-7 flex-1 flex flex-col">
                            <a href="{{ url('/research') }}" class="title h5 text-lg font-medium" style="color: #60a5fa;">Research Focus</a>
                            <p class="text-slate-400 mt-3 flex-1">Exploring emotion recognition, adaptive interfaces, and empathetic AI systems.</p>
                            
                            <div class="mt-6">
                                <a href="{{ url('/research') }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 duration-500 ease-in-out" style="color: #60a5fa;">Read More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Publications Card -->
                    <div class="group relative lg:px-6 px-4 py-10 shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 rounded-xl border-b-4 border-transparent hover:border-emerald-400 duration-500 h-full min-h-[300px] flex flex-col">
                        <div class="size-14 bg-emerald-100 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800" style="color: #34d399;">
                            <i class="uil uil-file-alt"></i>
                        </div>

                        <div class="content mt-7 flex-1 flex flex-col">
                            <a href="{{ url('/research/publications') }}" class="title h5 text-lg font-medium" style="color: #34d399;">Publications</a>
                            <p class="text-slate-400 mt-3 flex-1">Latest research papers and contributions to the field of empathic computing.</p>
                            
                            <div class="mt-6">
                                <a href="{{ url('/research/publications') }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 duration-500 ease-in-out" style="color: #34d399;">View Papers <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Team Card -->
                    <div class="group relative lg:px-6 px-4 py-10 shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 rounded-xl border-b-4 border-transparent hover:border-violet-400 duration-500 h-full min-h-[300px] flex flex-col">
                        <div class="size-14 bg-violet-100 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800" style="color: #a78bfa;">
                            <i class="uil uil-users-alt"></i>
                        </div>

                        <div class="content mt-7 flex-1 flex flex-col">
                            <a href="{{ url('/team') }}" class="title h5 text-lg font-medium" style="color: #a78bfa;">Our Team</a>
                            <p class="text-slate-400 mt-3 flex-1">Meet our interdisciplinary team of researchers, faculty, and students.</p>
                            
                            <div class="mt-6">
                                <a href="{{ url('/team') }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 duration-500 ease-in-out" style="color: #a78bfa;">Meet Team <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Collaboration Card -->
                    <div class="group relative lg:px-6 px-4 py-10 shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 rounded-xl border-b-4 border-transparent hover:border-amber-400 duration-500 h-full min-h-[300px] flex flex-col">
                        <div class="size-14 bg-amber-100 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800" style="color: #fbbf24;">
                            <i class="uil uil-globe"></i>
                        </div>

                        <div class="content mt-7 flex-1 flex flex-col">
                            <a href="{{ url('/contact') }}" class="title h5 text-lg font-medium" style="color: #fbbf24;">Collaboration</a>
                            <p class="text-slate-400 mt-3 flex-1">Partner with us on cutting-edge research and innovative projects.</p>
                            
                            <div class="mt-6">
                                <a href="{{ url('/contact') }}" class="relative inline-flex items-center font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 duration-500 ease-in-out" style="color: #fbbf24;">Get in Touch <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->

<!-- About Us Section -->
@include('components.about-us-section')

<!-- Research Areas Section -->
@include('components.research-areas-section')

<!-- Featured Projects Section -->
@include('components.featured-projects-section')

<!-- Latest Publications Section -->
@include('components.latest-publications-section')

<!-- Blog Posts Section -->
@include('components.blog-posts-section')

<!-- Collaboration Partners Section -->
@include('components.collaboration-partners-section')

@endsection

