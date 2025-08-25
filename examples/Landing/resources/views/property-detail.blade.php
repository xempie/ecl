<!-- resources/views/property-detail.blade.php -->
@extends('layouts.main')

@section('title', 'Property-Detail Page')

@section('content')

@include('includes.navbar')

<!-- Hero Start -->
<section class="relative md:pb-24 pb-16 mt-20">
    <div class="container-fluid relative">
        <div class="md:flex mt-4">
            <div class="lg:w-1/2 md:w-1/2 p-1">
                <div class="group relative overflow-hidden">
                    <img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/real/property/single/1.jpg') }}" alt="" class="w-full">
                    <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                    <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center invisible group-hover:visible">
                        <a href="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/real/property/single/1.jpg') }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="uil uil-camera"></i></a>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 md:w-1/2">

                <!-- includes/Pages/Real-Estate/property-detail/image.blade.php -->
                @include('includes.Pages.Real-Estate.property-detail.image')

            </div>
        </div><!--end flex-->
    </div><!--end container fluid-->

    <div class="container relative md:mt-24 mt-16">
        <div class="md:flex">
            <div class="lg:w-2/3 md:w-1/2 md:p-4 px-3">
                <h4 class="text-2xl font-medium">
                    @if(!empty($item['title']))
                        {{ $item['title'] }}
                    @else
                        10765 Hillshire Ave, Baton Rouge, LA 70810, USA
                    @endif
                </h4>

                <ul class="py-6 flex items-center list-none">
                    <li class="flex items-center lg:me-6 me-4">
                        <i class="uil uil-compress-arrows lg:text-3xl text-2xl me-2 text-indigo-600"></i>
                        <span class="lg:text-xl">
                            @if(!empty($item['sqf']))
                                {{ $item['sqf'] }}
                            @else
                                8000sqf
                            @endif
                        </span>
                    </li>

                    <li class="flex items-center lg:me-6 me-4">
                        <i class="uil uil-bed-double lg:text-3xl text-2xl me-2 text-indigo-600"></i>
                        <span class="lg:text-xl">
                            @if(!empty($item['beds']))
                                {{ $item['beds'] }}
                            @else
                                4 Beds
                            @endif
                        </span>
                    </li>

                    <li class="flex items-center">
                        <i class="uil uil-bath lg:text-3xl text-2xl me-2 text-indigo-600"></i>
                        <span class="lg:text-xl">
                            @if(!empty($item['baths']))
                                {{ $item['baths'] }}
                            @else
                                4 Baths
                            @endif
                        </span>
                    </li>
                </ul>

                <p class="text-slate-400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <p class="text-slate-400 mt-4">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                <p class="text-slate-400 mt-4">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
            
                <div class="w-full leading-[0] border-0 mt-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                </div>
            </div>

            <div class="lg:w-1/3 md:w-1/2 md:p-4 px-3 mt-8 md:mt-0">
                <div class="sticky top-20">
                    <div class="rounded-md bg-slate-50 dark:bg-slate-800 shadow-sm dark:shadow-gray-800">
                        <div class="p-6">
                            <h5 class="text-2xl font-medium">Price:</h5>

                            <div class="flex justify-between items-center mt-4">
                                <span class="text-xl font-medium">
                                    @if(!empty($item['price']))
                                        {{ $item['price'] }}
                                    @else
                                        $ 45,231
                                    @endif
                                </span>

                                <span class="bg-indigo-600/10 text-indigo-600 text-sm px-2.5 py-0.75 rounded h-6">For Sale</span>
                            </div>

                            <ul class="list-none mt-4">
                                <li class="flex justify-between items-center">
                                    <span class="text-slate-400 text-sm">Days on Hously</span>
                                    <span class="font-medium text-sm">124 Days</span>
                                </li>

                                <li class="flex justify-between items-center mt-2">
                                    <span class="text-slate-400 text-sm">Price per sq ft</span>
                                    <span class="font-medium text-sm">$ 186</span>
                                </li>

                                <li class="flex justify-between items-center mt-2">
                                    <span class="text-slate-400 text-sm">Monthly Payment (estimate)</span>
                                    <span class="font-medium text-sm">$ 1497/Monthly</span>
                                </li>
                            </ul>
                        </div>

                        <div class="flex">
                            <div class="p-1 w-1/2">
                                <a href="" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Book Now</a>
                            </div>
                            <div class="p-1 w-1/2">
                                <a href="" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Offer Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <h3 class="mb-6 text-xl leading-normal font-medium">Have Question ? Get in touch!</h3>

                        <div class="mt-6">
                            <a href="{{ url('/contact-one') }}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-transparent hover:bg-indigo-600 border border-indigo-600 text-indigo-600 hover:text-white rounded-md"><i class="uil uil-phone align-middle"></i> Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End Hero -->

@include('includes.footer')

@endsection