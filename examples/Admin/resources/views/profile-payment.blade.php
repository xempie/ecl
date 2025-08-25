<!-- resources/views/profile-payment.blade.php -->
@extends('layouts.main')

@section('title', 'Profile-Payment Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <div class="grid grid-cols-1">
            <div class="profile-banner relative text-transparent rounded-md shadow-sm dark:shadow-gray-700 overflow-hidden">
                <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                <div class="relative shrink-0">
                    <img src="{{ asset('assets/images/blog/bg.jpg') }}" class="h-80 w-full object-cover" id="profile-banner" alt="">
                    <div class="absolute inset-0 bg-black/70"></div>
                    <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-12 grid-cols-1">
            <div class="xl:col-span-3 lg:col-span-4 md:col-span-4 mx-6">
                <div class="p-6 relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 -mt-48">
                    <div class="profile-pic text-center mb-5">
                        <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                        <div>
                            <div class="relative size-24 mx-auto">
                                <img src="{{ asset('assets/images/client/05.jpg') }}" class="rounded-full shadow-sm dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                            </div>

                            <div class="mt-4">
                                <h5 class="text-lg font-semibold">Cristina Murfy</h5>
                                <p class="text-slate-400">cristina@hotmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-100 dark:border-gray-700">
                        <ul class="list-none sidebar-nav mb-0 mt-3" id="navmenu-nav">
                            
                            <!-- includes/User-Profile/profile/navmenu.blade.php -->
                            @include('includes.User-Profile.profile.navmenu')

                        </ul>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                <div class="grid grid-cols-1 gap-6">
                    <div class="relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 md:flex justify-between items-center border-b border-gray-100 dark:border-gray-700">
                            <div class="mb-4 md:mb-0">
                                <h5 class="text-xl font-semibold">Current Plan</h5>
                            </div>
                            <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Switch to Annual Plan</a>
                        </div>

                        <div class="p-6">
                            <h5 class="text-2xl font-bold">$18/Monthly</h5>
                            <p class="text-slate-400 mt-2">Your next monthly charge of $18 will be applied to your primary payment method on July 20, 2025.</p>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <h5 class="text-xl font-semibold">Payment Methods</h5>
                            <p class="text-slate-400 mt-2">Primary payment method is used by default</p>
                        </div>

                        <div class="px-6">
                            <ul>

                                <!-- includes/User-Profile/profile-payment/payment.blade.php -->
                                @include('includes.User-Profile.profile-payment.payment')

                                <li class="py-6 border-t border-gray-100 dark:border-gray-700">
                                    <a href="#!" onclick="paymentMethod.showModal()" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Add Payment Method</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

<!-- Start Modal -->
<dialog id="paymentMethod" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
    <div class="relative h-auto md:w-[480px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-700">
            <h3 class="font-bold text-lg">Add Payment Method</h3>
            <form method="dialog">
                <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
            </form>
        </div>
        <div class="p-6 text-center">
            <form>
                <div class="grid grid-cols-1">
                    <div class="lg:col-span-6 mb-5">
                        <div class="text-start">
                            <label for="name" class="font-semibold">Your Name :</label>
                            <input name="name" id="name" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" required placeholder="Name :">
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-12 lg:gap-6">
                    <div class="lg:col-span-6 mb-5">
                        <div class="text-start">
                            <label for="ex_month" class="form-label font-medium">Month :</label>
                            <select id="ex_month" class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                <option>Jan</option>
                                <option>Feb</option>
                                <option>Mar</option>
                                <option>Apr</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>Aug</option>
                                <option>Sep</option>
                                <option>Oct</option>
                                <option>Nov</option>
                                <option>Dec</option>
                            </select>
                        </div>
                    </div>

                    <div class="lg:col-span-6 mb-5">
                        <div class="text-start">
                            <label for="ex_year" class="form-label font-medium">Year :</label>
                            <select id="ex_year" class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-6 mb-5">
                        <div class="text-start">
                            <label for="name" class="font-semibold">Card no. :</label>
                            <input name="number" id="card_number" type="number" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" required placeholder="number :">
                        </div>
                    </div>

                    <div class="lg:col-span-6 mb-5">
                        <div class="text-start">
                            <label for="name" class="font-semibold">CVV :</label>
                            <input name="number" id="cvv_number" type="number" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" required placeholder="number :">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="mb-5">
                        <div class="text-start">
                            <label for="card_names" class="form-label font-medium">Cards :</label>
                            <select id="card_names" class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                <option>Visa</option>
                                <option>Ame. Express</option>
                                <option>Master</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" id="submit" name="send" class="py-2 px-5 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Add Card</button>
            </form>
        </div>
    </div>
</dialog>
<!-- End Modal -->

@endsection