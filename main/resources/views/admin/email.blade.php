<!-- resources/views/email.blade.php -->
@extends('layouts.main')

@section('title', 'Email Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Email / Messages</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Emails</li>
            </ul>
        </div>

        <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-2">
            <div class="xl:col-span-2 lg:col-span-3 md:col-span-4">
                <div class="rounded-md shadow-sm dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900">
                    <a href="javascript:void(0)" class="py-2 px-5 inline-flex justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" onclick="composemail.showModal()"><i class="uil uil-plus me-1"></i> Compose</a>
                    <ul class="flex-column mt-3" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">

                        <!-- includes/Apps/email/tabs.blade.php -->
                        @include('includes.Apps.email.tabs')

                    </ul>
                </div>
            </div>

            <div class="xl:col-span-10 lg:col-span-9 md:col-span-8">
                <div id="myTabContent" class="">
                    <div class="" id="index" role="tabpanel" aria-labelledby="index-tab">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                            <table class="w-full text-start">
                                <thead class="text-base">
                                    <tr>
                                        <th class="text-start p-4 w-10 min-w-[30px] max-w-[30px]">
                                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="allcheck">
                                        </th>
                                        <th class="text-center p-4 w-10 min-w-[30px] max-w-[30px]"></th>
                                        <th class="text-start p-4 w-48 min-w-[200px]">Name</th>
                                        <th class="text-start p-4 w-auto min-w-[300px]">Subject</th>
                                        <th class="text-end p-4 w-48 min-w-[200px]">Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- includes/Apps/email/messages.blade.php -->
                                    @include('includes.Apps.email.messages')

                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <a href="#" class="size-8 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 border-gray-100 dark:border-gray-700 text-slate-400 hover:text-slate-900 dark:hover:text-white rounded-full"><i class="mdi mdi-arrow-left"></i></a>
                                <a href="#" class="size-8 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 border-gray-100 dark:border-gray-700 text-slate-400 hover:text-slate-900 dark:hover:text-white rounded-full"><i class="mdi mdi-arrow-right"></i></a>
                            </div>

                            <span class="text-slate-400">Showing 1 - 10 out of 45</span>
                        </div>
                    </div>
                    <div class="hidden" id="stared" role="tabpanel" aria-labelledby="stared-tab">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                            <table class="w-full text-start">
                                <thead class="text-base">
                                    <tr>
                                        <th class="text-start p-4 w-10 min-w-[30px] max-w-[30px]">
                                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="allcheck">
                                        </th>
                                        <th class="text-center p-4 w-10 min-w-[30px] max-w-[30px]"></th>
                                        <th class="text-start p-4 w-48 min-w-[200px]">Name</th>
                                        <th class="text-start p-4 w-auto min-w-[200px]">Subject</th>
                                        <th class="text-end p-4 w-48 min-w-[200px]">Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- includes/Apps/email/starred.blade.php -->
                                    @include('includes.Apps.email.starred')

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="hidden" id="spam" role="tabpanel" aria-labelledby="spam-tab">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md p-6">
                            <span class="text-slate-400">Hooray, no spam here!</span>
                        </div>
                    </div>
                    <div class="hidden" id="sent" role="tabpanel" aria-labelledby="sent-tab">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                            <table class="w-full text-start">
                                <thead class="text-base">
                                    <tr>
                                        <th class="text-start p-4 w-10 min-w-[30px] max-w-[30px]">
                                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="allcheck">
                                        </th>
                                        <th class="text-center p-4 w-10 min-w-[30px] max-w-[30px]"></th>
                                        <th class="text-start p-4 w-48 min-w-[200px]">Name</th>
                                        <th class="text-start p-4 w-auto min-w-[200px]">Subject</th>
                                        <th class="text-end p-4 w-48 min-w-[200px]">Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                            <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" value="" id="firstcheck">
                                        </th>
                                        <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                            <a href=""><i class="mdi mdi-star-outline text-[18px] text-slate-400 align-middle"></i></a>
                                        </td>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                            <a href="javascript:void(0)" class="font-semibold hover:text-indigo-600" onclick="emailpreview.showModal()">Calvin Carlo</a>
                                        </td>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                            <span class="text-slate-400">Techwind Customization</span>
                                        </td>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
                                            <span class="text-slate-400">03:05PM</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="hidden " id="draft" role="tabpanel" aria-labelledby="draft-tab">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md p-6">
                            <span class="text-slate-400">You don't have any saved drafts. Saving a draft allows you to keep a message you aren't ready to send yet.</span>
                        </div>
                    </div>
                    <div class="hidden " id="delete" role="tabpanel" aria-labelledby="delete-tab">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md p-6">
                            <span class="text-slate-400">No conversations in Trash.</span>
                        </div>
                    </div>
                    <div class="hidden " id="note" role="tabpanel" aria-labelledby="note-tab">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md p-6">
                            <span class="text-slate-400">No notes in Notes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

<!-- Start Modal -->
<dialog id="composemail" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
    <div class="relative h-auto md:w-[720px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-700">
            <h3 class="font-bold text-lg">Compose</h3>
            <form method="dialog">
                <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
            </form>
        </div>
        <div class="p-6 text-center">
            <form>
                <div class="grid md:grid-cols-12 grid-cols-1 gap-4">
                    <div class="md:col-span-12">
                        <div class="form-icon relative">
                            <input name="email" id="toemail" type="email" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="To">
                        </div>
                    </div>

                    <div class="md:col-span-6">
                        <div class="form-icon relative">
                            <input name="email" id="ccemail" type="email" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Cc">
                        </div>
                    </div>

                    <div class="md:col-span-6">
                        <div class="form-icon relative">
                            <input name="email" id="bccemail" type="email" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Bcc">
                        </div>
                    </div>

                    <div class="md:col-span-12">
                        <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                    </div>

                    <div class="md:col-span-12">
                        <button type="submit" id="submit" name="send" class="py-2 px-5 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Send Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</dialog>
<!-- End Modal -->

<!-- Start Modal -->
<dialog id="emailpreview" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
    <div class="relative h-auto md:w-[720px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-700">
            <h3 class="font-bold text-lg">Techwind Customization</h3>
            <form method="dialog">
                <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
            </form>
        </div>
        <div class="p-4 border-b border-gray-100 dark:border-gray-800">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/client/05.jpg') }}" class="size-14 rounded-full shadow-sm dark:shadow-gray-700" alt="">
                    <div class="ms-2">
                        <span class="block font-semibold">Cristina Julia</span>
                        <div class="dropdown relative">
                            <button data-dropdown-toggle="dropdown" class="dropdown-toggle text-slate-400" type="button">
                                cristinajulia@xyz.mail <i class="mdi mdi-menu-down text-slate-900 dark:text-white"></i>
                            </button>
                            <div class="dropdown-menu absolute start-0 m-0 mt-1 z-10 w-[250px] rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                <ul class="list-none py-2 text-start">
                                    <li class="mx-2 text-slate-400 text-sm flex">From: <span class="text-slate-900 dark:text-white ms-1">cristinajulia@xyz.mail</span></li>
                                    <li class="mx-2 text-slate-400 text-sm flex">To: <span class="text-slate-900 dark:text-white ms-1">support@shreethemes.in</span></li>
                                    <li class="mx-2 text-slate-400 text-sm flex">Date: <span class="text-slate-900 dark:text-white ms-1">3:45pm 16th Aug, 2025</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <a href="#" class="size-8 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 border-gray-100 dark:border-gray-700 text-slate-400 hover:text-slate-900 dark:hover:text-white rounded-full" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply"><i class="mdi mdi-arrow-left-top"></i></a>
                    <a href="#" class="size-8 inline-flex items-center justify-center font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 border-gray-100 dark:border-gray-700 text-slate-400 hover:text-slate-900 dark:hover:text-white rounded-full" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><i class="mdi mdi-arrow-right-top"></i></a>
                </div>
            </div>
        </div>

        <div class="p-4 border-b border-gray-100 dark:border-gray-800">
            <p class="text-slate-400 mb-0">Hello,<br><br> If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area). <br><br>Thank you</p>
        </div>

        <div class="p-4">
            <p class="text-slate-400 mb-0">Click here to <a href="#!" class="text-indigo-600">Reply</a> or <a href="#!" class="text-indigo-600">Forward</a></p>
        </div> 
    </div>
</dialog>
<!-- End Modal -->

@endsection