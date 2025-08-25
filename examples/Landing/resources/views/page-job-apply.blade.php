<!-- resources/views/page-job-apply.blade.php -->
@extends('layouts.main')

@section('title', 'Page-Job-Apply Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/job/job.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-12">
            <h3 class="mb-4 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Senior Web Developer</h3>

            <ul class="list-none">
                <li class="inline text-slate-400 me-3"><i class="uil uil-map-marker text-white h6 me-1"></i> London, UK - <span class="text-white">Full Time</span></li>
            </ul>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/index-job') }}">Job</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Job Apply</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
            <div class="lg:col-start-2 lg:col-span-10">
                <div class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 p-6">
                    <form>
                        <div class="grid lg:grid-cols-12 gap-6">
                            <div class="lg:col-span-6">
                                <div class="text-start">
                                    <label for="name" class="font-semibold">Your Name:</label>
                                    <input name="name" id="name" type="text" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Name :">
                                </div>
                            </div>

                            <div class="lg:col-span-6">
                                <div class="text-start">
                                    <label for="email" class="font-semibold">Your Email:</label>
                                    <input name="email" id="email" type="email" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email :">
                                </div>
                            </div>

                            <div class="lg:col-span-6">
                                <div class="text-start">
                                    <label for="subject" class="font-semibold">Phone No.:</label>
                                    <input name="number" id="phonenumber" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Phone No. :">
                                </div>
                            </div>

                            <div class="lg:col-span-6">
                                <div class="text-start">
                                    <label for="subject" class="font-semibold">Job Title:</label>
                                    <input name="subject" id="subject" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Job title :">
                                </div>
                            </div>

                            <div class="lg:col-span-6">
                                <label for="typejob" class="font-semibold">Types of Job:</label>
                                <select id="typejob" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option>All Jobs</option>
                                    <option>Full Time</option>
                                    <option>Half Time</option>
                                    <option>Remote</option>
                                    <option>In Office</option>
                                </select>
                            </div>

                            <div class="lg:col-span-12">
                                <div class="text-start">
                                    <label for="comments" class="font-semibold">Your Comment:</label>
                                    <textarea name="comments" id="comments" class="form-input mt-3 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                                </div>
                            </div>

                            <div class="lg:col-span-12">
                                <label class="font-semibold" for="resumefile">Upload file:</label>
                                <input class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" id="resumefile" type="file">
                            </div>
                        </div>
                        <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-4">Send Message</button>
                    </form><!--end form-->
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

@include('includes.footer5')

@endsection