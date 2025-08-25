<!-- resources/views/user-billing.blade.php -->
@extends('layouts.main')

@section('title', 'User-Billing Page')

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
                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900">
                    <h6 class="text-slate-400 mb-0">The following addresses will be used on the checkout page by default.</h6>
                    <div class="md:flex mt-6">
                        <div class="md:w-1/2 md:px-3">
                            <div class="flex items-center mb-4 justify-between">
                                <h5 class="text-xl font-semibold">Billing Address:</h5>
                                <a href="#" class="text-indigo-600 text-lg"><i class="uil uil-edit align-middle"></i></a>
                            </div>
                            <div class="pt-4 border-t border-gray-100 dark:border-gray-800">
                                <p class="text-lg font-semibold mb-2">Jenny Jimenez</p>

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
                            <div class="pt-4 border-t border-gray-100 dark:border-gray-800">
                                <p class="text-lg font-semibold mb-2">Jenny Jimenez</p>

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
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

@include('includes.footer')

@endsection