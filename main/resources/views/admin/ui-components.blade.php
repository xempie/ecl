<!-- resources/views/ui-components.blade.php -->
@extends('layouts.main')

@section('title', 'Ui-Components Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">UI Components</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                <li class="inline-block capitalize text-[14px] font-bold duration-500 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block capitalize text-[14px] font-bold text-indigo-600 dark:text-white" aria-current="page">Components</li>
            </ul>
        </div>

        <div class="grid md:grid-cols-12 mt-6 gap-6 relative">
            <div class="xl:col-span-3 md:col-span-4">
                <div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900 p-6 sticky top-20">

                    <!-- includes/UI-Components/sidebar1.blade.php -->
                    @include('includes.UI-Components.sidebar1')

                </div>
            </div>

            <div class="xl:col-span-9 md:col-span-8">
                <div class="grid grid-cols-1 gap-6">
                    <div class="" id="buttons">
                        <h5 class="font-bold text-xl mb-6">Buttons</h5>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Default Buttons</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/buttons.blade.php -->
                                        @include('includes.UI-Components.buttons')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Rounded Buttons</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/buttons1.blade.php -->
                                        @include('includes.UI-Components.buttons1')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Outline Buttons</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/buttons2.blade.php -->
                                        @include('includes.UI-Components.buttons2')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Outline Rounded Buttons</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/buttons3.blade.php -->
                                        @include('includes.UI-Components.buttons3')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Soft Buttons</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/buttons4.blade.php -->
                                        @include('includes.UI-Components.buttons4')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Soft Rounded Buttons</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/buttons5.blade.php -->
                                        @include('includes.UI-Components.buttons5')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Button Size</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/buttons6.blade.php -->
                                        @include('includes.UI-Components.buttons6')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Button Icons</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/buttons7.blade.php -->
                                        @include('includes.UI-Components.buttons7')

                                    </ul>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>
                    
                    <div class="" id="badges">
                        <h5 class="font-bold text-xl mb-6">Badges</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Default Badges</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/badges.blade.php -->
                                        @include('includes.UI-Components.badges')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Rounded Badges</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/badges1.blade.php -->
                                        @include('includes.UI-Components.badges1')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Outline Badges</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/badges2.blade.php -->
                                        @include('includes.UI-Components.badges2')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Outline Rounded Badges</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/badges3.blade.php -->
                                        @include('includes.UI-Components.badges3')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Soft Badges</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/badges4.blade.php -->
                                        @include('includes.UI-Components.badges4')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Soft Rounded Badges</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/badges5.blade.php -->
                                        @include('includes.UI-Components.badges5')

                                    </ul>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="alerts">
                        <h5 class="font-bold text-xl mb-6">Alerts</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Alerts</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <div class="space-y-3">

                                        <!-- includes/UI-Components/alerts.blade.php -->
                                        @include('includes.UI-Components.alerts')

                                    </div>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Soft Alerts</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <div class="space-y-3">

                                        <!-- includes/UI-Components/alerts1.blade.php -->
                                        @include('includes.UI-Components.alerts1')

                                    </div>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Alert with icon</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <div class="space-y-3">

                                        <!-- includes/UI-Components/alerts2.blade.php -->
                                        @include('includes.UI-Components.alerts2')

                                    </div>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Alert with Link</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <div class="space-y-3">

                                        <!-- includes/UI-Components/alerts3.blade.php -->
                                        @include('includes.UI-Components.alerts3')

                                    </div>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="dropdowns">
                        <h5 class="font-bold text-xl mb-6">Dropdowns</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Dropdowns</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/dropdowns.blade.php -->
                                        @include('includes.UI-Components.dropdowns')

                                    </ul>
                                </div>
                            </div><!--end content-->
        
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Icon Dropdowns</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/dropdowns1.blade.php -->
                                        @include('includes.UI-Components.dropdowns1')

                                    </ul>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="text-colors">
                        <h5 class="font-bold text-xl mb-6">Text Colors</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Text Colors</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/colors.blade.php -->
                                        @include('includes.UI-Components.colors')

                                    </ul>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>
                    
                    <div class="" id="backgrounds">
                        <h5 class="font-bold text-xl mb-6">Background Colors</h5>
                        
                        <div class="grid grid-cols-1 gap-[30px]">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Background Colors</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/colors1.blade.php -->
                                        @include('includes.UI-Components.colors1')

                                    </ul>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="opacity">
                        <h5 class="font-bold text-xl mb-6">Opacity</h5>
                        
                        <div class="grid grid-cols-1 gap-[30px]">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Opacity</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/opacity.blade.php -->
                                        @include('includes.UI-Components.opacity')

                                    </ul>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="accordions">
                        <h5 class="font-bold text-xl mb-6">Accordions</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Accordion</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">

                                    <!-- includes/UI-Components/accordions.blade.php -->
                                    @include('includes.UI-Components.accordions')

                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="nav-tabs">
                        <h5 class="font-bold text-xl mb-6">Nav Tabs</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Horizontal Nav Tabs</h5>
                                </div>

                                <!-- includes/UI-Components/tabs.blade.php -->
                                @include('includes.UI-Components.tabs')

                            </div><!--end content-->

                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Vertical Nav Tabs</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">

                                    <!-- includes/UI-Components/tabs1.blade.php -->
                                    @include('includes.UI-Components.tabs1')

                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="form-inputs">
                        <h5 class="font-bold text-xl mb-6">Form Inputs</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Form Inputs</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <form>
                                        <div class="grid grid-cols-1 gap-5">
                                            <div class="">
                                                <label class="form-label font-semibold">First Name:</label>
                                                <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="First Name:" id="firstname" name="name" required="">
                                            </div>
        
                                            <div class="">
                                                <label class="form-label font-semibold">Username:</label>
                                                <div class="relative mt-2">
                                                    <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="basic-addon1"><i class="uil uil-at"></i></span>
                                                    <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Username" required>
                                                </div>
                                            </div>
        
                                            <div class="">
                                                <label class="form-label font-semibold">Your Email:</label>
                                                <input type="email" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Email" name="email" required="">
                                            </div>
        
                                            <div class="">
                                                <label class="font-semibold">Select Input:</label>
                                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                                    <option value="USA">USA</option>
                                                    <option value="CAD">Canada</option>
                                                    <option value="CHINA">China</option>
                                                </select>
                                            </div>

                                            <div class="">
                                                <label class="form-label font-semibold">Number:</label>
                                                <input type="number" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="Zip:" id="zipcode" name="number" required="">
                                            </div>

                                            <div class="">
                                                <h6 class="font-semibold">Form Checkbox</h6>

                                                <div class="flex items-center w-full mb-0">
                                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" checked value="" id="sameaddress">
                                                    <label class="form-check-label text-slate-400" for="sameaddress">Checkbox 1</label>
                                                </div>
        
                                                <div class="flex items-center w-full mb-0">
                                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="savenexttime">
                                                    <label class="form-check-label text-slate-400" for="savenexttime">Checkbox 2</label>
                                                </div>
        
                                                <div class="flex items-center w-full mb-0">
                                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" disabled value="" id="checkbox-d">
                                                    <label class="form-check-label text-slate-400" for="checkbox-d">Disabled Checkbox</label>
                                                </div>
                                            </div>

                                            <div class="">
                                                <h6 class="font-semibold">Form Radio</h6>

                                                <div class="block">
                                                    <div>
                                                        <label class="inline-flex items-center">
                                                            <input type="radio" class="form-radio size-4 appearance-none rounded-full border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" checked name="radio-colors" value="1">
                                                            <span class="text-slate-400">Radio 1</span>
                                                        </label>
                                                    </div>
                                                </div>
        
                                                <div class="block mt-2">
                                                    <div>
                                                        <label class="inline-flex items-center">
                                                            <input type="radio" class="form-radio size-4 appearance-none rounded-full border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                                                            <span class="text-slate-400">Radio 2</span>
                                                        </label>
                                                    </div>
                                                </div>
        
                                                <div class="block mt-2">
                                                    <div>
                                                        <label class="inline-flex items-center">
                                                            <input type="radio" class="form-radio size-4 appearance-none rounded-full border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" disabled name="radio-colors" value="1">
                                                            <span class="text-slate-400">Disabled Radio</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="shadows">
                        <h5 class="font-bold text-xl mb-6">Shadows</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Shadows</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none space-y-6">

                                        <!-- includes/UI-Components/shadows.blade.php -->
                                        @include('includes.UI-Components.shadows')

                                    </ul>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>


                    <div class="" id="borders">
                        <h5 class="font-bold text-xl mb-6">Borders</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Borders</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none space-x-4 space-y-4">

                                        <!-- includes/UI-Components/borders.blade.php -->
                                        @include('includes.UI-Components.borders')

                                    </ul>
                                </div>
                            </div><!--end content-->

                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Border Styles</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none space-x-4 space-y-4">

                                        <!-- includes/UI-Components/borders1.blade.php -->
                                        @include('includes.UI-Components.borders1')

                                    </ul>
                                </div>
                            </div>

                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Border Radious</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none space-x-4 space-y-4">

                                        <!-- includes/UI-Components/borders2.blade.php -->
                                        @include('includes.UI-Components.borders2')

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="" id="breadcrumbs">
                        <h5 class="font-bold text-xl mb-6">Breadcrumb</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Breadcrumb</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="tracking-[0.5px] mb-0 inline-block">

                                        <!-- includes/UI-Components/breadcrumb.blade.php -->
                                        @include('includes.UI-Components.breadcrumb')

                                    </ul>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="paginations">
                        <h5 class="font-bold text-xl mb-6">Pagination</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Pagination</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    
                                    <!-- includes/Blog/blog/navigation.blade.php -->
                                    @include('includes.Blog.blog.navigation')

                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="modals">
                        <h5 class="font-bold text-xl mb-6">Modals</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Modals</h5>
                                </div>

                                <!-- includes/UI-Components/modals.blade.php -->
                                @include('includes.UI-Components.modals')

                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="tables">
                        <h5 class="font-bold text-xl mb-6">Tables</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Tables</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                                        <table class="w-full text-start">
                                            <thead>
                                                <tr>
                                                    <th class="px-4 py-5 text-start">Lessons</th>
                                                    <th class="px-4 py-5 text-end">Time</th>
                                                </tr>
                                            </thead>

                                            <!-- includes/UI-Components/tables.blade.php -->
                                            @include('includes.UI-Components.tables')
                                            
                                        </table>
                                    </div>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="headings">
                        <h5 class="font-bold text-xl mb-6">Heading</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Heading</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <ul class="list-none">

                                        <!-- includes/UI-Components/heading.blade.php -->
                                        @include('includes.UI-Components.heading')

                                    </ul>
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="font-weights">
                        <h5 class="font-bold text-xl mb-6">Font Weight</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Font Weight</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">

                                    <!-- includes/UI-Components/weight.blade.php -->
                                    @include('includes.UI-Components.weight')

                                </div>
                            </div><!--end content-->
                        </div>
                    </div>

                    <div class="" id="icons">
                        <h5 class="font-bold text-xl mb-6">Icons</h5>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div class="shadow-sm dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
                                <div class="p-5">
                                    <h5 class="text-lg font-semibold">Icons</h5>
                                </div>
                                <div class="p-5 border-t border-gray-100 dark:border-slate-800">
                                    <h6 class="text-lg font-medium">Feather Icons</h6>
                                    <p class="text-slate-400">There are 280+ feather icons and you can get all icons info from here: <a href="https://feathericons.com/" target="_blank"><code class="text-indigo-600">https://feathericons.com/</code></a></p>
                                    <h6 class="text-slate-400 mb-4 pb-2">Ex. <code class="text-red-600">&lt;i data-feather="mail" class="size-8"&gt; &lt;/i&gt;</code></h6>

                                    <ul class="list-none">

                                        <!-- includes/UI-Components/icons.blade.php -->
                                        @include('includes.UI-Components.icons')
                                    
                                    </ul>

                                    <h6 class="mt-6 text-lg font-medium">Material Design Icons</h6>
                                    <p class="text-slate-400">There are 4400+ Material Design icons and you can get all icons info from here: <a href="https://materialdesignicons.com/" target="_blank"><code class="text-indigo-600">https://materialdesignicons.com/</code></a></p>
                                    <h6 class="text-slate-400 mb-4 pb-2">Ex. <code class="text-red-600">&lt;i class="mdi mdi-home"&gt; &lt;/i&gt;</code></h6>

                                    <!-- includes/UI-Components/icons1.blade.php -->
                                    @include('includes.UI-Components.icons1')

                                    <h6 class="mt-6 text-lg font-medium">Iconscout (Unicons) Icons</h6>
                                    <p class="text-slate-400">There are 1100+ Iconscout (Unicons) Icons and you can get all icons info from here: <a href="https://iconscout.com/unicons" target="_blank"><code class="text-indigo-600">https://www.flaticon.com/packs/basic-icon</code></a></p>
                                    <h6 class="text-slate-400 mb-4 pb-2">Ex. <code class="text-red-600"><br>&lt;i class="uil uil-0-plus"&gt;&lt;/i&gt;<br>&lt;/span&gt;</code></h6>

                                    <!-- includes/UI-Components/icons2.blade.php -->
                                    @include('includes.UI-Components.icons2')
                                    
                                </div>
                            </div><!--end content-->
                        </div>
                    </div>
                </div><!--end grid-->
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection