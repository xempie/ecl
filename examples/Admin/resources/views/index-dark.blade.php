<!-- resources/views/index-dark.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Dark Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Hello, Cristina</h5>
                <h6 class="text-slate-400 font-semibold">Welcome!</h6>
            </div>

            <div class="flex items-center">
                <div class="position-relative">
                    <select class="form-select form-input w-full p-2 pe-6 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                        <option value="Y" selected>Yearly</option>
                        <option value="M">Monthly</option>
                        <option value="W">Weekly</option>
                        <option value="T">Today</option>
                    </select>
                </div>

                <a href="" class="ms-1">
                    <span class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-md sm:inline-block hidden"><i class="uil uil-export"></i> Export</span>

                    <span class="size-10 items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md border bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white sm:hidden inline-flex"><i class="uil uil-export"></i></span>
                </a>
            </div>
        </div>

        <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
            
            <!-- includes/Dashboard/index/visitors.blade.php -->
            @include('includes.Dashboard.index.visitors')

        </div>

        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
            <div class="lg:col-span-8">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Profit / Expenses Analytics</h6>
                        
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

        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
            <div class="xl:col-span-5 lg:col-span-12">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Orders</h6>
                        
                        <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-slate-400 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View orders <i class="uil uil-arrow-right"></i></a>
                    </div>

                    <div class="relative overflow-x-auto block w-full max-h-[400px]" data-simplebar>
                        <table class="w-full text-start">
                            <thead class="text-base">
                                <tr>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[100px]">No.</th>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[128px]">ID</th>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[128px]">Date</th>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[128px]">Price</th>
                                    <th class="text-end font-semibold text-[15px] p-4 min-w-[128px]">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <!-- includes/Dashboard/index/orders.blade.php -->
                                @include('includes.Dashboard.index.orders')

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

            <div class="xl:col-span-4 lg:col-span-6">
                <div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="flex justify-between items-center border-b border-gray-100 dark:border-gray-800 p-4">
                        <div class="flex">
                            <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-11 rounded-full shadow-sm dark:shadow-gray-700" alt="">
                            <div class="overflow-hidden ms-3">
                                <a href="#" class="block font-semibold text-truncate">Calvin Carlo</a>
                                <span class="text-slate-400 flex items-center text-sm"><span class="bg-green-600 text-white text-[10px] font-bold rounded-full size-2 me-1"></span> Online</span>
                            </div>
                        </div>

                        <div class="dropdown relative">
                            <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-800/5 dark:bg-gray-700 border border-gray-800/5 dark:border-gray-700 text-slate-900 dark:text-white rounded-full"><i class="mdi mdi-dots-vertical"></i></span>
                            </button>
                                
                            <!-- includes/Dashboard/index/dropdown.blade.php -->
                            @include('includes.Dashboard.index.dropdown')

                        </div>
                    </div>

                    <ul class="p-4 list-none mb-0 max-h-[350px] bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/bg-chat.png') }}');" data-simplebar>
                        
                        <!-- includes/Dashboard/index/chat.blade.php -->
                        @include('includes.Dashboard.index.chat')

                    </ul>

                    <div class="p-2 border-t border-gray-100 dark:border-gray-800">
                        <div class="flex ">
                            <input type="text" class="form-input w-full py-2 px-3 h-9 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Enter Message...">

                            <div class="min-w-[125px] text-end">
                                <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="mdi mdi-send"></i></a>
                                <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="mdi mdi-emoticon-happy-outline"></i></a>
                                <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="mdi mdi-paperclip"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-3 lg:col-span-6">
                <div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Top Products / Items</h6>

                        <a href="" class="text-slate-400 hover:text-indigo-600 dark:text-white/70 dark:hover:text-white text-[20px]"><i class="mdi mdi-swap-vertical"></i></a>
                    </div>

                    <div class="relative overflow-x-auto block w-full max-h-[400px]" data-simplebar>
                        <table class="w-full text-start">
                            <thead class="text-base">
                                <tr>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[150px]">Products</th>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-[100px]">Earnings</th>
                                    <th class="text-end font-semibold text-[15px] p-4 min-w-[80px]">Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <!-- includes/Dashboard/index/items.blade.php -->
                                @include('includes.Dashboard.index.items')

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection