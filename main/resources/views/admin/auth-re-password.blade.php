<!-- resources/views/auth-re-password.blade.php -->
@extends('layouts.no-header')

@section('title', 'Auth-Re-Password Page')

@section('content')

<!-- Start -->
<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-indigo-600/[0.02]"></div>
    <div class="container-fluid relative">
        <div class="md:flex items-center">
            <div class="xl:w-[30%] lg:w-1/3 md:w-1/2">
                <div class="relative md:flex flex-col md:min-h-screen justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 md:px-10 py-10 px-4 z-1">
                    <div class="text-center">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-icon-64.png') }}" class="mx-auto" alt=""></a>
                    </div>
                    <div class="title-heading text-center md:my-auto my-20">
                        <form class="text-start">
                            <div class="grid grid-cols-1">
                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginEmail">Email Address:</label>
                                    <input id="LoginEmail" type="email" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="name@example.com">
                                </div>

                                <div class="mb-4">
                                    <input type="submit" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Send">
                                </div>

                                <div class="text-center">
                                    <span class="text-slate-400 me-2">Remember your password ? </span><a href="{{ url('/auth-login') }}" class="text-slate-900 dark:text-white font-bold inline-block">Sign in</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        <p class="mb-0 text-slate-400">© {{ date('Y') }} Empathic Computing Lab. All rights reserved.</p>
                    </div>
                </div>
            </div>

            <div class="xl:w-[70%] lg:w-2/3 md:w-1/2 flex justify-center mx-6 md:my-auto my-20">
                <div>
                    <div class="relative">
                        <div class="absolute top-20 start-20 bg-indigo-600/[0.02] size-[1200px] rounded-full"></div>
                        <div class="absolute bottom-20 -end-20 bg-indigo-600/[0.02] size-[600px] rounded-full"></div>
                    </div>

                    <div class="text-center">
                        <div>
                            <img src="{{ asset('assets/images/contact.svg') }}" class="max-w-xl mx-auto" alt="">
                            <div class="relative max-w-xl mx-auto text-start">
                                <div class="relative p-8 border-2 border-indigo-600 rounded-[30px] before:content-[''] before:absolute before:w-28 before:border-[6px] before:border-white dark:before:border-slate-900 before:-bottom-1 before:start-16 before:z-2 after:content-[''] after:absolute after:border-2 after:border-indigo-600 after:rounded-none after:rounded-e-[50px] after:size-20 after:-bottom-[80px] after:start-[60px] after:z-3 after:border-s-0 after:border-b-0">
                                    <span class="font-semibold leading-normal">
                                        Launch your campaign and benefit from our expertise on designing and managing conversion centered latest Tailwind CSS html page.
                                    </span>
    
                                    <div class="absolute text-8xl -top-0 start-4 text-indigo-600/10 dark:text-indigo-600/20 -z-1">
                                        <i class="mdi mdi-format-quote-open"></i>
                                    </div>
                                </div>
    
                                <div class="text-lg font-semibold mt-6 ms-44">
                                        - Techwind
                                </div>
                            </div>
                            <!-- <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section -->
<!-- End -->

@endsection