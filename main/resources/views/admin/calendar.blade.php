<!-- resources/views/calendar.blade.php -->
@extends('layouts.main')

@section('title', 'Calendar Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Calendar</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Calendar</li>
            </ul>
        </div>

        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-2">
            <div class="xl:col-span-2 lg:col-span-4">
                <div id="external-events">
                    <div class="rounded-md shadow-sm dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900">
                        <span class="h6 font-semibold">All Events</span>

                            <!-- includes/Apps/calendar/events.blade.php -->
                            @include('includes.Apps.calendar.events')
                    
                        <div class="mt-2">
                            <div class="flex items-center mb-0">
                                <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="drop-remove">
                                <label class="form-checkbox-label text-slate-400" for="drop-remove">Remove after drop</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-10 lg:col-span-8">
                <div id="calendar-container" class="rounded-md shadow-sm dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900">
                    <div id="calendar" class="max-w-7xl"></div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection