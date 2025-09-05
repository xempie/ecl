<!-- resources/views/index-crypto.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Crypto Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Cristina Murfy</h5>
                <h6 class="text-slate-400 font-semibold">My balance: <span class="text-emerald-600">$ 45,578.032</h6>
            </div>

            <div class="">
                <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md" onclick="sentCrypto.showModal()">Sent</a>
                <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md" onclick="requestCrypto.showModal()">Request</a>
            </div>
        </div>

        <div class="grid xl:grid-cols-12 mt-6 gap-6">
            <div class="xl:col-span-8 col-span-12">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-4">
                    <div id="tradingview_123"></div>
                    <script src="https://s3.tradingview.com/tv.js"></script>
                    <script>
                    new TradingView.widget(
                        {
                        "width": "100%",
                        "height": 550,
                        "symbol": "BITSTAMP:BTCUSD",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "Light",
                        "style": "1",
                        "locale": "en",
                        "toolbar_bg": "#000",
                        "enable_publishing": false,
                        "withdateranges": true,
                        "hide_side_toolbar": false,
                        "allow_symbol_change": true,
                        "show_popup_button": true,
                        "popup_width": "1000",
                        "popup_height": "650",
                        "container_id": "tradingview_123"
                        }
                    );
                    </script>
                </div>
            </div>

            <div class="xl:col-span-4 col-span-12">
                <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                    <div class="p-4 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Watchlists</h6>
                        
                        <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-slate-400 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">See More <i class="uil uil-arrow-right"></i></a>
                    </div>
                    <div class="h-[521px]" data-simplebar>
                        <table class="w-full text-start">
                            <thead>
                                <tr>
                                    <th class="px-4 py-5 font-semibold text-start">Name</th>
                                    <th class="px-4 py-5 font-semibold text-center">Last</th>
                                    <th class="px-4 py-5 font-semibold text-center">Chg</th>
                                    <th class="px-4 py-5 font-semibold text-end">Chg%</th>
                                </tr>
                            </thead>

                            <tbody>

                                <!-- includes/Dashboard/index-crypto/watchlists.blade.php -->
                                @include('includes.Dashboard.index-crypto.watchlists')

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid xl:grid-cols-6 md:grid-cols-3 grid-cols-1 mt-6 gap-6">

            <!-- includes/Dashboard/index-crypto/box.blade.php -->
            @include('includes.Dashboard.index-crypto.box')

        </div>

        <div class="grid grid-cols-12 mt-6 gap-6">
            <div class="xl:col-span-6 col-span-12">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-4 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <div>
                            <h6 class="text-lg font-semibold">Transections</h6>
                            <h6 class="text-slate-400 font-semibold">Latest Transections</h6>
                        </div>
                        
                        <div class="position-relative">
                            <select class="form-select form-input w-full py-2 px-2 pe-6 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                <option value="T" selected>Today</option>
                                <option value="W">This Week</option>
                                <option value="M">This Month</option>
                                <option value="Y">This Year</option>
                            </select>
                        </div>
                    </div>

                    <div class="h-[290px]" data-simplebar>
                        <table class="w-full text-start">
                            <thead>
                                <tr class="">
                                    <th class="p-4 font-semibold text-start">Type</th>
                                    <th class="p-4 font-semibold text-center">Assets</th>
                                    <th class="p-4 font-semibold text-center">Date</th>
                                    <th class="p-4 font-semibold text-center">Amount</th>
                                    <th class="p-4 font-semibold text-center">Wallet</th>
                                    <th class="p-4 font-semibold text-end">Status</th>
                                </tr>
                            </thead>

                            <tbody class="border-t border-gray-100 dark:border-gray-800">
                                
                                <!-- includes/Dashboard/index-crypto/transections.blade.php -->
                                @include('includes.Dashboard.index-crypto.transections')

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-3 md:col-span-6 col-span-12">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-4 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <div>
                            <h6 class="text-lg font-semibold">Exchange</h6>
                            <h6 class="text-slate-400 font-semibold">1BTC = <span class="text-emerald-600">$ 27,427.17</h6>
                        </div>
                        
                        <div class="position-relative">
                            <select class="form-select form-input w-full py-2 px-2 pe-6 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                <option value="Y" selected>Market</option>
                                <option value="M">Market</option>
                                <option value="W">Market</option>
                                <option value="T">Market</option>
                            </select>
                        </div>
                    </div>

                    <div class="p-4">
                        <ul class="inline-block w-full mx-auto flex-wrap justify-center text-center p-2 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                            <li role="presentation" class="inline-block w-[47%]">
                                <button class="px-4 py-1 text-sm font-semibold rounded-md w-full hover:text-indigo-600 duration-500" id="tab-one-tab" data-tabs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Buy or Sell</button>
                            </li>
                            <li role="presentation" class="inline-block w-[47%]">
                                <button class="px-4 py-1 text-sm font-semibold rounded-md w-full duration-500" id="tab-two-tab" data-tabs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Calculator</button>
                            </li>
                        </ul>
    
                        <div id="StarterContent" class="mt-4">
                            <div class="" id="tab-one" role="tabpanel" aria-labelledby="tab-one-tab">
                                <form action="">
                                    <div class="grid grid-cols-1 gap-4">
                                        <div class="">
                                            <label class="form-label font-semibold hidden">Username:</label>
                                            <div class="relative">
                                                <span class="absolute top-0.5 start-0.5 h-9 px-2 bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="basic-addon1">Amount</span>

                                                <input type="text" class="form-input ps-[88px] pe-[52px] w-full py-2 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Username" required>

                                                <span class="absolute top-0.5 end-0.5 h-9 px-2 bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="basic-addon1">BTC</span>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="relative rounded overflow-hidden">
                                                <div class="absolute bg-gray-100 dark:bg-slate-800">
                                                    <select class="form-select form-input w-[100px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 outline-none border-0 focus:ring-0">
                                                        <option value="USA">USA</option>
                                                        <option value="CAD">Canada</option>
                                                        <option value="CHINA">China</option>
                                                    </select>
                                                </div>

                                                <input type="number" class="form-input ps-28 w-full py-2 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="$ 25,000" required>

                                                <span class="absolute top-0.5 end-0.5 h-9 px-2 bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="basic-addon1">$ Dollar</span>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="relative">
                                                <span class="absolute top-0.5 start-0.5 h-9 px-2 bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="basic-addon1">Total</span>

                                                <input type="number" class="form-input ps-[88px] pe-[52px] w-full py-2 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="" required>

                                                <span class="absolute top-0.5 end-0.5 h-9 px-2 bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="basic-addon1">$ Dollar</span>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md">Buy Now</a>
                                            <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md">Sell Now</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="hidden" id="tab-two" role="tabpanel" aria-labelledby="tab-two-tab">
                                <crypto-converter-widget shadow-sm symbol live background-color="#1e293b" border-radius="6px" fiat="united-states-dollar" crypto="bitcoin" amount="1" font-family="sans-serif" decimal-places="2"></crypto-converter-widget>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-3 md:col-span-6 col-span-12">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-4 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <div>
                            <h6 class="text-lg font-semibold">Orders</h6>
                            <h6 class="text-slate-400 font-semibold">My Order List</h6>
                        </div>
                        
                        <div class="position-relative">
                            <select class="form-select form-input w-full py-2 px-2 pe-6 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                <option value="T" selected>Today</option>
                                <option value="W">This Week</option>
                                <option value="M">This Month</option>
                                <option value="Y">This Year</option>
                            </select>
                        </div>
                    </div>

                    <div class="p-4 h-[290px]" data-simplebar>

                        <!-- includes/Dashboard/index-crypto/orders1.blade.php -->
                        @include('includes.Dashboard.index-crypto.orders1')

                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

<!-- Start Modal -->
<dialog id="sentCrypto" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
<div class="relative h-auto md:w-[480px] w-300px">
<div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-700">
    <h3 class="font-bold text-lg">Send Coin</h3>
    <form method="dialog">
        <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
    </form>
</div>
<div class="p-6">
    <form action="">
        <div class="grid grid-cols-12 gap-3">
            <div class="col-span-12">
                <label class="font-semibold">Crypto Currency</label>
                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                    <option selected>-- Currency --</option>
                    <option value="BTC">BTC</option>
                    <option value="ETH">ETH</option>
                </select>
            </div>

            <div class="col-span-12">
                <label class="font-semibold">Currency From</label>
                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                    <option selected>-- My wallet --</option>
                    <option value="BTC">BTC</option>
                    <option value="ETH">ETH</option>
                </select>
            </div>

            <div class="col-span-12">
                <label class="form-label font-semibold">To</label>
                <div class="relative mt-2">
                    <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="QUcode"><i class="uil uil-qrcode-scan"></i></span>
                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Can you scan" required>
                </div>
            </div>

            <div class="md:col-span-6 col-span-12">
                <label class="form-label font-semibold">USD</label>
                <div class="relative mt-2">
                    <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="USD"><i class="uil uil-dollar-sign"></i></span>
                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="USD" required>
                </div>
            </div>

            <div class="md:col-span-6 col-span-12">
                <label class="form-label font-semibold">BTC</label>
                <div class="relative mt-2">
                    <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="BTC"><i class="uil uil-bitcoin-circle"></i></span>
                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="BTC" required>
                </div>
            </div>

            <div class="col-span-12">
                <label for="comments" class="font-semibold">Description</label>
                <div class="relative mt-2">
                    <textarea name="comments" id="comments" class="form-input w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Description"></textarea>
                </div>
            </div>

            <div class="col-span-12">
                <h6 class="font-semibold">Network Free</h6>

                <div class="inline-block mt-2">
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio size-4 appearance-none rounded-full border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" checked name="radio-colors" value="1">
                            <span class="text-slate-400">Regular</span>
                        </label>
                    </div>
                </div>

                <div class="inline-block mt-2 ms-2">
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio size-4 appearance-none rounded-full border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                            <span class="text-slate-400">Priority</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="text-end p-4 border-t border-gray-100 dark:border-gray-700">
    <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Continue</a>
