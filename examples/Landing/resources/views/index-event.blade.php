<!-- resources/views/index-event.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Event Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-64 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/event/bg.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-t from-indigo-600/90 to-fuchsia-600/90"></div>
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-7 md:order-1 order-2">
                <h5 class="text-xl text-white/60 mb-3">October 11, 2025</h5>
                <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Join Our <br> Web Design Seminar</h4>
                <p class="text-white/60 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
            
                <div class="mt-8">
                    <a href="#ticket" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="uil uil-envelope"></i> Buy Ticket</a>
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-5 md:text-center md:order-2 order-1">
                <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox lg:size-24 size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white hover:bg-indigo-600 text-indigo-600 hover:text-white duration-500 ease-in-out mx-auto">
                    <i class="mdi mdi-play inline-flex items-center justify-center text-3xl"></i>
                </a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">

        <!-- includes/Landings/index-event/competition.blade.php -->
        @include('includes.Landings.index-event.competition')

    </div><!--end container-->

    <!-- Team -->
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Event Speakers</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Meet Our Speakers</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-event/event-speakers.blade.php -->
            @include('includes.Landings.index-event.event-speakers')

        </div><!--end grid-->
    </div><!--end container-->
    <!-- team -->
</section><!--end section-->
<!-- End -->

<!-- Start CTA -->
<section class="relative table w-full py-36 bg-no-repeat bg-bottom bg-cover" style="background-image: url('{{ asset('assets/images/event/bg3.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-t from-indigo-600/90 to-fuchsia-600/90"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <div class="pb-8">
                <h6 class="text-white/50 text-sm font-bold uppercase mb-2">Hurry up & Register</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-white">Not yet registered? <br> Hurry up!</h3>

                <p class="text-white/50 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>
        
            <div id="countdown">
                <ul class="count-down list-none inline-block text-white text-center mt-8">
                    <li id="days" class="text-[40px] leading-[110px] size-[130px] rounded-full shadow-md bg-white/10 backdrop-opacity-30 inline-block m-2"></li>
                    <li id="hours" class="text-[40px] leading-[110px] size-[130px] rounded-full shadow-md bg-white/10 backdrop-opacity-30 inline-block m-2"></li>
                    <li id="mins" class="text-[40px] leading-[110px] size-[130px] rounded-full shadow-md bg-white/10 backdrop-opacity-30 inline-block m-2"></li>
                    <li id="secs" class="text-[40px] leading-[110px] size-[130px] rounded-full shadow-md bg-white/10 backdrop-opacity-30 inline-block m-2"></li>
                    <li id="end" class="h1"></li>
                </ul>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End CTA -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Event Schedules</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">

            <!-- includes/Landings/index-event/tab5.blade.php -->
            @include('includes.Landings.index-event.tab5')

            <div id="StarterContent" class="mt-1">
                <div class="" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                    <div class="grid grid-cols-1">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900">
                            <table class="w-full text-start">
                                <tbody>

                                    <!-- includes/Landings/index-event/tuesday-tab1.blade.php -->
                                    @include('includes.Landings.index-event.tuesday-tab1')

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="hidden" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                    <div class="grid grid-cols-1">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900">
                            <table class="w-full text-start">
                                <tbody>

                                    <!-- includes/Landings/index-event/wednesday1-tab.blade.php -->
                                    @include('includes.Landings.index-event.wednesday1-tab')

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="hidden" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                    <div class="grid grid-cols-1">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900">
                            <table class="w-full text-start">
                                <tbody>

                                    <!-- includes/Landings/index-event/thursday-tab1.blade.php -->
                                    @include('includes.Landings.index-event.thursday-tab1')

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="hidden" id="friday" role="tabpanel" aria-labelledby="friday-tab">
                    <div class="grid grid-cols-1">
                        <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900">
                            <table class="w-full text-start">
                                <tbody>
                                    
                                    <!-- includes/Landings/index-event/wednesday1-tab.blade.php -->
                                    @include('includes.Landings.index-event.wednesday1-tab')

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start CTA -->
<section class="relative table w-full py-36 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/event/bg2.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-t from-indigo-600/90 to-fuchsia-600/90"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mb-12">
                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
            </a>

            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-white">Let's Make Something Together</h3>

            <p class="text-white/80 max-w-xl mx-auto">The Biggest Event Ever</p>
        
            
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End CTA -->

<!-- Start -->
<section class="relative md:py-24 py-16" id="ticket">
    <div class="container relative">

        <!-- includes/Landings/index-event/secure.blade.php -->
        @include('includes.Landings.index-event.secure')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="md:col-span-6">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
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

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection