<!-- resources/views/error.blade.php -->
@extends('layouts.no-header')

@section('title', 'Error Page')

@section('content')
        
<!-- Start -->
<section class="relative bg-indigo-600/5">
    <div class="container-fluid relative">
        <div class="grid grid-cols-1">
            <div class="flex flex-col min-h-screen justify-center md:px-10 py-10 px-4">
                <div class="text-center">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-icon-64.png') }}" class="mx-auto" alt=""></a>
                </div>
                <div class="title-heading text-center my-auto">
                    <img src="{{ asset('assets/images/error.png') }}" class="mx-auto" alt="">
                    <h1 class="mt-3 mb-6 md:text-5xl text-3xl font-bold">Page Not Found?</h1>
                    <p class="text-slate-400">Whoops, this is embarassing. <br> Looks like the page you were looking for wasn't found.</p>
                    
                    <div class="mt-4">
                        <a href="{{ url('/') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Back to Home</a>
                    </div>
                </div>
                <div class="text-center">
                    <p class="mb-0 text-slate-400">© {{ date('Y') }} Empathic Computing Lab. All rights reserved.</p>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@endsection