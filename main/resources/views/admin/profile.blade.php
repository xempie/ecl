<!-- resources/views/profile.blade.php -->
@extends('layouts.main')

@section('title', 'Profile Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <div class="grid grid-cols-1">
            <div class="profile-banner relative text-transparent rounded-md shadow-sm dark:shadow-gray-700 overflow-hidden">
                <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                <div class="relative shrink-0">
                    <img src="{{ asset('assets/images/blog/bg.jpg') }}" class="h-80 w-full object-cover" id="profile-banner" alt="">
                    <div class="absolute inset-0 bg-black/70"></div>
                    <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-12 grid-cols-1">
            <div class="xl:col-span-3 lg:col-span-4 md:col-span-4 mx-6">
                <div class="p-6 relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 -mt-48">
                    <div class="profile-pic text-center mb-5">
                        <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                        <div>
                            <div class="relative size-24 mx-auto">
                                <img src="{{ asset('assets/images/client/05.jpg') }}" class="rounded-full shadow-sm dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                            </div>

                            <div class="mt-4">
                                <h5 class="text-lg font-semibold">Cristina Murfy</h5>
                                <p class="text-slate-400">cristina@hotmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-100 dark:border-gray-700">
                        <ul class="list-none sidebar-nav mb-0 mt-3" id="navmenu-nav">
                            
                            <!-- includes/User-Profile/profile/navmenu.blade.php -->
                            @include('includes.User-Profile.profile.navmenu')

                        </ul>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                <div class="grid grid-cols-1 gap-6">
                    <div class="p-6 relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <h5 class="text-xl font-semibold">Cristina Murfy</h5>
            
                        <p class="text-slate-400 mt-3">I have started my career as a trainee and prove my self and achieve all the milestone with good guidance and reach up to the project manager. In this journey, I understand all the procedure which make me a good developer, team leader, and a project manager.</p>
                    </div>

                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                        <div class="p-6 relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 h-fit">
                            <h5 class="text-xl font-semibold">Personal Details :</h5>

                            <!-- includes/User-Profile/profile/personal.blade.php -->
                            @include('includes.User-Profile.profile.personal')

                        </div>

                        <div class="p-6 relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 h-fit">
                            <h5 class="text-xl font-semibold">Experience :</h5>

                            <!-- includes/User-Profile/profile/experience.blade.php -->
                            @include('includes.User-Profile.profile.experience')

                        </div>
                    </div>

                    <div class="p-6 relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <h5 class="text-xl font-semibold">Portfolio :</h5>
    
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">

                            <!-- includes/User-Profile/profile/portfolio.blade.php -->
                            @include('includes.User-Profile.profile.portfolio')

                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection