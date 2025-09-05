<!-- resources/views/profile-billing.blade.php -->
@extends('layouts.main')

@section('title', 'Profile-Billing Page')

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
                        <h6 class="text-slate-400 mb-0">The following addresses will be used on the checkout page by default.</h6>
                        <div class="md:flex mt-6">
                            <div class="md:w-1/2 md:px-3">
                                <div class="flex items-center mb-4 justify-between">
                                    <h5 class="text-xl font-semibold">Billing Address:</h5>
                                    <a href="#" class="text-indigo-600 text-lg"><i class="uil uil-edit align-middle"></i></a>
                                </div>
                                <div class="pt-4 border-t border-gray-100 dark:border-gray-700">
                                    <p class="text-lg font-semibold mb-2">Cristina Murfy</p>

                                    <ul class="list-none">
                                        <li class="flex">
                                            <i class="uil uil-map-marker text-lg me-2"></i>
                                            <p class="text-slate-400">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>
                                        </li>

                                        <li class="flex mt-1">
                                            <i class="uil uil-phone text-lg me-2"></i>
                                            <p class="text-slate-400">+123 897 5468</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="md:w-1/2 md:px-3 mt-[30] md:mt-0">
                                <div class="flex items-center mb-4 justify-between">
                                    <h5 class="text-xl font-semibold">Shipping Address:</h5>
                                    <a href="#" class="text-indigo-600 text-lg"><i class="uil uil-edit align-middle"></i></a>
                                </div>
                                <div class="pt-4 border-t border-gray-100 dark:border-gray-700">
                                    <p class="text-lg font-semibold mb-2">Cristina Murfy</p>

                                    <ul class="list-none">
                                        <li class="flex">
                                            <i class="uil uil-map-marker text-lg me-2"></i>
                                            <p class="text-slate-400">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>
                                        </li>

                                        <li class="flex mt-1">
                                            <i class="uil uil-phone text-lg me-2"></i>
                                            <p class="text-slate-400">+123 897 5468</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection