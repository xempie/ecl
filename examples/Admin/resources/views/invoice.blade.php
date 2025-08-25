<!-- resources/views/invoice.blade.php -->
@extends('layouts.main')

@section('title', 'Invoice Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Invoice</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Invoice</li>
            </ul>
        </div>

        <div class="container relative mt-6">
            <div class="md:flex justify-center">
                <div class="lg:w-4/5 w-full">
                    <div class="p-6 rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="border-b border-gray-100 dark:border-gray-700 pb-6">
                            <div class="md:flex justify-between">
                                <div>
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" class="block dark:hidden" alt="">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" class="hidden dark:block" alt="">
                                    <div class="flex mt-4">
                                        <i data-feather="link" class="size-4 me-3 mt-1"></i>
                                        <a href="https://1.envato.market/techwind" target="_blank" class="text-indigo-600 dark:text-white font-medium">https://1.envato.market/techwind</a>
                                    </div>
                                </div>

                                <div class="mt-6 md:mt-0 md:w-56">
                                    <h5 class="text-lg font-semibold">Address:</h5>

                                    <ul class="list-none">
                                        <li class="flex mt-3">
                                            <i data-feather="map-pin" class="size-4 me-3 mt-1"></i>
                                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" data-type="iframe" class="lightbox text-slate-400">1419 Riverwood Drive, <br> Redding, CA 96001</a>
                                        </li>
                                        
                                        <li class="flex mt-3">
                                            <i data-feather="mail" class="size-4 me-3 mt-1"></i>
                                            <a href="mailto:contact@example.com" class="text-slate-400">info@techwind.com</a>
                                        </li>
                                        
                                        <li class="flex mt-3">
                                            <i data-feather="phone" class="size-4 me-3 mt-1"></i>
                                            <a href="tel:+152534-468-854" class="text-slate-400">(+12) 1546-456-856</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="md:flex justify-between">
                            <div class="mt-6">
                                <h5 class="text-lg font-semibold">Invoice Details :</h5>

                                <ul class="list-none">
                                    <li class="flex mt-3">
                                        <span class="w-24">Invoice No. :</span>
                                        <span class="text-slate-400">land45845621</span>
                                    </li>
                                    
                                    <li class="flex mt-3">
                                        <span class="w-24">Name :</span>
                                        <span class="text-slate-400">Calvin Carlo</span>
                                    </li>
                                    
                                    <li class="flex mt-3">
                                        <span class="w-24">Address :</span>
                                        <span class="text-slate-400">1962 Pike Street, <br> Diego, CA 92123</span>
                                    </li>
                                    
                                    <li class="flex mt-3">
                                        <span class="w-24">Phone :</span>
                                        <span class="text-slate-400">(+45) 4584-458-695</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-3 md:w-56">
                                <ul class="list-none">
                                    <li class="flex mt-3">
                                        <span class="w-24">Date :</span>
                                        <span class="text-slate-400">15th Oct, 2025</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="relative overflow-x-auto shadow-sm dark:shadow-gray-700 rounded-md mt-6">
                            <table class="w-full text-start text-slate-500 dark:text-slate-400">
                                <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                                    <tr>
                                        <th scope="col" class="text-center px-6 py-3 w-16">
                                            No.
                                        </th>
                                        <th scope="col" class="text-start px-6 py-3">
                                            Items
                                        </th>
                                        <th scope="col" class="text-center px-6 py-3 w-20">
                                            Qty
                                        </th>
                                        <th scope="col" class="text-center px-6 py-3 w-28">
                                            Rate($)
                                        </th>
                                        <th scope="col" class="text-end px-6 py-3 w-20">
                                            Total($)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- includes/Invoice/invoice/invoices.blade.php -->
                                    @include('includes.Invoice.invoice.invoices')

                                </tbody>
                            </table>
                        </div>

                        <div class="w-56 ms-auto p-5">
                            <ul class="list-none">
                                <li class="text-slate-400 flex justify-between">
                                    <span>Subtotal :</span>
                                    <span>$ 520</span>
                                </li>
                                <li class="text-slate-400 flex justify-between mt-2">
                                    <span>Taxes :</span>
                                    <span>$ 20</span>
                                </li>
                                <li class="flex justify-between font-semibold mt-2">
                                    <span>Total :</span>
                                    <span>$ 540</span>
                                </li>
                            </ul>
                        </div>

                        <div class="invoice-footer border-t border-gray-100 dark:border-gray-700 pt-6">
                            <div class="md:flex justify-between">
                                <div>
                                    <div class="text-slate-400 text-center md:text-start">
                                        <h6 class="mb-0">Customer Services : <a href="tel:+152534-468-854" class="text-amber-500">(+12) 1546-456-856</a></h6>
                                    </div>
                                </div>

                                <div class="mt-4 md:mt-0">
                                    <div class="text-slate-400 text-center md:text-end">
                                        <h6 class="mb-0"><a href="page-{{ url('/terms') }}" target="_blank" class="text-indigo-600">Terms & Conditions</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection