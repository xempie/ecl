<!-- resources/views/checkout.blade.php -->
@extends('layouts.main')

@section('title', 'Checkout Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Checkout</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/shop') }}">Shop</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Checkout</li>
            </ul>
        </div>

        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
            <div class="lg:col-span-8">
                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <h3 class="text-xl leading-normal font-semibold">Billing address</h3>

                    <form>
                        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-5">
                            <div class="lg:col-span-6">
                                <label class="form-label font-semibold">First Name : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="First Name:" id="firstname" name="name" required="">
                            </div>

                            <div class="lg:col-span-6">
                                <label class="form-label font-semibold">Last Name : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Last Name:" id="lastname" name="name" required="">
                            </div>

                            <div class="lg:col-span-6">
                                <label class="form-label font-semibold">Username</label>
                                <div class="relative mt-2">
                                    <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="basic-addon1"><i class="uil uil-at"></i></span>
                                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Username" required>
                                </div>
                            </div>

                            <div class="lg:col-span-6">
                                <label class="form-label font-semibold">Your Email : <span class="text-red-600">*</span></label>
                                <input type="email" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Email" name="email" required="">
                            </div>

                            <div class="lg:col-span-12">
                                <label class="form-label font-semibold">Address : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Address:" id="address" name="name" required="">
                            </div>

                            <div class="lg:col-span-12">
                                <label class="form-label font-semibold">Address 2 : </label>
                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Address:" id="address" name="name" required="">
                            </div>

                            <div class="lg:col-span-4">
                                <label class="font-semibold">Country:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option value="USA">USA</option>
                                    <option value="CAD">Canada</option>
                                    <option value="CHINA">China</option>
                                </select>
                            </div>

                            <div class="lg:col-span-4">
                                <label class="font-semibold">State:</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option value="CAL">California</option>
                                    <option value="TEX">Texas</option>
                                    <option value="FLOR">Florida</option>
                                </select>
                            </div>

                            <div class="lg:col-span-4">
                                <label class="form-label font-semibold">Zip Code : <span class="text-red-600">*</span></label>
                                <input type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Zip:" id="zipcode" name="number" required="">
                            </div>

                            <div class="lg:col-span-12">
                                <div class="flex items-center w-full mb-0">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="sameaddress">
                                    <label class="form-check-label text-slate-400" for="sameaddress">Shipping address is the same as my billing address</label>
                                </div>

                                <div class="flex items-center w-full mb-0">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="savenexttime">
                                    <label class="form-check-label text-slate-400" for="savenexttime">Save this information for next time</label>
                                </div>
                            </div>
                        </div>
                    </form>

                    <h3 class="text-xl leading-normal font-semibold mt-6">Payment</h3>

                    <form action="">
                        <form>
                            <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-5">
                                <div class="lg:col-span-12">
                                    <div class="block">
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio size-4 appearance-none rounded-full border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1" checked>
                                                <span class="text-slate-400">Credit card</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="block mt-2">
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio size-4 appearance-none rounded-full border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                                                <span class="text-slate-400">Debit Card</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="block mt-2">
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio size-4 appearance-none rounded-full border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                                                <span class="text-slate-400">PayPal</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-semibold">Account Holder Name : <span class="text-red-600">*</span></label>
                                    <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Name:" id="accountname" name="name" required="">
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="form-label font-semibold">Credit card number : <span class="text-red-600">*</span></label>
                                    <input type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="**** **** **** ****" id="cardnumber" name="number" required="">
                                </div>

                                <div class="lg:col-span-3">
                                    <label class="form-label font-semibold">Expiration : <span class="text-red-600">*</span></label>
                                    <input type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="" id="expiration" name="number" required="">
                                </div>

                                <div class="lg:col-span-3">
                                    <label class="form-label font-semibold">CVV : <span class="text-red-600">*</span></label>
                                    <input type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="" id="cvv" name="number" required="">
                                </div>
                            </div>
                        </form>
                    </form>
                    <div class="mt-4">
                        <input type="submit" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Continue to checkout">
                    </div>
                </div>

            </div><!--end col-->

            <div class="lg:col-span-4">
                <div class="p-6 rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="flex justify-between items-center">
                        <h5 class="text-lg font-semibold">Your Cart</h5>

                        <a href="javascript:void(0)" class="bg-indigo-600 flex justify-center items-center text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full h-5">3</a>
                    </div>

                    <div class="mt-4 rounded-md shadow-sm dark:shadow-gray-700">
                        <div class="p-3 flex justify-between items-center">
                            <div>
                                <h5 class="font-semibold">Product Name</h5>
                                <p class="text-sm text-slate-400">Brief description</p>
                            </div>

                            <p class="text-slate-400 font-semibold">$ 12</p>
                        </div>
                        <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800">
                            <div>
                                <h5 class="font-semibold">Second product</h5>
                                <p class="text-sm text-slate-400">Brief description</p>
                            </div>

                            <p class="text-slate-400 font-semibold">$ 18</p>
                        </div>
                        <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800">
                            <div>
                                <h5 class="font-semibold">Third item</h5>
                                <p class="text-sm text-slate-400">Brief description</p>
                            </div>

                            <p class="text-slate-400 font-semibold">$ 20</p>
                        </div>
                        <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-slate-800 text-green-600">
                            <div>
                                <h5 class="font-semibold">Promo code</h5>
                                <p class="text-sm text-green-600">EXAMPLECODE</p>
                            </div>

                            <p class="text-red-600 font-semibold">-$ 10</p>
                        </div>
                        <div class="p-3 flex justify-between items-center border border-gray-100 dark:border-gray-800">
                            <div>
                                <h5 class="font-semibold">Total (USD)</h5>
                            </div>

                            <p class="font-semibold">$ 30</p>
                        </div>
                    </div>

                    <div class="subcribe-form mt-6">
                        <form class="relative max-w-xl">
                            <input type="email" id="subcribe" name="email" class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700" placeholder="Promo code">
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Redeem</button>
                        </form><!--end form-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection