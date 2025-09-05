<!-- resources/views/gallery-two.blade.php -->
@extends('layouts.main')

@section('title', 'Gallery-Two Page')

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

        <div class="grid grid-cols-1 items-center mt-6 gap-6">
            <div class="filters-group-wrap">
                <div class="filters-group">

                    <!-- includes/Gallery/gallery-two/group.blade.php -->
                    @include('includes.Gallery.gallery-two.group')

                </div>
            </div>
        </div><!--grid-->

        <div id="grid" class="md:flex justify-center mx-auto mt-3">

            <!-- includes/Gallery/gallery-two/gallery1.blade.php -->
            @include('includes.Gallery.gallery-two.gallery1')

        </div>

        <div class="flex justify-end mt-6">
                
            <!-- includes/Blog/blog/navigation.blade.php -->
            @include('includes.Blog.blog.navigation')

        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection