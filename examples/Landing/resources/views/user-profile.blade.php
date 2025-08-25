<!-- resources/views/user-profile.blade.php -->
@extends('layouts.main')

@section('title', 'User-Profile Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative lg:pb-24 pb-16">
    <div class="container-fluid relative">
        <div class="profile-banner relative text-transparent">
            <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)" />
            <div class="relative shrink-0">
                <img src="{{ asset('assets/images/blog/bg.jpg') }}" class="h-80 w-full object-cover" id="profile-banner" alt="">
                <div class="absolute inset-0 bg-slate-900/70"></div>
                <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
            </div>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="md:flex">
            <div class="lg:w-1/4 md:w-1/3 md:px-3">
                <div class="relative md:-mt-48 -mt-32">
                    <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900">
                        <div class="profile-pic text-center mb-5">
                            <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                            <div>
                                <div class="relative size-28 mx-auto">
                                    <img src="{{ asset('assets/images/client/05.jpg') }}" class="rounded-full shadow-sm dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-lg font-semibold">Jenny Jimenez</h5>
                                    <p class="text-slate-400">jennyhot@hotmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 dark:border-gray-800">
                            
                            <!-- includes/Pages/Accounts/user-profile/sidebar-nav.blade.php -->
                            @include('includes.Pages.Accounts.user-profile.sidebar-nav')

                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-[30px] md:mt-0">
                <div class="pb-6 border-b border-gray-100 dark:border-gray-800">
                    <h5 class="text-xl font-semibold">Jenny Jimenez</h5>
                
                    <p class="text-slate-400 mt-3">I have started my career as a trainee and prove my self and achieve all the milestone with good guidance and reach up to the project manager. In this journey, I understand all the procedure which make me a good developer, team leader, and a project manager.</p>
                </div>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] pt-6">
                    <div>
                        <h5 class="text-xl font-semibold">Personal Details :</h5>

                        <!-- includes/Pages/Accounts/user-profile/personal.blade.php -->
                        @include('includes.Pages.Accounts.user-profile.personal')

                    </div>

                    <div class="mt-[30px] lg:mt-0">
                        <h5 class="text-xl font-semibold">Experience :</h5>

                        <!-- includes/Pages/Accounts/user-profile/experience2.blade.php -->
                        @include('includes.Pages.Accounts.user-profile.experience2')

                    </div>
                </div>

                <h5 class="text-xl font-semibold mt-[30px]">Portfolio :</h5>
            
                <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">

                    <!-- includes/Pages/Accounts/user-profile/portfolio4.blade.php -->
                    @include('includes.Pages.Accounts.user-profile.portfolio4')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

@include('includes.footer')

@endsection