</div>
</div>
</dialog>
<!-- End Modal -->

<!-- Start Modal -->
<dialog id="requestCrypto" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
<div class="relative h-auto md:w-[480px] w-300px">
<div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-700">
    <h3 class="font-bold text-lg">Request Coin</h3>
    <form method="dialog">
        <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
    </form>
</div>
<div class="p-6">
    <form action="">
        <div class="grid grid-cols-12 gap-3">
            <div class="col-span-12">
                <label class="font-semibold">Crypto Currency</label>
                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                    <option selected>-- Currency --</option>
                    <option value="BTC">BTC</option>
                    <option value="ETH">ETH</option>
                </select>
            </div>

            <div class="col-span-12">
                <label class="font-semibold">Currency From</label>
                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                    <option selected>-- My wallet --</option>
                    <option value="BTC">BTC</option>
                    <option value="ETH">ETH</option>
                </select>
            </div>

            <div class="col-span-12">
                <label class="form-label font-semibold">Address</label>
                <div class="relative mt-2">
                    <a href="" class="absolute top-0.5 end-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="QUcode"><i class="uil uil-copy"></i></a>
                    <input type="text" class="form-input pe-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" value="c12b001a15f9bd46ef1c6551386c" required>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="text-end p-4 border-t border-gray-100 dark:border-gray-700">
    <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md">Done</a>
</div>
</div>
</dialog>
<!-- End Modal -->

@endsection