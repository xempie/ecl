<!-- resources/views/shop-about.blade.php -->
@extends('layouts.main')

@section('title', 'Shop-About Page')

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
        <div class="grid grid-cols-1 text-center mt-14">
            <h3 class="text-3xl leading-normal font-semibold">Shop Story</h3>
        </div><!--end grid-->

        <div class="relative text-center mt-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ url('/index-shop') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold text-indigo-600" aria-current="page">About us</li>
            </ul>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="md:flex justify-center">
            <div class="lg:w-3/5 text-center">
                <h5 class="text-2xl font-semibold">Techwind Shop</h5>

                <p class="text-slate-400 mt-4">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Features</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">
            
            <!-- includes/Landings/shop-about/features6.blade.php -->
            @include('includes.Landings.shop-about.features6')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div id="grid" class="md:flex w-full justify-center mx-auto mt-4">
            
            <!-- includes/Landings/index-shop/clothes.blade.php -->
            @include('includes.Landings.index-shop.clothes')

        </div>
    </div>

    <div class="container relative md:mt-24 mt-16">
       
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer8')

@endsection