<!-- resources/views/user-payment.blade.php -->
@extends('layouts.main')

@section('title', 'User-Payment Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative lg:pb-24 pb-16">
    <div class="container-fluid relative">
        <div class="profile-banner relative text-transparent">
            <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)" />
            <div class="relative shrink-0">
                <img src="{{ asset('assets/images/blog/bg.jpg') }}" class="h-80 w-full object-cover" id="profile-banner" alt="">
                <div class="absolute inset-0 bg-slate-900/70"></div>
                <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
            </div>
        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="md:flex">
            <div class="lg:w-1/4 md:w-1/3 md:px-3">
                <div class="relative md:-mt-48 -mt-32">
                    <div class="p-6 rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900">
                        <div class="profile-pic text-center mb-5">
                            <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                            <div>
                                <div class="relative size-28 mx-auto">
                                    <img src="{{ asset('assets/images/client/05.jpg') }}" class="rounded-full shadow-sm dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-lg font-semibold">Jenny Jimenez</h5>
                                    <p class="text-slate-400">jennyhot@hotmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 dark:border-gray-800">
                            
                            <!-- includes/Pages/Accounts/user-profile/sidebar-nav.blade.php -->
                            @include('includes.Pages.Accounts.user-profile.sidebar-nav')

                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-[30px] md:mt-0">
                <div class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900">
                    <div class="p-6 md:flex justify-between items-center border-b border-gray-100 dark:border-gray-800">
                        <div class="mb-4 md:mb-0">
                            <h5 class="text-xl font-semibold">Current Plan</h5>
                        </div>
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Switch to Annual Plan</a>
                    </div>

                    <div class="p-6">
                        <h5 class="text-2xl font-bold">$18/Monthly</h5>
                        <p class="text-slate-400 mt-2">Your next monthly charge of $18 will be applied to your primary payment method on July 20, 2022.</p>
                    </div>
                </div>

                <div class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 mt-6">
                    <div class="p-6 border-b border-gray-100 dark:border-gray-800">
                        <h5 class="text-xl font-semibold">Payment Methods</h5>
                        <p class="text-slate-400 mt-2">Primary payment method is used by default</p>
                    </div>

                    <div class="px-6">
                        <ul>

                            <!-- includes/Pages/Accounts/user-payment/payment-methods.blade.php -->
                            @include('includes.Pages.Accounts.user-payment.payment-methods')

                            <li class="py-6 border-t border-gray-100 dark:border-gray-800">
                                <a href="#!" onclick="paymentMethod.showModal()" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Add Payment Method</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start Modal -->
<dialog id="paymentMethod" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
    <div class="relative h-auto md:w-[480px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-800">
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

@include('includes.footer')

@endsection