<!-- resources/views/profile-social.blade.php -->
@extends('layouts.main')

@section('title', 'Profile-Social Page')

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
                            <h5 class="text-lg font-semibold">Social Profiles :</h5>
                        </div>

                        <div class="p-6">
                            <div class="md:flex">
                                <div class="md:w-1/3">
                                    <span class="font-medium">Twitter</span>
                                </div>

                                <div class="md:w-2/3 mt-4 md:mt-0">
                                    <form>
                                        <div class="form-icon relative">
                                            <i data-feather="twitter" class="size-4 absolute top-3 start-4"></i>
                                            <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Twitter Profile Name" id="twitter_name" name="name" required="">
                                        </div>
                                    </form>

                                    <p class="text-slate-400 mt-1">Add your Twitter username (e.g. jennyhot).</p>
                                </div>
                            </div>
                            
                            <div class="md:flex mt-8">
                                <div class="md:w-1/3">
                                    <span class="font-medium">Facebook</span>
                                </div>

                                <div class="md:w-2/3 mt-4 md:mt-0">
                                    <form>
                                        <div class="form-icon relative">
                                            <i data-feather="facebook" class="size-4 absolute top-3 start-4"></i>
                                            <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Facebook Profile Name" id="facebook_name" name="name" required="">
                                        </div>
                                    </form>

                                    <p class="text-slate-400 mt-1">Add your Facebook username (e.g. jennyhot).</p>
                                </div>
                            </div>
                            
                            <div class="md:flex mt-8">
                                <div class="md:w-1/3">
                                    <span class="font-medium">Instagram</span>
                                </div>

                                <div class="md:w-2/3 mt-4 md:mt-0">
                                    <form>
                                        <div class="form-icon relative">
                                            <i data-feather="instagram" class="size-4 absolute top-3 start-4"></i>
                                            <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Instagram Profile Name" id="insta_name" name="name" required="">
                                        </div>
                                    </form>

                                    <p class="text-slate-400 mt-1">Add your Instagram username (e.g. jennyhot).</p>
                                </div>
                            </div>
                            
                            <div class="md:flex mt-8">
                                <div class="md:w-1/3">
                                    <span class="font-medium">Linkedin</span>
                                </div>

                                <div class="md:w-2/3 mt-4 md:mt-0">
                                    <form>
                                        <div class="form-icon relative">
                                            <i data-feather="linkedin" class="size-4 absolute top-3 start-4"></i>
                                            <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Linkedin Profile Name" id="linkedin_name" name="name" required="">
                                        </div>
                                    </form>

                                    <p class="text-slate-400 mt-1">Add your Linkedin username.</p>
                                </div>
                            </div>
                            
                            <div class="md:flex mt-8">
                                <div class="md:w-1/3">
                                    <span class="font-medium">Youtube</span>
                                </div>

                                <div class="md:w-2/3 mt-4 md:mt-0">
                                    <form>
                                        <div class="form-icon relative">
                                            <i data-feather="youtube" class="size-4 absolute top-3 start-4"></i>
                                            <input type="url" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Youtube url" id="you_url" name="url" required="">
                                        </div>
                                    </form>

                                    <p class="text-slate-400 mt-1">Add your Youtube url.</p>
                                </div>
                            </div>

                            <div class="lg:flex">
                                <div class="lg:w-1/3">
                                    <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Save Social Profile</button>
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