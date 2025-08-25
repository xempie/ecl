<!-- resources/views/page-comingsoon.blade.php -->
@extends('layouts.no-header')

@section('title', 'Page-Comingsoon Page')

@section('content')
        
<!-- Start -->
<section class="relative bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/utility.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/25"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-slate-900/40 to-slate-900"></div>
    <div class="container-fluid relative">
        <div class="grid grid-cols-1">
            <div class="flex flex-col min-h-screen justify-center md:px-10 py-10 px-4">
                <div class="text-center">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-icon-64.png') }}" class="mx-auto" alt=""></a>
                </div>
                <div class="title-heading text-center my-auto">
                    <h1 class="text-white mt-3 mb-6 md:text-5xl text-3xl font-bold">We Are Coming Soon...</h1>
                    <p class="text-white/70 text-lg max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <div id="countdown">
                        <ul class="count-down list-none inline-block text-white text-center mt-8 m-6">
                            <li id="days" class="text-[40px] leading-[110px] size-[130px] rounded-full shadow-md bg-white/10 backdrop-opacity-30 inline-block m-2"></li>
                            <li id="hours" class="text-[40px] leading-[110px] size-[130px] rounded-full shadow-md bg-white/10 backdrop-opacity-30 inline-block m-2"></li>
                            <li id="mins" class="text-[40px] leading-[110px] size-[130px] rounded-full shadow-md bg-white/10 backdrop-opacity-30 inline-block m-2"></li>
                            <li id="secs" class="text-[40px] leading-[110px] size-[130px] rounded-full shadow-md bg-white/10 backdrop-opacity-30 inline-block m-2"></li>
                            <li id="end" class="h1"></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Techwind. Design & Develop with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->

@endsection