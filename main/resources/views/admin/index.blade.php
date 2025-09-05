<!-- resources/views/index.blade.php -->
@extends('admin.layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Lab Admin Dashboard</h5>
                <h6 class="text-slate-400 font-semibold">Empathic Computing Research Lab Management</h6>
            </div>

            <div class="flex items-center">
                <a href="../" class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600/5 hover:bg-blue-600 border-blue-600/10 hover:border-blue-600 text-blue-600 hover:text-white rounded-md">
                    <i class="uil uil-external-link-alt"></i> View Website
                </a>
            </div>
        </div>

        <!-- Lab Statistics Cards -->
        <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
            @include('admin.includes.Dashboard.index.lab-stats')
        </div>

        <!-- Dashboard Main Content -->
        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
            <!-- Recent Activities -->
            <div class="lg:col-span-8">
                @include('admin.includes.Dashboard.index.recent-activities')
            </div>
            
            <!-- Quick Actions -->
            <div class="lg:col-span-4">
                @include('admin.includes.Dashboard.index.quick-actions')
            </div>
        </div>


        <!-- Placeholder for charts section -->
        <div class="grid lg:grid-cols-1 grid-cols-1 mt-6 gap-6" style="display: none;">
            <div class="lg:col-span-8">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Lab Analytics</h6>
                        
                        <div class="position-relative">
                            <select class="form-select form-input w-full py-2 px-2 pe-6 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                <option value="Y" selected>Yearly</option>
                                <option value="M">Monthly</option>
                                <option value="W">Weekly</option>
                                <option value="T">Today</option>
                            </select>
                        </div>
                    </div>
                    <div id="mainchart" class="apex-chart px-4 pb-6"></div>
                </div>
            </div>

            <div class="lg:col-span-4">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Customers by Country</h6>

                        <div class="dropdown relative">
                            <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-800/5 dark:bg-gray-700 border border-gray-800/5 dark:border-gray-700 text-slate-900 dark:text-white rounded-full"><i class="mdi mdi-dots-vertical"></i></span>
                            </button>
                            <!-- Dropdown menu -->
                            <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                <ul class="py-2 text-start">
                                    <li>
                                        <a href="" class="block font-medium py-1 px-4 text-slate-400 dark:text-white/70 hover:text-slate-900 dark:hover:text-white">Profile</a>
                                    </li>
                                    <li>
                                        <a href="" class="block font-medium py-1 px-4 text-slate-400 dark:text-white/70 hover:text-slate-900 dark:hover:text-white">Profile Settings</a>
                                    </li>
                                    <li>
                                        <a href="" class="block font-medium py-1 px-4 text-slate-400 dark:text-white/70 hover:text-slate-900 dark:hover:text-white">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-b border-gray-100 dark:border-gray-800">
                        <div id="map" class="w-full !h-[236px]"></div>
                    </div>

                    <div class="p-6">
                        <ul class="list-none flex">
                            <li class="inline-block w-1/2"><span class="text-indigo-600 font-semibold">Canada</span>:<span class="text-slate-400 ms-2">12468</span></li>
                            <li class="inline-block w-1/2"><span class="text-indigo-600 font-semibold">Greenland</span>:<span class="text-slate-400 ms-2">12468</span></li>
                        </ul>
                        <ul class="list-none flex">
                            <li class="inline-block w-1/2"><span class="text-indigo-600 font-semibold">Russia</span>:<span class="text-slate-400 ms-2">12468</span></li>
                            <li class="inline-block w-1/2"><span class="text-indigo-600 font-semibold">Palestine</span>:<span class="text-slate-400 ms-2">12468</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection