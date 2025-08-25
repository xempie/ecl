<!-- resources/views/helpcenter-guides.blade.php -->
@extends('layouts.main')

@section('title', 'Helpcenter-Guides Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/helpcenter.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal tracking-wide leading-normal font-medium text-white">Guides & Support</h3>

        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/helpcenter') }}">Helpcenter</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Guides</li>
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

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div class="">
                <h5 class="font-semibold text-xl">Getting started</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Deciding to purchase</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>List your space</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Landing an experience or adventure</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Top uses questions</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-semibold text-xl">Your calendar</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Pricing & availability</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Booking settings</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Responding to enquiries & requests</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Snoozing or deactivating your listing</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-semibold text-xl">Your listings</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Updating your listing</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Neighbourhoods</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Listing photos & photography</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Techwind Plus</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>API-connected software</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-semibold text-xl">How payouts work</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Getting paid</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Adding payout info</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Your payout status</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Donations</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Taxes</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-semibold text-xl">Your reservations</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Techwind safely</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Techwind Experiences and Adventures</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Changing a reservation</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Cancelling a reservation</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Long-term reservations</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-semibold text-xl">Reservation help</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Help with a reservation or guest</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Guest cancellations</a></li>
                </ul>
            </div>
            
            <div class="">
                <h5 class="font-semibold text-xl">Your account</h5>
                <ul class="list-none mt-4">
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Your profile</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Account security</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Identification & verifications</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Reviews</a></li>
                    <li class="mt-2"><a href="" class="text-slate-400"><i class="mdi mdi-arrow-right text-indigo-600 me-2"></i>Superhost status</a></li>
                </ul>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Home/get-in-touch.blade.php -->
        @include('includes.Home.get-in-touch')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

@include('includes.footer')

@endsection