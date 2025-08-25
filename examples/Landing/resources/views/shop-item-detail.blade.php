<!-- resources/views/shop-item-detail.blade.php -->
@extends('layouts.main')

@section('title', 'Shop-Item-Detail Page')

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
            <h3 class="text-3xl leading-normal font-semibold">Product / Item Detail</h3>
        </div><!--end grid-->

        <div class="relative mt-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ url('/index-shop') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold text-indigo-600" aria-current="page">Item Detail</li>
            </ul>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] items-center">
            <div class="lg:col-span-5 md:col-span-6">
                <div class="tiny-single-item">
                    <div class="tiny-slide">
                        <img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/shop/single/single-2.jpg') }}" class="rounded-md shadow-sm dark:shadow-gray-800" alt="">
                    </div><!--end content-->
                    
                    <div class="tiny-slide">
                        <img src="{{ asset('assets/images/shop/single/single-3.jpg') }}" class="rounded-md shadow-sm dark:shadow-gray-800" alt="">
                    </div><!--end content-->
                    
                    <div class="tiny-slide">
                        <img src="{{ asset('assets/images/shop/single/single-4.jpg') }}" class="rounded-md shadow-sm dark:shadow-gray-800" alt="">
                    </div><!--end content-->
                    
                    <div class="tiny-slide">
                        <img src="{{ asset('assets/images/shop/single/single-5.jpg') }}" class="rounded-md shadow-sm dark:shadow-gray-800" alt="">
                    </div><!--end content-->
                    
                    <div class="tiny-slide">
                        <img src="{{ asset('assets/images/shop/single/single-6.jpg') }}" class="rounded-md shadow-sm dark:shadow-gray-800" alt="">
                    </div><!--end content-->
                </div><!--end tiny slider-->
            </div><!--end col-->

            <div class="lg:col-span-7 md:col-span-6">
                <div class="lg:ms-6">
                    <h5 class="text-2xl font-semibold">
                        @if(!empty($item['title']))
                            {{ $item['title'] }}
                        @else
                            Branded T-Shirts
                        @endif
                    </h5>
                    <div class="mt-2">
                        <span class="text-slate-400 font-semibold me-1">$16USD <del class="text-red-600">$21USD</del></span>

                        <ul class="list-none inline-block text-orange-400">
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline text-slate-400 font-semibold">4.8 (45)</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-lg font-semibold">Overview :</h5>
                        <p class="text-slate-400 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero exercitationem, unde molestiae sint quae inventore atque minima natus fugiat nihil quisquam voluptates ea omnis. Modi laborum soluta tempore unde accusantium.</p>
                    
                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Create your own skin to match your brand</li>
                        </ul>
                    </div>

                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] mt-4">
                        <div class="flex items-center">
                            <h5 class="text-lg font-semibold me-2">Size:</h5>
                            <div class="">
                                <a href="" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white">S</a>
                                <a href="" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white">M</a>
                                <a href="" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white">L</a>
                                <a href="" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white">XL</a>
                            </div>
                        </div><!--end content-->

                        <div class="flex items-center">
                            <h5 class="text-lg font-semibold me-2">Quantity:</h5>
                            <div class="qty-icons ms-3">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 border hover:border-indigo-600 text-indigo-600 hover:text-white minus">-</button>
                                <input min="0" name="quantity" value="0" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white plus">+</button>
                            </div>
                        </div><!--end content-->
                    </div><!--end grid-->

                    <div class="mt-4">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">Shop Now</a>
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white mt-2">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-10 gap-[30px]">
            <div class="lg:col-span-3 md:col-span-5">
                <div class="sticky top-20">
                    <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full hover:text-indigo-600 duration-500" id="description-tab" data-tabs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500" id="addinfo-tab" data-tabs-target="#addinfo" type="button" role="tab" aria-controls="addinfo" aria-selected="false">Additional Information</button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500" id="review-tab" data-tabs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="lg:col-span-9 md:col-span-7">
                <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">
                    <div class="" id="description" role="tabpanel" aria-labelledby="profile-tab">
                        <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area). For this reason, dummy text usually consists of a more or less random series of words or syllables.</p>
                    </div>

                    <div class="hidden" id="addinfo" role="tabpanel" aria-labelledby="addinfo-tab">
                        <table class="w-full text-start">
                            <tbody>
                                <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-800">
                                    <td class="font-semibold py-4" style="width: 100px;">Color</td>
                                    <td class="text-slate-400 py-4">Red, White, Black, Orange</td>
                                </tr>

                                <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-800">
                                    <td class="font-semibold py-4">Material</td>
                                    <td class="text-slate-400 py-4">Cotton</td>
                                </tr>

                                <tr class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-800">
                                    <td class="font-semibold py-4">Size</td>
                                    <td class="text-slate-400 py-4">S, M, L, XL, XXL</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="hidden" id="review" role="tabpanel" aria-labelledby="review-tab">

                        <!-- includes/Landings/shop-item-detail/reviews8.blade.php -->
                        @include('includes.Landings.shop-item-detail.reviews8')

                        <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 mt-8">
                            <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                            <form class="mt-8">
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-start">
                                            <label for="name" class="font-semibold">Your Name:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                                <input name="name" id="name" type="text" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-start">
                                            <label for="email" class="font-semibold">Your Email:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                                <input name="email" id="email" type="email" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email :">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <div class="text-start">
                                            <label for="comments" class="font-semibold">Your Comment:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                                <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative mt-16">
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

@include('includes.footer8')

@endsection