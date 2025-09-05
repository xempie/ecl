<!-- resources/views/pricing.blade.php -->
@extends('layouts.main')

@section('title', 'Pricing Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Pricing Plans</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Pricing</li>
            </ul>
        </div>

        <div class="grid grid-cols-1 mt-6">
            <ul class="inline-block w-fit mx-auto flex-wrap justify-center text-center p-2 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                <li role="presentation" class="inline-block">
                    <button class="px-4 py-1 text-sm font-semibold rounded-md w-full hover:text-indigo-600 duration-500" id="start-month-tab" data-tabs-target="#start-month" type="button" role="tab" aria-controls="start-month" aria-selected="true">Monthly</button>
                </li>
                <li role="presentation" class="inline-block">
                    <button class="px-4 py-1 text-sm font-semibold rounded-md w-full duration-500" id="start-year-tab" data-tabs-target="#start-year" type="button" role="tab" aria-controls="start-year" aria-selected="false">Yearly <span class="bg-amber-500 text-white text-xs font-bold px-2.5 py-0.5 rounded-md inline-block h-5 ms-1">Save 25%</span></button>
                </li>
            </ul>

            <div id="StarterContent">

                <!-- includes/Pages/pricing/pricings.blade.php -->
                @include('includes.Pages.pricing.pricings')
            
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection