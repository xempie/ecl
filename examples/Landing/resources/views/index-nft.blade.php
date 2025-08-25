<!-- resources/views/index-nft.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Nft Page')

@section('content')

@include('includes.navbar5')

<!-- Start Hero -->
<section class="relative md:py-52 py-36 items-center overflow-hidden bg-gradient-to-br to-orange-600/20 via-fuchsia-600/20 from-indigo-600/20">
    <div class="absolute inset-0 ltr:bg-[url('../../assets/images/nft/hero.png')] rtl:bg-[url('../../assets/images/nft/hero-rtl.png')] bg-no-repeat bg-bottom bg-cover"></div>

    <div class="container relative">
        <div class="grid grid-cols-1 items-center mt-10">
            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white">Discover Exclusive <br> Digital collectibles</h4>
            <p class="text-lg max-w-xl">We are a huge marketplace dedicated to connecting great artists of all Techwind with their fans and unique token collectors!</p>
        
            <div class="mt-8">
                <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Discover</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

            <!-- includes/Landings/index-nft/connect.blade.php -->
            @include('includes.Landings.index-nft.connect')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Best Creators & Sellers</h3>
                <p class="text-slate-400 max-w-xl">Best sellers of the week's NFTs</p>
            </div>

            <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                <a href="{{ url('/nft-creators') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-2 md:mt-6 relative">
            <div class="tiny-five-item">

                <!-- includes/Landings/index-nft/best-creators.blade.php -->
                @include('includes.Landings.index-nft.best-creators')

            </div>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 md:hidden">
            <div class="md:col-span-12 text-center">
                <a href="{{ url('/nft-creators') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Explore Hot Products</h3>

            <p class="text-slate-400 max-w-xl mx-auto">We are a huge marketplace dedicated to connecting great artists of all Techwind with their fans and unique token collectors!</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-nft/hot-products.blade.php -->
            @include('includes.Landings.index-nft.hot-products')

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <a href="{{ url('/nft-explore') }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Explore All Items <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start CTA -->
<section class="relative md:py-24 py-16 bg-gradient-to-br to-orange-600/30 via-fuchsia-600/30 from-indigo-600/30">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Join the fastest growing Techwind NFTs <br> with more than 2000+ NFTs</h3>

            <p class="max-w-xl mx-auto">We are a huge marketplace dedicated to connecting great artists of all Techwind with their fans and unique token collectors!</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-2 mt-8 gap-[30px]">
            <div class="rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 p-6">
                <h5 class="text-2xl font-semibold mb-4">Join our community</h5>
                <p class="text-slate-400 mb-4">We are a huge marketplace dedicated to connecting great artists of all Techwind.</p>
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>

            <div class="rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 p-6">
                <h5 class="text-2xl font-semibold mb-4">Learn more about Techwind</h5>
                <p class="text-slate-400 mb-4">We are a huge marketplace dedicated to connecting great artists of all Techwind.</p>
                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End CTA -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Collections</h3>

            <p class="text-slate-400 max-w-xl mx-auto">We are a huge marketplace dedicated to connecting great artists of all Techwind with their fans and unique token collectors!</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-nft/collection.blade.php -->
            @include('includes.Landings.index-nft.collection')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">We are a huge marketplace dedicated to connecting great artists of all Techwind with their fans and unique token collectors!</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-nft/blog3.blade.php -->
            @include('includes.Landings.index-nft.blog3')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection