<!-- resources/views/gallery-one.blade.php -->
@extends('layouts.main')

@section('title', 'Gallery-One Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Gallery</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Gallery</li>
            </ul>
        </div>

        <div class="grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-6 gap-6">
            
            <!-- includes/Gallery/gallery-one/gallery.blade.php -->
            @include('includes.Gallery.gallery-one.gallery')

        </div>

        <div class="flex justify-end mt-6">
                
            <!-- includes/Blog/blog/navigation.blade.php -->
            @include('includes.Blog.blog.navigation')

        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection