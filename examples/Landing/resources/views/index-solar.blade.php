<!-- resources/views/index-solar.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Solar Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative overflow-hidden table w-full py-36 lg:py-44">
    <div class="image-wrap absolute -top-[350px] -bottom-[350px] -start-[100px] -end-[100px] min-w-full w-auto min-h-full h-auto overflow-hidden m-auto bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/solar/bg/2.jpg') }}');"></div>
    <div class="absolute inset-0 bg-white/80 dark:bg-slate-900/80"></div>
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="me-6">
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-6xl mb-5 text-slate-900 dark:text-white">Sustainable Energy Empowering The Customer</h4>
                    <p class="text-slate-400 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                
                    <div class="mt-6">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded me-2 mt-2">Get a Free Quote <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-5">
                <div class="relative">
                    <div class="relative md:shrink-0">
                        <img class="object-cover md:w-[400px] w-84 lg:h-[550px] md:h-[400px] h-[550px] rounded-full shadow-md dark:shadow-gyay-700 ms-auto" src="{{ asset('assets/images/solar/4.jpg') }}" alt="">
                    </div>

                    <div class="absolute bottom-16 md:-start-10 md-start-5 start-1 flex items-center p-2 rounded shadow-md dark:shadow-gray-800 bg-white/90 dark:bg-slate-900/90 max-w-80">
                        <div class="min-w-28 w-28 relative">
                            <div class="grid grid-cols-1">
                                <div class="tiny-one-item">

                                    <!-- includes/Landings/index-solar/view.blade.php -->
                                    @include('includes.Landings.index-solar.view')

                                </div>
                            </div>
                        </div>

                        <div class="ms-3">
                            <h5 class="text-lg font-semibold">View Our Success Stories With Renewable Energy</h5>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container relative">
        <div class="md:flex justify-center">
            <div class="lg:w-3/4 md:w-full relative -mt-16">
                <div class="p-6 relative z-3 bg-white dark:bg-slate-900 rounded shadow-sm shadow-slate-200 dark:shadow-slate-800">
                    <div class="md:flex justify-center">

                        <!-- includes/Landings/index-solar/worldwide.blade.php -->
                        @include('includes.Landings.index-solar.worldwide')

                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-solar/solar.blade.php -->
        @include('includes.Landings.index-solar.solar')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What we do ?</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-solar/what-we-do4.blade.php -->
            @include('includes.Landings.index-solar.what-we-do4')

        </div>
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16 pt-16">
        <div class="absolute inset-0 opacity-25 dark:opacity-50 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/map.png') }}');"></div>
        <div class="relative grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">What Our Client Say ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="flex justify-center relative mt-6">
            <div class="relative md:w-1/2 w-full">
                <div class="absolute -top-20 md:-start-24 -start-0">
                    <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                </div>

                <div class="absolute bottom-28 md:-end-24 -end-0">
                    <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                </div>

                <div class="tiny-single-item">
                    
                    <!-- includes/Landings/index-software/reviews5.blade.php -->
                    @include('includes.Landings.index-software.reviews5')

                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-6 text-center">
            <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Solar & Renewable Projects</h4>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-solar/projects.blade.php -->
            @include('includes.Landings.index-solar.projects')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start Request A Quote -->
<section class="relative md:py-24 py-16 bg-no-repeat bg-fixed bg-top bg-cover" style="background-image: url('{{ asset('assets/images/solar/bg/1.jpg') }}');" id="table">
    <div class="absolute inset-0 bg-slate-900/60"></div>
    <div class="container relative">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div>
                <h4 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-semibold text-white">Best Solution for <br> Your Home Service</h4>

                <p class="text-white/70 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>

                <div class="grid md:grid-cols-2 mt-4">
                    <ul class="list-none">
                        <li class="mt-2"><i class="mdi mdi-arrow-right text-[14px] text-white"></i> <span class="text-white/50">Solar Panel Installation</span></li>
                        <li class="mt-2"><i class="mdi mdi-arrow-right text-[14px] text-white"></i> <span class="text-white/50">Solar System Design</span></li>
                        <li class="mt-2"><i class="mdi mdi-arrow-right text-[14px] text-white"></i> <span class="text-white/50">Solar Energy Consultation</span></li>
                    </ul>

                    <ul class="list-none">
                        <li class="mt-2"><i class="mdi mdi-arrow-right text-[14px] text-white"></i> <span class="text-white/50">Solar System Maintenance</span></li>
                        <li class="mt-2"><i class="mdi mdi-arrow-right text-[14px] text-white"></i> <span class="text-white/50">Solar Energy Storage</span></li>
                        <li class="mt-2"><i class="mdi mdi-arrow-right text-[14px] text-white"></i> <span class="text-white/50">Solar Financing</span></li>
                    </ul>
                </div>

                <div class="mt-6">
                    <a href="" class="h-10 px-5 tracking-wide inline-flex items-center justify-center font-medium rounded bg-indigo-600 text-white">Learn More <i class="mdi mdi-arrow-right ms-1"></i></a>
                </div>

                <div class="flex items-center mt-8">
                    <i class="mdi mdi-phone me-2 text-white text-5xl"></i>
                    <div class="content">
                        <h6 class="text-base font-medium text-white/70">Received and acurate quote within in 3-5 days</h6>
                        <a href="tel:+152534-468-854" class="text-white font-semibold">+152 534-468-854</a>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded lg:p-12 p-6 lg:ms-12">
                <div class="section-title mb-4">
                    <h4 class="text-2xl font-bold uppercase mb-4">Request A Quote</h4>
                    <p class="text-slate-400 mx-auto para-desc">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>

                <form>
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-4 mt-6">
                        <div class="md:col-span-6">
                            <label class="font-semibold">Your Name:</label>
                            <input name="name" id="name" type="text" class="w-full py-2 px-3 border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 bg-transparent focus:outline-none rounded h-10 mt-1 focus:ring-0" placeholder="First Name:">
                        </div>

                        <div class="md:col-span-6">
                            <label class="font-semibold">Your Email:</label>
                            <input name="email" id="email" type="email" class="w-full py-2 px-3 border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 bg-transparent focus:outline-none rounded h-10 mt-1 focus:ring-0" placeholder="Your email:">
                        </div> 

                        <div class="md:col-span-6">
                            <label class="font-semibold">Phone no.:</label>
                            <input name="number" type="number" id="phone-number" class="w-full py-2 px-3 border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 bg-transparent focus:outline-none rounded h-10 mt-1 focus:ring-0" placeholder="Phone no.:">
                        </div> 

                        <div class="md:col-span-6">
                            <label class="font-semibold">Electricity usage in kWh?</label>
                            <input name="name" id="kWh" type="text" class="w-full py-2 px-3 border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 bg-transparent focus:outline-none rounded h-10 mt-1 focus:ring-0" placeholder="kWh">
                        </div>

                        <div class="md:col-span-12">
                            <label class="font-semibold">System Type:</label>
                            <select class="form-select w-full py-2 px-3 border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 bg-transparent focus:outline-none rounded h-10 mt-1 focus:ring-0">
                                <option value="USA">Solar for water</option>
                                <option value="CAD">Solar Panels</option>
                            </select>
                        </div>

                        <div class="md:col-span-12">
                            <h6 class="font-semibold">Select Contact Method:</h6>

                            <ul class="list-none mt-1">
                                <li class="inline-block me-2">
                                    <div class="flex items-center mb-0">
                                        <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="ViaCall">
                                        <label class="form-checkbox-label text-slate-400" for="ViaCall">Phone</label>
                                    </div>
                                </li>
                                <li class="inline-block">
                                    <div class="flex items-center mb-0">
                                        <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-indigo-600 checked:appearance-auto dark:accent-indigo-600 focus:border-indigo-300 focus:ring-0 focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="ViaEmail">
                                        <label class="form-checkbox-label text-slate-400" for="ViaEmail">Email</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!--end grid-->

                    <div class="grid grid-cols-1 mt-4">
                        <input type="submit" id="submit" name="send" class="h-10 px-5 tracking-wide inline-flex items-center justify-center font-medium rounded bg-indigo-600 text-white" value="Submit Request">
                    </div><!--end grid-->
                </form><!--end form-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Request A Quote -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-6 text-center">
            <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Latest Blogs & News</h4>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            <!-- includes/Landings/index-solar/blog9.blade.php -->
            @include('includes.Landings.index-solar.blog9')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection