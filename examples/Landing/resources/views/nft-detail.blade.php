<!-- resources/views/nft-detail.blade.php -->
@extends('layouts.main')

@section('title', 'Nft-Detail Page')

@section('content')

@include('includes.navbar5')

<!-- Start Hero -->
<section class="relative table w-full md:pb-24 pb-16 mt-28">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-6 md:col-span-5">
                <div class="sticky top-20">
                    <img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/nft/items/item-detail-1.jpg') }}" class="rounded-md shadow-md dark:shadow-gray-800" alt="">
                </div>
            </div><!--end col-->

            <div class="lg:col-span-6 md:col-span-7">
                <div class="">
                    <h5 class="lg:text-4xl lg:leading-relaxed text-2xl font-semibold">
                        @if(!empty($item['title']))
                            {{ $item['title'] }}
                        @else
                            Wolf with Skull <span class="bg-gradient-to-r from-red-600 to-indigo-600 text-transparent bg-clip-text">Orange <br> Illustration</span> T-shirt Tattoo
                        @endif
                    </h5>

                    <div class="grid md:grid-cols-2 grid-cols-1 mt-6">
                        <div>
                            <h6 class="text-lg font-semibold">Current Bid:</h6>
                            <h6 class="text-2xl font-semibold mt-2">
                                @if(!empty($item['ETH']))
                                    {{ $item['ETH'] }}
                                @else
                                    4.85 ETH
                                @endif
                            </h6>
                            <h6 class="text-slate-400 mt-2">$450.48USD</h6>
                        </div>

                        <div>
                            <h6 class="text-lg font-semibold">Auction Ending In:</h6>
                            <span id="auction-item-1" class="text-2xl font-semibold mt-2"></span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="javascript:void(0)" onclick="NftBid.showModal()" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2"><i class="mdi mdi-gavel fs-5 me-2"></i> Place a Bid</a>
                        <a href="javascript:void(0)" onclick="NftBuynow.showModal()" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="mdi mdi-cart fs-5 me-2"></i> Buy Now</a>
                    </div>

                    <div class="grid grid-cols-1 mt-8">

                        <!-- includes/Landings/nft-detail/tab1.blade.php -->
                        @include('includes.Landings.nft-detail.tab1')

                        <div id="StarterContent" class="mt-6">
                            <div class="" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                                <div class="grid grid-cols-1">
                                    <p class="text-slate-400 mb-4">Hey guys! New exploration about NFT Marketplace Web Design, this time I'm inspired by one of my favorite NFT website called Superex (with crypto payment)! What do you think?</p>
                                    <p class="text-slate-400 mb-4">What does it mean? Biomechanics is the study of the structure, function and motion of the mechanical aspects of biological systems, at any level from whole organisms to organs, cells and cell organelles, using the methods of mechanics. Biomechanics is a branch of biophysics.</p>
                                    <h6 class="text-xl font-semibold">Owner</h6>
    
                                    <div class="flex items-center mt-3">
                                        <img src="{{ asset('assets/images/client/08.jpg') }}" class="size-16 rounded-full shadow-md dark:shadow-gray-800" alt="">
        
                                        <div class="ms-3">
                                            <h6 class="text-lg font-semibold"><a href="" class="hover:text-indigo-600 duration-500 ease-in-out">PandaOne</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="hidden" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                                <div class="grid grid-cols-1">

                                    <!-- includes/Landings/nft-detail/bids.blade.php -->
                                    @include('includes.Landings.nft-detail.bids')

                                </div>
                            </div>
    
                            <div class="hidden" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                                <div class="grid grid-cols-1">
                                    <div class="rounded-md shadow-sm dark:shadow-gray-800 p-6">
                                        <div class="flex items-center">
                                            <div class="relative">
                                                <img src="{{ asset('assets/images/nft/items/1.jpg') }}" class="size-20 rounded-md shadow-md dark:shadow-gray-800" alt="">

                                                <div class="absolute top-0 start-0 translate-middle px-1 rounded-md shadow-md bg-white">
                                                    <i class="mdi mdi-account-check mdi-18px text-green-600"></i>
                                                </div>
                                            </div>
                                                
                                            <span class="content ms-3">
                                                <a href="" class="hover:text-indigo-600 text-lg block">Digital Art Collection</a>
                                                <span class="text-slate-400 block mt-1">Started Following <a href="" class="link font-semibold">@Panda</a></span>
                                                
                                                <span class="text-slate-400 block mt-1">1 hours ago</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Related Auction Items</h3>

            <p class="text-slate-400 max-w-xl mx-auto">We are a huge marketplace dedicated to connecting great artists of all Techwind with their fans and unique token collectors!</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/nft-detail/bid2.blade.php -->
            @include('includes.Landings.nft-detail.bid2')

        </div>
    </div>
