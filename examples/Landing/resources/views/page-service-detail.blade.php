<!-- resources/views/page-service-detail.blade.php -->
@extends('layouts.main')

@section('title', 'Page-Service-Detail Page')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative pb-16 pt-24">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-semibold">Business Consultation</h3>

            <ul class="tracking-[0.5px] mb-0 inline-block mt-4">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ url('/') }}">Techwind</a></li>
                <li class="inline-block text-base mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ url('/page-services') }}">Services</a></li>
                <li class="inline-block text-base mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-indigo-600" aria-current="page">Business Consultation</li>
            </ul>
        </div>
    </div>
</section>
<section class="relative table w-full py-44 bg-no-repeat bg-center bg-cover bg-fixed" style="background-image: url('{{ asset('assets/images/services.jpg') }}');"></section>
<!-- End Hero -->

<!-- Start -->
<section class="relative md:pb-24 pb-16">
    <div class="container relative -mt-10">
        <div class="grid grid-cols-1">
            <div class="rounded-md shadow-sm dark:shadow-slate-800 bg-white dark:bg-slate-900 p-6">
                <p class="text-slate-400 text-lg">Suspendisse tellus dolor, lacinia vitae sapien porttitor, pos uere euismod justo. Curabitur enim neque, auctor ac iaculis vitae, efficitur quis lectus. Class aptent taciti sociosqu ad litora torquent per conubiays nostra, per inceptos himenaeos. Sed eleifend risus faucibus tortor accumsan erat volutpat.</p>
            </div>
        </div>
    </div>

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-landing-one/great-product3.blade.php -->
        @include('includes.Landings.index-landing-one.great-product3')

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            
            <!-- includes/Landings/index-payment/our-features.blade.php -->
            @include('includes.Landings.index-payment.our-features')

        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">

        <!-- includes/Pages/Company/Services/page-service-detail/consultation.blade.php -->
        @include('includes.Pages.Company.Services.page-service-detail.consultation')

    </div><!--end container-->
</section>
<!-- End -->

@include('includes.footer')

@endsection