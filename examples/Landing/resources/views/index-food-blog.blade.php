<!-- resources/views/index-food-blog.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Food-Blog Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative mt-[74px]">
    <div class="container-fluid relative">
        <div class="grid grid-cols-1">
            <div class="tiny-six-item">

                <!-- includes/Landings/index-food-blog/foods.blade.php -->
                @include('includes.Landings.index-food-blog.foods')

            </div><!--end tiny slide-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-4 justify-center">

            <!-- includes/Landings/index-food-blog/category.blade.php -->
            @include('includes.Landings.index-food-blog.category')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Latest Blogs</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Write your own food blog with techwind that can provide everything you need to blog, news, article, etc.</p>
        </div><!--end grid-->

        <div id="grid" class="md:flex justify-center mx-auto mt-6">

            <!-- includes/Landings/index-food-blog/post.blade.php -->
            @include('includes.Landings.index-food-blog.post')

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
            <div class="md:col-span-12 text-center">
                
                <!-- includes/Landings/nft-creator-profile/navigation.blade.php -->
                @include('includes.Landings.nft-creator-profile.navigation')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Trending Posts</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Write your own food blog with techwind that can provide everything you need to blog, news, article, etc.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-2 grid-cols-1 items-center mt-8 gap-4">
            <!-- Start Post -->
            <div class="group relative overflow-hidden rounded-md">
                <img src="{{ asset('assets/images/food/blog/8.jpg') }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="">
                <div class="absolute inset-0 bg-gradient-to-b to-slate-900 via-slate-900/50 from-transparent opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>

                <div class="absolute bottom-0 start-0 end-0 p-6 -mb-96 group-hover:mb-0 duration-500 ease-in-out">
                    <div class="text-center">
                        <a href="" class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">Eggs</a>
                        <a href="{{ url('/food-recipe') }}" class="text-white font-semibold hover:text-indigo-600 block text-lg mt-4 duration-500 ease-in-out">Spicy Cauliflower Burgers and Salad Recipe</a>

                        <div class="flex items-center justify-center mt-4">
                            <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-10 rounded-full shadow-md dark:shadow-gray-800" alt="">
                            <a href="" class="font-medium text-white block ms-2">Calvin Carlo</a>
                        </div>
                    </div>
                </div>

                <div class="absolute end-0 top-0 p-4 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                    <a href="#!" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center text-lg bg-white dark:bg-slate-900 border-0 shadow-sm dark:shadow-gray-800 rounded-full text-red-600/20 hover:text-red-600 focus:text-red-600"><i class="mdi mdi-heart"></i></a>
                </div>
            </div>
            <!-- End Post -->

            <div>
                <div class="grid grid-cols-1 gap-4">

                    <!-- includes/Landings/index-food-blog/trending.blade.php -->
                    @include('includes.Landings.index-food-blog.trending')

                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        
        <!-- includes/Pages/Blog/blog/subscribe.blade.php -->
        @include('includes.Pages.Blog.blog.subscribe')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Insta Post Start -->
<div class="container-fluid relative">
    <div class="grid grid-cols-1 relative">
        <div class="tiny-twelve-item">
            
            <!-- includes/Landings/index-restaurent/insta-post.blade.php -->
            @include('includes.Landings.index-restaurent.insta-post')

        </div>

        <!-- includes/Landings/index-restaurent/follow-now.blade.php -->
        @include('includes.Landings.index-restaurent.follow-now')

    </div><!--end grid-->
</div><!--end container-->
<!-- Insta Post End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer6')

@endsection