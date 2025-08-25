<!-- resources/views/shop-grid.blade.php -->
@extends('layouts.main')

@section('title', 'Shop-Grid Page')

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
            <h3 class="text-3xl leading-normal font-semibold">Shop Grid</h3>
        </div><!--end grid-->

        <div class="relative mt-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ url('/index-shop') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold text-indigo-600" aria-current="page">Product Grid</li>
            </ul>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-9 md:col-span-8">
                <h3 class="text-xl leading-normal font-semibold">Showing 1-8 of 16 results</h3>
            </div>

            <div class="lg:col-span-3 md:col-span-4 md:text-end">
                <label class="font-semibold hidden"></label>
                <select class="form-select form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                    <option selected>Sort by latest</option>
                    <option>Sort by popularity</option>
                    <option>Sort by rating</option>
                    <option>Sort by price: low to high</option>
                    <option>Sort by price: high to low</option>
                </select>
            </div>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-shop/products.blade.php -->
            @include('includes.Landings.index-shop.products')

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">

                <!-- includes/Landings/nft-creator-profile/navigation.blade.php -->
                @include('includes.Landings.nft-creator-profile.navigation')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer8')

@endsection