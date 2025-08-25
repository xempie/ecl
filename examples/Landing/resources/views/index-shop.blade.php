<!-- resources/views/index-shop.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Shop Page')

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

<!-- Start Home -->
<section class="relative mt-20">
    <div class="container-fluid relative">
        <div class="relative py-48 table w-full shadow-md overflow-hidden">
            <div class="absolute inset-0 bg-no-repeat md:bg-left bg-center bg-cover" style="background-image: url('{{ asset('assets/images/shop/bg.jpg') }}');"></div>
            <div class="absolute inset-0 bg-slate-950/30"></div>
            <div class="container relative">
                <div class="grid grid-cols-1">
                    <div class="md:text-start text-center">
                        <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">New Accessories <br> Collections</h1>
                        <p class="text-white/70 text-xl max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <div class="mt-6">
                            <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="mdi mdi-cart-outline"></i> Shop Now</a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </div>
    </div><!--end Container-->
</section><!--end section-->
<!-- End Home -->

<!-- Start -->
<section class="relative py-16">
    <div class="container relative">
        <div id="grid" class="md:flex w-full justify-center mx-auto mt-4">
            
            <!-- includes/Landings/index-shop/clothes.blade.php -->
            @include('includes.Landings.index-shop.clothes')

        </div>
    </div>

    <div class="container relative mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="text-2xl leading-normal font-semibold">Most Viewed Products</h3>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="{{ url('/shop-grid-two') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View More Items <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-shop/products.blade.php -->
            @include('includes.Landings.index-shop.products')

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
            <div class="md:col-span-12 text-center">
                <a href="{{ url('/shop-grid-two') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View More Items <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative mt-16">
        <div class="grid grid-cols-1 items-center">
            <h3 class="text-2xl leading-normal font-semibold">Top Categories</h3>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-shop/top-categories.blade.php -->
            @include('includes.Landings.index-shop.top-categories')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative mt-16">
        <div class="grid grid-cols-1 items-center">
            <h3 class="text-2xl leading-normal font-semibold">Popular Products</h3>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-shop/popular.blade.php -->
            @include('includes.Landings.index-shop.popular')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-28 w-full table relative bg-center bg-no-repeat bg-cover jarallax" data-jarallax data-speed="0.5" style="background-image: url('{{ asset('assets/images/shop/cta.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/30"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-4xl text-3xl text-white font-bold">End of Season Clearance <br> Sale upto 30%</h3>

            <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>

            <div class="mt-6">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="mdi mdi-cart-outline"></i> Shop Now</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 items-center">
            <h3 class="text-2xl leading-normal font-semibold">Recent Products</h3>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-shop/recents.blade.php -->
            @include('includes.Landings.index-shop.recents')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer8')

@endsection