</section><!--end end section-->
<!-- End -->

<!-- Start Modal -->
<dialog id="NftBid" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
    <div class="relative h-auto md:w-[480px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-800">
            <h3 class="font-bold text-lg">Place a Bid</h3>
            <form method="dialog">
                <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
            </form>
        </div>
        <div class="p-6">
            <form class="text-start">
                <div class="grid grid-cols-1">
                    <div class="mb-4">
                        <label class="font-semibold" for="number">Your Bid Price:</label>
                        <input name="etherium" id="number" type="number" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-3" placeholder="00.00 ETH">
                    </div>

                    <div class="mb-4">
                        <label class="font-semibold" for="number2">Enter Your QTY:</label>
                        <input name="quantity" id="number2" type="number" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-3" placeholder="0">
                        <span class="text-slate-400 text-sm"><span class="text-slate-900 dark:text-white mt-1">Note:</span> Max. Qty 5</span>
                    </div>
                </div>
            </form>

            <div class="pt-4 border-t border-gray-200 dark:border-gray-800">
                <div class="flex justify-between">
                    <p class="font-semibold text-sm"> You must bid at least:</p>
                    <p class="text-sm text-indigo-600 font-semibold"> 1.22 ETH </p>
                </div>
                <div class="flex justify-between mt-1">
                    <p class="font-semibold text-sm"> Service free:</p>
                    <p class="text-sm text-indigo-600 font-semibold"> 0.05 ETH </p>
                </div>
                <div class="flex justify-between mt-1">
                    <p class="font-semibold text-sm"> Total bid amount:</p>
                    <p class="text-sm text-indigo-600 font-semibold"> 1.27 ETH </p>
                </div>
            </div>

            <div class="mt-4">
                <a href="javascript:void(0)" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white w-full"><i class="mdi mdi-gavel"></i> Place a Bid</a>
            </div>
        </div>
    </div>
</dialog>

<dialog id="NftBuynow" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
    <div class="relative h-auto md:w-[480px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-800">
            <h3 class="font-bold text-lg">Checkout</h3>
            <form method="dialog">
                <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
            </form>
        </div>
        <div class="p-6">
            <form class="text-start">
                <div class="grid grid-cols-1">
                    <div class="mb-4">
                        <label class="font-semibold" for="number3">Your Price:</label>
                        <input name="etherium" id="number3" type="number" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-3" placeholder="00.00 ETH">
                    </div>
                </div>
            </form>

            <div class="pt-4 border-t border-gray-200 dark:border-gray-800">
                <div class="flex justify-between">
                    <p class="font-semibold text-sm"> You must bid at least:</p>
                    <p class="text-sm text-indigo-600 font-semibold"> 1.22 ETH </p>
                </div>
                <div class="flex justify-between mt-1">
                    <p class="font-semibold text-sm"> Service free:</p>
                    <p class="text-sm text-indigo-600 font-semibold"> 0.05 ETH </p>
                </div>
                <div class="flex justify-between mt-1">
                    <p class="font-semibold text-sm"> Total bid amount:</p>
                    <p class="text-sm text-indigo-600 font-semibold"> 1.27 ETH </p>
                </div>
            </div>

            <div class="flex items-center p-4 bg-red-600/10 text-red-600 mt-4 rounded-lg">
                <i class="uil uil-exclamation-octagon text-3xl"></i>

                <div class="ms-2">
                    <span class="block font-semibold">This creator is not verified</span>
                    <span class="block">Purchase this item at your own risk</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="javascript:void(0)" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white w-full"><i class="mdi mdi-lightning-bolt"></i> Buy Now</a>
            </div>
        </div>
    </div>
</dialog>
<!-- End Modal -->

@include('includes.footer')

@endsection