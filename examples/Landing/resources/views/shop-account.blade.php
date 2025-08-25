<!-- resources/views/shop-account.blade.php -->
@extends('layouts.main')

@section('title', 'Shop-Account Page')

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
            <h3 class="text-3xl leading-normal font-semibold">My Account</h3>
        </div><!--end grid-->

        <div class="relative mt-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ url('/index-shop') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold text-indigo-600" aria-current="page">My Account</li>
            </ul>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-3 md:col-span-5">
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/client/05.jpg') }}" class="size-16 rounded-full shadow-sm dark:shadow-gray-800" alt="">
                    <div class="ms-2">
                        <p class="font-semibold text-slate-400">Hello,</p>
                        <h5 class="text-lg font-semibold">Cally Joseph</h5>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-9 md:col-span-7">
                <p class="text-slate-400 max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div><!--end col-->

            <div class="lg:col-span-3 md:col-span-5">
                <div class="sticky top-20">

                    <!-- includes/Landings/shop-account/account.blade.php -->
                    @include('includes.Landings.shop-account.account')

                </div>
            </div><!--end col-->

            <div class="lg:col-span-9 md:col-span-7">
                <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">
                    <div class="" id="dashboard" role="tabpanel" aria-labelledby="profile-tab">
                        <p class="text-slate-400 font-semibold">Hello <span class="text-slate-900 dark:text-white">cally_joseph</span> (not <span class="text-slate-900 dark:text-white">cally_joseph</span>? <a href="javascript:void(0)" class="text-red-600">Log out</a>)</p>

                        <p class="text-slate-400 font-semibold mt-4">From your account dashboard you can view your <a href="javascript:void(0)" class="text-red-600">recent orders</a>, manage your <a href="javascript:void(0)" class="text-red-600">shipping and billing addresses</a>, and <a href="javascript:void(0)" class="text-red-600">edit your password and account details</a>.</p>
                    </div>

                    <div class="hidden" id="order" role="tabpanel" aria-labelledby="order-tab">
                        <div class="relative overflow-x-auto shadow-sm dark:shadow-gray-800 rounded-md">
                            <table class="w-full text-start text-slate-500 dark:text-slate-400">
                                <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                                    <tr class="text-start">
                                        <th scope="col" class="px-2 py-3 text-start">Order no.</th>
                                        <th scope="col" class="px-2 py-3 text-start">Date</th>
                                        <th scope="col" class="px-2 py-3 text-start">Status</th>
                                        <th scope="col" class="px-2 py-3 text-start">Total</th>
                                        <th scope="col" class="px-2 py-3 text-start">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- includes/Landings/shop-account/orders.blade.php -->
                                    @include('includes.Landings.shop-account.orders')

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="hidden" id="download" role="tabpanel" aria-labelledby="download-tab">
                        <div class="relative overflow-x-auto shadow-sm dark:shadow-gray-800 rounded-md">
                            <table class="w-full text-start text-slate-500 dark:text-slate-400">
                                <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                                    <tr class="text-start">
                                        <th scope="col" class="px-2 py-3 text-start min-w-[160px]">Product Name</th>
                                        <th scope="col" class="px-2 py-3 text-start min-w-[360px]">Description</th>
                                        <th scope="col" class="px-2 py-3 text-start min-w-[160px]">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white dark:bg-slate-900 text-start">
                                        <th class="px-2 py-3 text-start" scope="row">Quick heal</th>
                                        <td class="px-2 py-3 text-start">It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody.</td>
                                        <td class="px-2 py-3 text-start text-green-600">Downloaded</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="hidden" id="address" role="tabpanel" aria-labelledby="address-tab">
                        <h6 class="text-slate-400 mb-0">The following addresses will be used on the checkout page by default.</h6>
                        <div class="md:flex mt-6">
                            <div class="md:w-1/2 md:px-3">
                                <div class="flex items-center mb-4 justify-between">
                                    <h5 class="text-xl font-semibold">Billing Address:</h5>
                                    <a href="#" class="text-indigo-600 text-lg"><i class="uil uil-edit align-middle"></i></a>
                                </div>
                                <div class="pt-4 border-t border-gray-100 dark:border-gray-800">
                                    <p class="text-lg font-semibold mb-2">Cally Joseph</p>

                                    <ul class="list-none">
                                        <li class="flex">
                                            <i class="uil uil-map-marker text-lg me-2"></i>
                                            <p class="text-slate-400">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>
                                        </li>

                                        <li class="flex mt-1">
                                            <i class="uil uil-phone text-lg me-2"></i>
                                            <p class="text-slate-400">+123 897 5468</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="md:w-1/2 md:px-3 mt-[30] md:mt-0">
                                <div class="flex items-center mb-4 justify-between">
                                    <h5 class="text-xl font-semibold">Shipping Address:</h5>
                                    <a href="#" class="text-indigo-600 text-lg"><i class="uil uil-edit align-middle"></i></a>
                                </div>
                                <div class="pt-4 border-t border-gray-100 dark:border-gray-800">
                                    <p class="text-lg font-semibold mb-2">Cally Joseph</p>

                                    <ul class="list-none">
                                        <li class="flex">
                                            <i class="uil uil-map-marker text-lg me-2"></i>
                                            <p class="text-slate-400">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>
                                        </li>

                                        <li class="flex mt-1">
                                            <i class="uil uil-phone text-lg me-2"></i>
                                            <p class="text-slate-400">+123 897 5468</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden" id="accountdetail" role="tabpanel" aria-labelledby="accountdetail-tab">
                        <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                        <form>
                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                <div>
                                    <label class="form-label font-medium">First Name : <span class="text-red-600">*</span></label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                        <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="First Name:" id="firstname" name="name" required="">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label font-medium">Last Name : <span class="text-red-600">*</span></label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="user-check" class="size-4 absolute top-3 start-4"></i>
                                        <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Last Name:" id="lastname" name="name" required="">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                        <input type="email" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email" name="email" required="">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label font-medium">Occupation : </label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="bookmark" class="size-4 absolute top-3 start-4"></i>
                                        <input name="name" id="occupation" type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Occupation :">
                                    </div>
                                </div>
                            </div><!--end grid-->

                            <div class="grid grid-cols-1">
                                <div class="mt-5">
                                    <label class="form-label font-medium">Description : </label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                        <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                                    </div>
                                </div>
                            </div><!--end row-->

                            <input type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5" value="Save Changes">
                        </form><!--end form-->

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-6">
                            <div>
                                <h5 class="text-lg font-semibold mb-4">Contact Info :</h5>

                                <form>
                                    <div class="grid grid-cols-1 gap-5">
                                        <div>
                                            <label class="form-label font-medium">Phone No. :</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="phone" class="size-4 absolute top-3 start-4"></i>
                                                <input name="number" id="number" type="number" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Phone :">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">Website :</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="globe" class="size-4 absolute top-3 start-4"></i>
                                                <input name="url" id="url" type="url" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Url :">
                                            </div>
                                        </div>
                                    </div><!--end grid-->

                                    <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Add</button>
                                </form>
                            </div><!--end col-->
                            
                            <div> 
                                <h5 class="text-lg font-semibold mb-4">Change password :</h5>
                                <form>
                                    <div class="grid grid-cols-1 gap-5">
                                        <div>
                                            <label class="form-label font-medium">Old password :</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                <input type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Old password" required="">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">New password :</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                <input type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="New password" required="">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">Re-type New password :</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                <input type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Re-type New password" required="">
                                            </div>
                                        </div>
                                    </div><!--end grid-->

                                    <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Save password</button>
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer8')

@endsection