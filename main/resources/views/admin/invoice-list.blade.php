<!-- resources/views/invoice-list.blade.php -->
@extends('layouts.main')

@section('title', 'Invoice-List Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Invoice List</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Invoice List</li>
            </ul>
        </div>

        <div class="grid grid-cols-1 mt-6">
            <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                <table class="w-full text-start">
                    <thead class="text-base">
                        <tr>
                            <th class="text-start p-4 min-w-[128px]">Invoice No.</th>
                            <th class="text-start p-4 min-w-[192px]">Client Name</th>
                            <th class="text-center p-4 min-w-[200px]">Phone</th>
                            <th class="text-center p-4">Amount</th>
                            <th class="text-center p-4 min-w-[150px]">Generate(Dt.)</th>
                            <th class="text-center p-4">Status</th>
                            <th class="text-end p-4 min-w-[200px]"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- includes/Invoice/invoice-list/list.blade.php -->
                        @include('includes.Invoice.invoice-list.list')

                    </tbody>
                </table>
            </div>

            <div class="mt-5 flex items-center justify-between">
                <div>
                    <a href="#" class="size-8 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 border-gray-100 dark:border-gray-700 text-slate-400 hover:text-slate-900 dark:hover:text-white rounded-full"><i class="mdi mdi-arrow-left"></i></a>
                    <a href="#" class="size-8 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 border-gray-100 dark:border-gray-700 text-slate-400 hover:text-slate-900 dark:hover:text-white rounded-full"><i class="mdi mdi-arrow-right"></i></a>
                </div>

                <span class="text-slate-400">Showing 1 - 8 out of 45</span>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection