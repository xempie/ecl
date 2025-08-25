<!-- resources/views/index-coworking.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Coworking Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative md:py-60 py-36 items-center">
    <div class="absolute top-0 start-0 w-full h-full z-0 pointer-events-none overflow-hidden">
        <!-- <iframe src="https://player.vimeo.com/video/33955001?background=1&autoplay=1&loop=1&byline=0&title=0" class="absolute top-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2  -translate-y-1/2 w-screen h-[56.25vw] min-h-screen min-w-[177.77vw]"></iframe> -->
        <!--Note: Vimeo Embed Background Video-->

        <iframe src="https://www.youtube.com/embed/JsNvHJsufhI?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1" class="absolute top-1/2 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2  -translate-y-1/2 w-screen h-[56.25vw] min-h-screen min-w-[177.77vw]"></iframe>
        <!--Note: Youtube Embed Background Video-->
    </div>
    <div class="absolute inset-0 opacity-20 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/map.svg') }}');"></div>
    <div class="absolute inset-0 bg-slate-900/70"></div>

    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <img src="{{ asset('assets/images/logo-icon-64.png') }}" class="block mx-auto animate-[spin_10s_linear_infinite]" alt="">
            <h3 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 mt-10 text-white">Coworking Just Feels Right</h3>

            <p class="text-slate-300 text-lg max-w-2xl mx-auto">Coworking spaces offer a wealth of advantages for self starters, including networking opportunities, daily structure, and increased productivity.</p>
        
            <div class="subcribe-form z-1 mt-8">
                <form class="relative mx-auto max-w-xl">
                    <i data-feather="map-pin" class="size-5 absolute top-[48%] -translate-y-1/2 start-4"></i>
                    <input type="text" id="search_name" name="name" class="pt-4 pe-40 pb-4 w-full h-[50px] outline-none text-slate-900 dark:text-white rounded-full bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 ps-12" placeholder="Washington, D.C.">
                    <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Find A Space</button>
                </form><!--end form-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- STart -->
<section class="relative md:py-24 py-16">
    <div class="container relative">

        <!-- includes/Landings/index-coworking/history1.blade.php -->
        @include('includes.Landings.index-coworking.history1')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Services</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">

            <!-- includes/Landings/index-coworking/our-services1.blade.php -->
            @include('includes.Landings.index-coworking.our-services1')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">We provide Different types of office</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container-fluid relative">
        <div class="flex justify-center relative mt-8">
            <div class="relative w-full">
                <div class="tiny-six-item">

                    <!-- includes/Landings/index-coworking/types-of-office.blade.php -->
                    @include('includes.Landings.index-coworking.types-of-office')

                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-0 pt-0">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-1">
                <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                    <div class="lg:col-start-2 lg:col-span-10">
                        <div class="relative">
                            <img src="{{ asset('assets/images/digital/cta.jpg') }}" class="rounded-md shadow-lg" alt="">
                            <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                                <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content md:mt-8">
                    <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                        <div class="lg:col-start-2 lg:col-span-10">
                            <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <h6 class="text-white/50 text-lg font-semibold">Customers needs</h6>
                                        <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white mt-2"> Spaces for every size <br> and type of need.</h3>
                                    </div>
                                </div>

                                <div class="section-title text-md-start">
                                    <p class="text-white/50 max-w-xl mx-auto mb-2">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    <a href="" class="text-white">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row -->
    </div>
    <!--end container-->

    <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
</section>
<!--end section-->
<!-- End -->

<!-- Start -->
<section class="realtive md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-5">
                <div class="sticky top-20">

                    <!-- includes/Landings/index-coworking/tab4.blade.php -->
                    @include('includes.Landings.index-coworking.tab4')

                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-7">
                <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 rounded-md">

                    <!-- includes/Landings/index-coworking/private.blade.php -->
                    @include('includes.Landings.index-coworking.private')
                
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                
                <!-- includes/Landings/index-saas/reviews2.blade.php -->
                @include('includes.Landings.index-saas.reviews2')

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 mb-8 items-center">
            <div class="md:col-span-6">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Reads Our Latest <br> News & Blog</h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            
            <!-- includes/Landings/index-seo/blog2.blade.php -->
            @include('includes.Landings.index-seo.blog2')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<div class="container-fluid relative">
    <div class="grid grid-cols-1">
        <div class="relative grayscale w-full leading-[0] border-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
        </div>
        <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center">
            <a href="#!" onclick="contactModal.showModal()" class="size-12 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i class="uil uil-phone"></i></a>
        </div>
    </div><!--end grid-->
</div><!--end container-->

<!-- Start Modal -->
<dialog id="contactModal" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
    <div class="relative h-auto md:w-[480px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-800">
            <h3 class="font-bold text-lg">Contact Form</h3>
            <form method="dialog">
                <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i data-feather="x" class="size-4"></i></button>
            </form>
        </div>
        <div class="p-6 text-center">
            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                <p class="mb-0" id="error-msg"></p>
                <div id="simple-msg"></div>
                <div class="grid lg:grid-cols-12 lg:gap-6">
                    <div class="lg:col-span-6 mb-5">
                        <div class="text-start">
                            <label for="name" class="font-semibold">Your Name:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                <input name="name" id="name" type="text" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Name :">
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-6 mb-5">
                        <div class="text-start">
                            <label for="email" class="font-semibold">Your Email:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                <input name="email" id="email" type="email" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email :">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="mb-5">
                        <div class="text-start">
                            <label for="subject" class="font-semibold">Your Question:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="book" class="size-4 absolute top-3 start-4"></i>
                                <input name="subject" id="subject" class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Subject :">
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="text-start">
                            <label for="comments" class="font-semibold">Your Comment:</label>
                            <div class="form-icon relative mt-2">
                                <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Message :"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" id="submit" name="send" class="py-2 px-5 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Send Message</button>
            </form>
        </div>
    </div>
</dialog>
<!-- End Modal -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection