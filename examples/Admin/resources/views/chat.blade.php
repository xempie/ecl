<!-- resources/views/chat.blade.php -->
@extends('layouts.main')

@section('title', 'Chat Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Chatbox</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Chatbox</li>
            </ul>
        </div>

        <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-2">
            <div class="xl:col-span-3 lg:col-span-5 md:col-span-5">
                <div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="text-center p-6 border-b border-gray-100 dark:border-gray-800">
                        <img src="{{ asset('assets/images/client/05.jpg') }}" class="size-20 rounded-full shadow-sm dark:shadow-gray-700 mx-auto" alt="">
                        <h5 class="mt-3 font-semibold text-xl mb-0">Cristina Julia</h5>
                        <p class="text-slate-400 mb-0">UI / UX Designer</p>
                    </div>

                    <div class="p-2 max-h-[488px]" data-simplebar>

                        <!-- includes/Apps/chat/chatbox.blade.php -->
                        @include('includes.Apps.chat.chatbox')

                    </div>
                </div>
            </div>

            <div class="xl:col-span-9 lg:col-span-7 md:col-span-7">
                <div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="flex justify-between items-center border-b border-gray-100 dark:border-gray-800 p-4">
                        <div class="flex">
                            <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-11 rounded-full shadow-sm dark:shadow-gray-700" alt="">
                            <div class="overflow-hidden ms-3">
                                <a href="#" class="block font-semibold text-truncate">Calvin Carlo</a>
                                <span class="text-slate-400 flex items-center text-sm"><span class="bg-green-600 text-white text-[10px] font-bold rounded-full size-2 me-1"></span> Online</span>
                            </div>
                        </div>

                        <div class="dropdown relative">
                            <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full"><i class="mdi mdi-dots-vertical"></i></span>
                            </button>
                            <!-- Dropdown menu -->
                            <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                <ul class="py-2 text-start">
                                    <li>
                                        <a href="" class="block font-medium py-1.5 px-4 hover:text-indigo-600"><i class="mdi mdi-account-outline"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a href="" class="block font-medium py-1.5 px-4 hover:text-indigo-600"><i class="mdi mdi-cog-outline"></i> Profile Settings</a>
                                    </li>
                                    <li>
                                        <a href="" class="block font-medium py-1.5 px-4 hover:text-indigo-600"><i class="mdi mdi-trash-can-outline"></i> Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <ul class="p-4 list-none mb-0 max-h-[553px] bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/bg-chat.png') }}');" data-simplebar>
                        <li>
                            <div class="inline-block">
                                <div class="flex mb-3">
                                    <div class="relative">
                                        <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="ms-2 max-w-lg">
                                        <p class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow-sm dark:shadow-gray-700 px-3 py-2 rounded mb-1">Hey Cristina</p>
                                        <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>59 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="text-end">
                            <div class="inline-block">
                                <div class="flex mb-3">
                                    <div class="relative order-2">
                                        <img src="{{ asset('assets/images/client/05.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="me-2 max-w-lg">
                                        <p class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow-sm dark:shadow-gray-700 px-3 py-2 rounded mb-1">Hello Calvin</p>
                                        <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>45 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="text-end">
                            <div class="inline-block">
                                <div class="flex mb-3">
                                    <div class="relative order-2">
                                        <img src="{{ asset('assets/images/client/05.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="me-2 max-w-lg">
                                        <p class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow-sm dark:shadow-gray-700 px-3 py-2 rounded mb-1">How can i help you?</p>
                                        <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>44 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="inline-block">
                                <div class="flex mb-3">
                                    <div class="relative">
                                        <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="ms-2 max-w-lg">
                                        <p class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow-sm dark:shadow-gray-700 px-3 py-2 rounded mb-1">Nice to meet you</p>
                                        <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>42 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="inline-block">
                                <div class="flex mb-3">
                                    <div class="relative">
                                        <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="ms-2 max-w-lg">
                                        <p class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow-sm dark:shadow-gray-700 px-3 py-2 rounded mb-1">Hope you are doing fine?</p>
                                        <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>40 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="text-end">
                            <div class="inline-block">
                                <div class="flex mb-3">
                                    <div class="relative order-2">
                                        <img src="{{ asset('assets/images/client/05.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="me-2 max-w-lg">
                                        <p class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow-sm dark:shadow-gray-700 px-3 py-2 rounded mb-1">I'm good thanks for asking</p>
                                        <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>38 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="inline-block">
                                <div class="flex mb-3">
                                    <div class="relative">
                                        <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="ms-2 max-w-lg">
                                        <p class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow-sm dark:shadow-gray-700 px-3 py-2 rounded mb-1">I am intrested to know more about your prices and services you offer</p>
                                        <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>35 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="text-end">
                            <div class="inline-block">
                                <div class="flex mb-3">
                                    <div class="relative order-2">
                                        <img src="{{ asset('assets/images/client/05.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="me-2 max-w-lg">
                                        <p class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow-sm dark:shadow-gray-700 px-3 py-2 rounded mb-1">Sure please check below link to find more useful information <a href="https://shreethemes.in/techwind/" target="_blank" class="text-indigo-600">https://shreethemes.in/techwind/</a></p>
                                        <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>29 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="inline-block">
                                <div class="flex mb-3">
                                    <div class="relative">
                                        <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="ms-2 max-w-lg">
                                        <p class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow-sm dark:shadow-gray-700 px-3 py-2 rounded mb-1">Thank you 😊</p>
                                        <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>26 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="text-end">
                            <div class="inline-block">
                                <div class="flex mb-3">
                                    <div class="relative order-2">
                                        <img src="{{ asset('assets/images/client/05.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="me-2 max-w-lg">
                                        <p class="bg-white dark:bg-slate-900 text-slate-400 text-sm shadow-sm dark:shadow-gray-700 px-3 py-2 rounded mb-1">Welcome</p>
                                        <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>15 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="inline-block">
                                <div class="flex items-center mb-3">
                                    <div class="relative">
                                        <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-9 min-w-[36px] rounded-full shadow-sm dark:shadow-gray-700" alt="">
                                        <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:size-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                    </div>
                                        
                                    <div class="ms-2 max-w-lg">
                                        <p class="text-slate-400 text-sm rounded mb-1">Frank Williams is typing
                                            <span class="animate-typing ms-1">
                                                <span class="dot inline-block size-1 bg-slate-400 -mr-px opacity-60 rounded-full"></span>
                                                <span class="dot inline-block size-1 bg-slate-400 -mr-px opacity-60 rounded-full"></span>
                                                <span class="dot inline-block size-1 bg-slate-400 -mr-px opacity-60 rounded-full"></span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="p-2 border-t border-gray-100 dark:border-gray-800">
                        <div class="flex ">
                            <input type="text" class="form-input w-full py-2 px-3 h-9 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Enter Message...">

                            <div class="min-w-[125px] text-end">
                                <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="mdi mdi-send"></i></a>
                                <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="mdi mdi-emoticon-happy-outline"></i></a>
                                <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="mdi mdi-paperclip"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection