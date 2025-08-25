<!-- resources/views/index-charity.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Charity Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative lg:py-44 py-36 bg-center bg-cover" style="background-image: url('{{ asset('assets/images/charity/bg.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/50"></div>
    <div class="container relative z-1">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="lg:col-span-7 md:col-span-6">
                <div class="md:me-6">
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Your Donation Can <br> Change the World</h4>
                    <p class="text-white/75 text-lg max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <div class="mt-6">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-5 md:col-span-6">
                <div class="p-6 rounded-lg border-t-8 border-indigo-600 bg-white dark:bg-slate-900 shadow-lg dark:shadow-gray-800">
                    <div class="mb-6 text-center">
                        <h4 class="font-bold lg:leading-normal leading-normal text-3xl mb-3">Make a Donation</h4>
                        <p class="text-slate-400">Your $40.00 monthly donation can give 12 people clean water every year. 100% funds water projects.</p>
                    </div>

                    <form>
                        <div class="grid grid-cols-1">
                            <div>
                                <div class="grid md:grid-cols-2 gap-5">
                                    <div class="mb-5">
                                        <label class="form-label font-medium">Your Name : <span class="text-red-600">*</span></label>
                                        <input type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Name" name="name" required="">
                                    </div>

                                    <div class="mb-5">
                                        <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                        <input type="email" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Email" name="email" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label class="form-label font-medium">I Want to Donate for</label>
                                <select class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                    <option value="Donate For Food">Donate For Food</option>
                                    <option value="Food For Orphan">Food For Orphan</option>
                                    <option value="Home For Homeless">Home For Homeless</option>
                                    <option value="Holyday Gifts In Kind">Holyday Gifts In Kind</option>
                                    <option value="For clean Water in Africa">For clean Water in Africa</option>
                                    <option value="Health and Rights">Health and Rights</option>
                                </select>
                            </div>

                            <div class="mb-5">
                                <label class="form-label font-medium">How much do you want to donate ?</label>
                                <div class="relative mt-2">
                                    <span class="absolute top-0.5 start-0.5 size-9 text-xl bg-gray-100 dark:bg-slate-800 inline-flex justify-center items-center text-slate-900 dark:text-white rounded" id="basic-addon1"><i class="uil uil-usd-circle"></i></span>
                                    <input type="number" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" min="1" max="1000" placeholder="Enter Amount" id="amount" aria-describedby="inputGroupPrepend" required>
                                </div>
                            </div><!--end col--> 

                            <div class="mb-5">
                                <div class="flex items-center w-full mb-0">
                                    <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="AcceptT&C">
                                    <label class="form-check-label text-slate-400" for="AcceptT&C">I Accept <a href="" class="text-indigo-600">Terms And Condition</a></label>
                                </div>
                            </div>

                            <div class="mb-5">
                                <input type="submit" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Donate Now">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<section class="relative bg-indigo-600 py-12">
    <div class="container relative">
        <div class="relative grid md:grid-cols-4 grid-cols-2 items-center gap-[30px]">

            <!-- includes/Landings/index-charity/counter2.blade.php -->
            @include('includes.Landings.index-charity.counter2')

        </div>
    </div>
</section>
<!-- End Hero -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">

        <!-- includes/Landings/index-charity/about-us.blade.php -->
        @include('includes.Landings.index-charity.about-us')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Causes</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-charity/causes.blade.php -->
            @include('includes.Landings.index-charity.causes')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="py-20 w-full table relative bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/charity/cta.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Senior Citizen Program</h3>

            <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        
            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
            </a>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Meet Our Volunteers</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-charity/volunteers.blade.php -->
            @include('includes.Landings.index-charity.volunteers')

        </div><!--end grid-->
    </div><!--end container-->
    <!-- team -->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
           
            <!-- includes/Landings/index-seo/blog2.blade.php -->
            @include('includes.Landings.index-seo.blog2')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@include('includes.footer')

@endsection