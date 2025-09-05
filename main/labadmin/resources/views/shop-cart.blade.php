<!-- resources/views/shop-cart.blade.php -->
@extends('layouts.main')

@section('title', 'Shop-Cart Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Shop Cart</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/shop') }}">Shop</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Cart</li>
            </ul>
        </div>

        <div class="grid grid-cols-1 mt-6">
            <div class="relative overflow-x-auto shadow-sm dark:shadow-gray-700 rounded-md">
                <table class="w-full text-start">
                    <thead class="text-sm uppercase bg-white dark:bg-slate-900">
                        <tr>
                            <th scope="col" class="p-4 w-4"></th>
                            <th scope="col" class="text-start p-4 min-w-[220px]">Product</th>
                            <th scope="col" class="p-4 w-24 min-w-[100px]">Price</th>
                            <th scope="col" class="p-4 w-56 min-w-[220px]">Qty</th>
                            <th scope="col" class="p-4 w-24 min-w-[100px]">Total($)</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- includes/E-Commerce/shop-cart/cart.blade.php -->
                        @include('includes.E-Commerce.shop-cart.cart')

                    </tbody>
                </table>
            </div>

            <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-9 md:order-1 order-3">
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">Shop Now</a>
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white mt-2">Add to Cart</a>
                </div>

                <div class="lg:col-span-3 md:order-2 order-1">
                    <ul class="list-none shadow-sm dark:shadow-gray-700 rounded-md bg-white dark:bg-slate-900">
                        <li class="flex justify-between p-4">
                            <span class="font-semibold text-lg">Subtotal :</span>
                            <span class="text-slate-400">$ 1500</span>
                        </li>
                        <li class="flex justify-between p-4 border-t border-gray-100 dark:border-gray-800">
                            <span class="font-semibold text-lg">Taxes :</span>
                            <span class="text-slate-400">$ 150</span>
                        </li>
                        <li class="flex justify-between font-semibold p-4 border-t border-gray-200 dark:border-gray-600">
                            <span class="font-semibold text-lg">Total :</span>
                            <span class="font-semibold">$ 1650</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection