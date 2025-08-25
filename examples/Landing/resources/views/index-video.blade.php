<!-- resources/views/index-video.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Video Page')

@section('content')

@include('includes.navbar6')

<section class="relative h-screen flex items-center">
    <div class="absolute top-0 start-0 w-full h-full z-0 pointer-events-none overflow-hidden">
        <!-- <iframe src="https://player.vimeo.com/video/33955001?background=1&autoplay=1&loop=1&byline=0&title=0" class="absolute top-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2  -translate-y-1/2 w-screen h-[56.25vw] min-h-screen min-w-[177.77vw]"></iframe> -->
        <!--Note: Vimeo Embed Background Video-->

        <iframe src="https://www.youtube.com/embed/gJpXlRkW6Fw?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1" class="absolute top-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2  -translate-y-1/2 w-screen h-[56.25vw] min-h-screen min-w-[177.77vw]"></iframe>
        <!--Note: Youtube Embed Background Video-->
    </div>
    <div class="absolute inset-0 bg-slate-900/40"></div>
    
    <div class="container relative">
        <div class="grid grid-cols-1">
            <img src="{{ asset('assets/images/video/bg.png') }}" alt="">
        </div>
    </div>

    <div class="container-fluid relative">
        <div class="fixed bottom-0 start-0 end-0 pb-8">
            <div class="container relative">
                <div class="grid grid-cols-1">
                    <div class="block">
                        <div class="flex justify-between">
                            <h5 class="text-white text-xl font-semibold">Videos for Ads</h5>
                            <a href="{{ url('/video-portfolio') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-white hover:text-white after:bg-white duration-500 ease-in-out">See Videos <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection