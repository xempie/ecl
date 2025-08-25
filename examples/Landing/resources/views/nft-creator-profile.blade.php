<!-- resources/views/nft-creator-profile.blade.php -->
@extends('layouts.main')

@section('title', 'Nft-Creator-Profile Page')

@section('content')

@include('includes.navbar5')

<!-- Start Hero -->
<section class="relative md:pb-24 pb-16 lg:mt-24 mt-[74px]">
    <div class="container relative lg:!px-3 !px-0">
        <div class="group profile-banner relative overflow-hidden text-transparent lg:rounded-xl shadow-sm dark:shadow-gray-700">
            <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)" />
            <div class="relative shrink-0">
                <img src="{{ asset('assets/images/blog/slide02.jpg') }}" class="h-80 w-full object-cover" id="profile-banner" alt="">
                <div class="absolute inset-0 bg-slate/10 group-hover:bg-slate-900/10 duration-500"></div>
                <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
            </div>
        </div>

        <div class="md:flex justify-center">
            <div class="md:w-full">
                <div class="relative -mt-[60px] text-center">
                    <div class="group profile-pic w-[112px] mx-auto">
                        <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                        <div>
                            <div class="relative size-28 mx-auto rounded-full shadow-sm dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800 overflow-hidden">
                                <img src="{{ asset('assets/images/client/05.jpg') }}" class="rounded-full" id="profile-image" alt="">
                                <div class="absolute inset-0 group-hover:bg-slate-900/10 duration-500"></div>
                                <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-semibold">Cristina Murfy <i class="mdi mdi-check-decagram text-emerald-600 align-middle text-lg"></i></h5>
                        <p class="text-slate-400 text-[16px] mt-1">Created by <a href="" class="text-indigo-600 font-semibold">1x5484dcdvcdscds56c4</a></p>

                        <div class="mt-4">
                            <a href="javascript:void(0)" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-plus"></i> Follow me</a>
                            <a href="javascript:void(0)" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-account-plus"></i></a>
                            <a href="{{ url('/nft-creator-profile-edit') }}" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i class="mdi mdi-cog"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end -->
    
    <div class="container relative mt-16">
        <div id="" class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[30px]">

            <!-- includes/Landings/nft-creator-profile/bid1.blade.php -->
            @include('includes.Landings.nft-creator-profile.bid1')

        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                
                <!-- includes/Landings/nft-creator-profile/navigation.blade.php -->
                @include('includes.Landings.nft-creator-profile.navigation')

            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer')

@endsection