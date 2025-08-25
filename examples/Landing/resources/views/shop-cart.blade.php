<!-- resources/views/shop-cart.blade.php -->
@extends('layouts.main')

@section('title', 'Shop-Cart Page')

@section('content')

@include('includes.navbar10')

<!-- Start Modal -->
<dialog id="WishList" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
    <div class="relative h-auto md:w-[480px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-800">
            <h3 class="font-bold text-lg">Add Payment Method</h3>
            <form method="dialog">
                <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
            </form>
        </div>
        <div class="p-6 text-center">
            <div class="relative overflow-hidden text-transparent -m-3">
                <i data-feather="hexagon" class="size-32 fill-red-600/5 mx-auto"></i>
                <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-red-600 rounded-xl duration-500 text-4xl flex align-middle justify-center items-center">
                    <i class="uil uil-heart-break"></i>
                </div>
            </div>
    
            <h4 class="text-xl font-semibold mt-6">Your wishlist is empty.</h4>
            <p class="text-slate-400 my-3">Create your first wishlist request...</p>

            <a href="" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-transparent hover:bg-indigo-600 border border-indigo-600 text-indigo-600 hover:text-white rounded-md mt-2">Create a new wishlist</a>
        </div>
    </div>
</dialog>
<!-- End Modal -->

<!-- Start Hero -->
<section class="relative table w-full py-20 lg:py-24 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 mt-14">
            <h3 class="text-3xl leading-normal font-semibold">Cart</h3>
        </div><!--end grid-->

        <div class="relative mt-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ url('/index-shop') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold text-indigo-600" aria-current="page">Cart</li>
            </ul>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid lg:grid-cols-1">
            <div class="relative overflow-x-auto shadow-sm dark:shadow-gray-800 rounded-md">
                <table class="w-full text-start">
                    <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                        <tr>
                            <th scope="col" class="p-4 w-4"></th>
                            <th scope="col" class="text-start p-4 min-w-[220px]">Product</th>
                            <th scope="col" class="p-4 w-24 min-w-[100px]">Price</th>
                            <th scope="col" class="p-4 w-56 min-w-[220px]">Qty</th>
                            <th scope="col" class="p-4 w-24 min-w-[100px]">Total($)</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- includes/Landings/shop-cart/cart.blade.php -->
                        @include('includes.Landings.shop-cart.cart')

                    </tbody>
                </table>
            </div>

            <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-9 md:order-1 order-3">
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">Shop Now</a>
                    <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white mt-2">Add to Cart</a>
                </div>

                <div class="lg:col-span-3 md:order-2 order-1">
                    <ul class="list-none shadow-sm dark:shadow-gray-800 rounded-md">
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
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer8')

@endsection