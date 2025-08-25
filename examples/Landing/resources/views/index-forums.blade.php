<!-- resources/views/index-forums.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Forums Page')

@section('content')

@include('includes.navbar')

<!-- Start -->
<section class="relative table w-full py-36 md:py-56 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 mt-10 text-center">
            <h3 class="font-bold uppercase leading-normal text-4xl mb-5">Welcome to the Techwind Forum</h3>

            <p class="text-slate-400 text-lg mx-auto">We're here to help. Get in touch and we'll get back to you as soon as we can</p>
        
            <div class="subcribe-form mt-6">
                <form class="relative max-w-xl mx-auto">
                    <input type="text" id="SearchForumKeyword" name="text" class="pt-4 pe-14 pb-4 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800" placeholder="Enter your keywords :">
                    <button type="submit" class="inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] size-[46px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i class="uil uil-search"></i></button>
                </form><!--end form-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="relative -mt-12 rounded-md shadow-sm dark:shadow-gray-800 overflow-hidden bg-white dark:bg-slate-900">

                <!-- includes/Landings/index-forums/our-forum.blade.php -->
                @include('includes.Landings.index-forums.our-forum')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8">
                <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 rounded-md border border-gray-100 dark:border-slate-800">
                    <table class="w-full text-start">
                        <thead class="text-lg border-b border-gray-100 dark:border-slate-800">
                            <tr>
                                <th class="py-6 px-4 font-semibold min-w-[300px] text-start">Forum</th>
                                <th class="text-center py-6 px-4 font-semibold min-w-[40px]">Topics</th>
                                <th class="text-center py-6 px-4 font-semibold min-w-[40px]">Comments</th>
                                <th class="py-6 px-4 font-semibold min-w-[220px] text-end">Posted</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- includes/Landings/index-forums/forum.blade.php -->
                            @include('includes.Landings.index-forums.forum')

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky top-20">
                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center">Sign In</h5>
                    <form class="text-start mt-8">
                        <div class="grid grid-cols-1">
                            <div class="mb-4">
                                <label class="font-semibold" for="LoginEmail">Email Address:</label>
                                <input id="LoginEmail" type="email" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="name@example.com">
                            </div>

                            <div class="mb-4">
                                <label class="font-semibold" for="LoginPassword">Password:</label>
                                <input id="LoginPassword" type="password" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Password:">
                            </div>

                            <div class="flex justify-between mb-4">
                                <div class="flex items-center mb-0">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="RememberMe">
                                    <label class="form-checkbox-label text-slate-400" for="RememberMe">Remember me</label>
                                </div>
                                <p class="text-slate-400 mb-0"><a href="{{ url('/auth-re-password') }}" class="text-slate-400">Forgot password ?</a></p>
                            </div>

                            <div class="mb-4">
                                <input type="submit" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Login / Sign in">
                            </div>

                            <div class="text-center">
                                <span class="text-slate-400 me-2">Don't have an account ?</span> <a href="{{ url('/auth-signup') }}" class="text-slate-900 dark:text-white font-bold inline-block">Sign Up</a>
                            </div>
                        </div>
                    </form>

                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Recent Reply</h5>
                    
                        <!-- includes/Landings/index-forums/recent.blade.php -->
                        @include('includes.Landings.index-forums.recent')

                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Social sites</h5>
                    <ul class="list-none text-center mt-8">
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="facebook" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="instagram" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="twitter" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="linkedin" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="github" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="youtube" class="size-4"></i></a></li>
                        <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="gitlab" class="size-4"></i></a></li>
                    </ul><!--end icon-->

                    <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Tagscloud</h5>
                    <ul class="list-none text-center mt-8">
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Business</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Finance</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Marketing</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Fashion</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Bride</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Lifestyle</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Travel</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Beauty</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Video</a></li>
                        <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow-sm dark:shadow-gray-800 duration-500">Audio</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection