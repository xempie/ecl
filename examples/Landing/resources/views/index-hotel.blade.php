<!-- resources/views/index-hotel.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Hotel Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-64">
    <div class="absolute inset-0" id="overlay"></div>
    <div class="absolute inset-0 ltr:md:bg-gradient-to-l rtl:md:bg-gradient-to-r md:from-transparent md:via-indigo-600/80 md:to-indigo-800"></div>
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="md:text-start text-center mt-10">
                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Make your holidays <br> memorables</h1>
                <p class="text-white/70 text-xl max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>

                <a href="">
                    <i class="mdi mdi-arrow-down text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 size-12 mx-auto shadow-md dark:shadow-gray-800 mt-6"></i>
                </a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Start -->
<section class="relative">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative -mt-28">
                <div class="p-6 bg-white dark:bg-slate-900 rounded-md shadow-sm dark:shadow-gray-800">
                    <div class="section-title">
                        <h4 class="text-2xl font-semibold mb-3">Search your trip</h4>
                        <p class="text-slate-400 mx-auto para-desc">We make it a priority to offer flexible services to accomodate your needs</p>
                    </div>

                    <form class="mt-4" action="#">
                        <div class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 gap-4">
                            <div>
                                <label class="font-semibold">Check in :</label>
                                <input name="date" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 start" placeholder="Select date :">
                            </div>

                            <div>
                                <label class="font-semibold">Check out :</label>
                                <input name="date1" type="text" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 end" placeholder="Select date :">
                            </div>

                            <div>
                                <label class="font-semibold">Adults :</label>
                                <input type="number" min="0" autocomplete="off" id="adult" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" required="" placeholder="Adults :">
                            </div>

                            <div>
                                <label class="font-semibold">Childrens :</label>
                                <input type="number" min="0" autocomplete="off" id="childrens" class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" required="" placeholder="Childrens :">
                            </div>

                            <div class="lg:mt-7">
                                <input type="submit" id="submit" name="send" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Search Now">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>

<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container relative">

        <!-- includes/Landings/index-hotel/inspiration.blade.php -->
        @include('includes.Landings.index-hotel.inspiration')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
           
            <!-- includes/Home/business-partner.blade.php -->
            @include('includes.Home.business-partner')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Popular Tours</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-[30px] mt-8">

            <!-- includes/Landings/index-hotel/popular-tours.blade.php -->
            @include('includes.Landings.index-hotel.popular-tours')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Landings/index-hotel/resort.blade.php -->
        @include('includes.Landings.index-hotel.resort')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What our customer <br> say about us</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                
                <!-- includes/Landings/index-saas/reviews2.blade.php -->
                @include('includes.Landings.index-saas.reviews2')          
            
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">

            <!-- includes/Landings/index-hotel/blog4.blade.php -->
            @include('includes.Landings.index-hotel.blog4')

        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- end section -->

    <!-- includes/Home/cookie-popup.blade.php -->
    @include('includes.Home.cookie-popup')

@include('includes.footer')

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        easy_background("#overlay",
            {
                slide: ["{{ asset('assets/images/hotel/bg1.jpg') }}", "{{ asset('assets/images/hotel/bg2.jpg') }}", "{{ asset('assets/images/hotel/bg3.jpg') }}"],
                delay: [4000, 4000, 4000],
                transition_timing: "ease-in-out",
                transition_duration: 1000
            }
        );
    });
</script>
@endpush