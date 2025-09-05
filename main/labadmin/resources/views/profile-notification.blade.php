<!-- resources/views/profile-notification.blade.php -->
@extends('layouts.main')

@section('title', 'Profile-Notification Page')

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
                    <div class="relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <h5 class="text-lg font-semibold">Account Notifications :</h5>
                        </div>

                        <div class="p-6">
                            <div class="flex justify-between pb-4">
                                <h6 class="mb-0 font-medium">When someone mentions me</h6>
                                <div class="">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="noti1">
                                    <label class="form-check-label" for="noti1"></label>
                                </div>
                            </div>
                            <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                                <h6 class="mb-0 font-medium">When someone follows me</h6>
                                <div class="">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" checked id="noti2">
                                    <label class="form-check-label" for="noti2"></label>
                                </div>
                            </div>
                            <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                                <h6 class="mb-0 font-medium">When shares my activity</h6>
                                <div class="">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="noti3">
                                    <label class="form-check-label" for="noti3"></label>
                                </div>
                            </div>
                            <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                                <h6 class="mb-0 font-medium">When someone messages me</h6>
                                <div class="">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="noti4">
                                    <label class="form-check-label" for="noti4"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <h5 class="text-lg font-semibold">Marketing Notifications :</h5>
                        </div>

                        <div class="p-6">
                            <div class="flex justify-between pb-4">
                                <h6 class="mb-0 font-medium">There is a sale or promotion</h6>
                                <div class="">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="noti5">
                                    <label class="form-check-label" for="noti5"></label>
                                </div>
                            </div>
                            <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                                <h6 class="mb-0 font-medium">Company news</h6>
                                <div class="">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="noti6">
                                    <label class="form-check-label" for="noti6"></label>
                                </div>
                            </div>
                            <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                                <h6 class="mb-0 font-medium">Weekly jobs</h6>
                                <div class="">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" checked id="noti7">
                                    <label class="form-check-label" for="noti7"></label>
                                </div>
                            </div>
                            <div class="flex justify-between py-4 border-t border-gray-100 dark:border-gray-700">
                                <h6 class="mb-0 font-medium">Unsubscribe News</h6>
                                <div class="">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" checked id="noti8">
                                    <label class="form-check-label" for="noti8"></label>
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