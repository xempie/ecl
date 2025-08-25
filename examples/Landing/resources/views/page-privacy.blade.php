<!-- resources/views/page-privacy.blade.php -->
@extends('layouts.main')

@section('title', 'Page-Privacy Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="text-3xl leading-normal font-semibold">Privacy Policy</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="">Utility</a></li>
            <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold text-indigo-600" aria-current="page">Privacy</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Terms & Conditions -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="md:flex justify-center">
            <div class="md:w-3/4">
                <div class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">
                    <h5 class="text-xl font-semibold mb-4">Overview :</h5>
                    <p class="text-slate-400">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text.</p>
                    <p class="text-slate-400">In the 1960s, the text suddenly became known beyond the professional circle of typesetters and layout designers when it was used for Letraset sheets (adhesive letters on transparent film, popular until the 1980s) Versions of the text were subsequently included in DTP programmes such as PageMaker etc.</p>
                    <p class="text-slate-400">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories.</p>
                
                    <h5 class="text-xl font-semibold mb-4 mt-8">We use your information to :</h5>
                    <ul class="list-none text-slate-400 mt-4">
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Digital Marketing Solutions for Tomorrow</li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Our Talented & Experienced Marketing Agency</li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Create your own skin to match your brand</li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Digital Marketing Solutions for Tomorrow</li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Our Talented & Experienced Marketing Agency</li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Create your own skin to match your brand</li>
                    </ul>

                    <h5 class="text-xl font-semibold mb-4 mt-8">Information Provided Voluntarily :</h5>
                    <p class="text-slate-400">In the 1960s, the text suddenly became known beyond the professional circle of typesetters and layout designers when it was used for Letraset sheets (adhesive letters on transparent film, popular until the 1980s) Versions of the text were subsequently included in DTP programmes such as PageMaker etc.</p>

                    <div class="mt-8">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Print</a>
                    </div>
                </div>
            </div><!--end -->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Terms & Conditions -->

@include('includes.footer')

@endsection