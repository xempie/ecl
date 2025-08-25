<!-- resources/views/page-job-post.blade.php -->
@extends('layouts.main')

@section('title', 'Page-Job-Post Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/job/job.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-12">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Job Post</h3>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/index-job') }}">Job</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Job Post</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden text-gray-50 dark:text-slate-800">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="lg:flex justify-center">
            <div class="lg:w-2/3">
                <div class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                    <form class="text-start">
                        <div class="grid grid-cols-1">
                            <h5 class="text-lg font-semibold">Job Details:</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="RegisterName">Job Title:</label>
                                <input id="RegisterName" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Web Developer">
                            </div>

                            <div class="col-span-12 text-start">
                                <label for="comments" class="font-semibold">Job Description:</label>
                                <textarea name="comments" id="comments" class="form-input mt-2 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Write Job Description :"></textarea>
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">Job Categories:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option value="WD">Web Designer</option>
                                    <option value="WD">Web Developer</option>
                                    <option value="UI">UI / UX Desinger</option>
                                </select>
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">Job Type:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option value="FT">Full Time</option>
                                    <option value="PT">Part Time</option>
                                    <option value="WFH">Work From Home</option>
                                    <option value="RJ">Remote Job</option>
                                </select>
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">Salary:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option value="HOURL">Hourly</option>
                                    <option value="MONTH">Monthly</option>
                                </select>
                            </div>

                            <div class="md:col-span-3 col-span-12 text-start">
                                <label class="font-semibold md:invisible md:block hidden">Min:</label>
                                <div class="relative mt-1">
                                    <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded">
                                        <i class="mdi mdi-currency-usd text-indigo-600"></i>
                                    </span>
                                    <input type="number" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Min" name="minsalary">
                                </div>
                            </div>

                            <div class="md:col-span-3 col-span-12 text-start">
                                <label class="font-semibold md:invisible md:block hidden">Max:</label>
                                <div class="relative mt-1">
                                    <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded">
                                        <i class="mdi mdi-currency-usd text-indigo-600"></i>
                                    </span>
                                    <input type="number" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Max" name="maxsalary">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 mt-8">
                            <h5 class="text-lg font-semibold">Skill & Experience:</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="Skillname">Skills:</label>
                                <input id="Skillname" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Web Developer">
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold" for="Qualificationname">Qualifications:</label>
                                <input id="Qualificationname" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Qualifications">
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold" for="Experiencename">Experience:</label>
                                <input id="Experiencename" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Experience">
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">Industry:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option value="BANK">Banking</option>
                                    <option value="BIO">Biotechnology</option>
                                    <option value="AVI">Aviation</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 mt-8">
                            <h5 class="text-lg font-semibold">Address:</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="Address">Address:</label>
                                <input id="Address" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Address">
                            </div>
                            
                            <div class="md:col-span-4 col-span-12 text-start">
                                <label class="font-semibold">Country:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option value="USA">USA</option>
                                    <option value="CAD">Canada</option>
                                    <option value="CHINA">China</option>
                                </select>
                            </div>

                            <div class="md:col-span-4 col-span-12 text-start">
                                <label class="font-semibold">State:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option value="CAL">California</option>
                                    <option value="TEX">Texas</option>
                                    <option value="FLOR">Florida</option>
                                </select>
                            </div>

                            <div class="col-span-12 text-start">
                                <div class="w-full leading-[0] border-0">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[200px] rounded shadow-sm" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div>
                                <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">Post Now</button>
                            </div>
                        </div>
                    </form><!--end form-->
                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

@include('includes.footer5')

@endsection