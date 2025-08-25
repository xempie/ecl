<!-- resources/views/index-ecommerce.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Ecommerce Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">E-Commerce Dashboard</h5>
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

        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
            <div class="xl:col-span-8 col-span-12">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Sales & Revenue</h6>
                        
                        <div class="position-relative">
                            <select class="form-select form-input w-full py-2 px-2 pe-6 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                <option value="Y" selected>Yearly</option>
                                <option value="M">Monthly</option>
                                <option value="W">Weekly</option>
                                <option value="T">Today</option>
                            </select>
                        </div>
                    </div>
                    <div id="ecommerce-chart" class="apex-chart px-4 pb-6"></div>
                </div>
            </div>

            <div class="xl:col-span-4 col-span-12">
                <div class="grid xl:grid-cols-2 lg:grid-cols-4 md:grid-cols-2 gap-6">

                    <!-- includes/Dashboard/index-ecommerce/sales.blade.php -->
                    @include('includes.Dashboard.index-ecommerce.sales')

                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
            <div class="xl:col-span-8 lg:col-span-6 col-span-12">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-4 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <div>
                            <h6 class="text-lg font-semibold">Recent Orders</h6>
                        </div>
                        
                        <div class="position-relative">
                            <select class="form-select form-input w-full py-2 px-2 pe-6 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                <option value="T" selected>Today</option>
                                <option value="W">This Week</option>
                                <option value="M">This Month</option>
                                <option value="Y">This Year</option>
                            </select>
                        </div>
                    </div>

                    <div class="h-[352px]" data-simplebar>
                        <table class="w-full text-start">
                            <thead>
                                <tr>
                                    <th class="p-4 font-semibold text-start min-w-[180px]">Item</th>
                                    <th class="p-4 font-semibold text-center min-w-[100px]">Date</th>
                                    <th class="p-4 font-semibold text-center">Qty</th>
                                    <th class="p-4 font-semibold text-center">Price</th>
                                    <th class="p-4 font-semibold text-center">Status</th>
                                    <th class="p-4 font-semibold text-end">Payment</th>
                                </tr>
                            </thead>

                            <tbody>

                                <!-- includes/Dashboard/index-ecommerce/recent-orders.blade.php -->
                                @include('includes.Dashboard.index-ecommerce.recent-orders')

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-4 lg:col-span-6 col-span-12">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-4 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Weekly Top Products</h6>
                        
                        <div class="position-relative">
                            <select class="form-select form-input w-full py-2 px-2 pe-6 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                <option value="Y" selected>Yearly</option>
                                <option value="M">Monthly</option>
                                <option value="W">Weekly</option>
                                <option value="T">Today</option>
                            </select>
                        </div>
                    </div>
                    <div id="top-product-chart" class="apex-chart p-4 h-[352px]" data-simplebar></div>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
            <div class="lg:col-span-4">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-4 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <div>
                            <h6 class="text-lg font-semibold">Top Products</h6>
                        </div>
                        
                        <div class="position-relative">
                            <select class="form-select form-input w-full py-2 px-2 pe-6 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                <option value="T" selected>Today</option>
                                <option value="W">This Week</option>
                                <option value="M">This Month</option>
                                <option value="Y">This Year</option>
                            </select>
                        </div>
                    </div>

                    <div class="h-[340px]" data-simplebar>
                        <table class="w-full text-start">
                            <thead>
                                <tr>
                                    <th class="p-4 font-semibold text-start min-w-[200px]">Product</th>
                                    <th class="p-4 font-semibold text-center">Price</th>
                                    <th class="p-4 font-semibold text-center">Stock</th>
                                    <th class="p-4 font-semibold text-end">Orders</th>
                                </tr>
                            </thead>

                            <tbody>

                                <!-- includes/Dashboard/index-ecommerce/products.blade.php -->
                                @include('includes.Dashboard.index-ecommerce.products')
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-4 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <div>
                            <h6 class="text-lg font-semibold">Top Seller</h6>
                        </div>
                        
                        <div class="position-relative">
                            <select class="form-select form-input w-full py-2 px-2 pe-6 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                <option value="T" selected>Today</option>
                                <option value="W">This Week</option>
                                <option value="M">This Month</option>
                                <option value="Y">This Year</option>
                            </select>
                        </div>
                    </div>

                    <div class="h-[340px]" data-simplebar>
                        <table class="w-full text-start">
                            <thead>
                                <tr>
                                    <th class="p-4 font-semibold text-start min-w-[180px]">Seller</th>
                                    <th class="p-4 font-semibold text-center min-w-[120px]">Categories</th>
                                    <th class="p-4 font-semibold text-center min-w-[120px]">Items</th>
                                    <th class="p-4 font-semibold text-end">Ratings</th>
                                </tr>
                            </thead>

                            <tbody>

                                <!-- includes/Dashboard/index-ecommerce/seller.blade.php -->
                                @include('includes.Dashboard.index-ecommerce.seller')

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="px-4 py-[22px] border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Client Reviews</h6>
                    </div>

                    <div class="h-[340px] p-4" data-simplebar>
                        <div class="tiny-single-item">

                            <!-- includes/Dashboard/index-ecommerce/reviews.blade.php -->
                            @include('includes.Dashboard.index-ecommerce.reviews')

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection