<!-- resources/views/page-job-detail.blade.php -->
@extends('layouts.main')

@section('title', 'Page-Job-Detail Page')

@section('content')

@include('includes.navbar2')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/job/job.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-80"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-12">
            <h3 class="mb-4 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
                @if(!empty($item['title']))
                    {{ $item['title'] }}
                @else
                    Senior Web Developer
                @endif
            </h3>
            <ul class="list-none">
                <li class="inline text-slate-400 me-3"><i class="uil uil-map-marker text-white h6 me-1"></i>
                    @if(!empty($item['location']))
                        {{ $item['location'] }}
                    @else
                        London, UK
                    @endif
                - <span class="text-white">
                        @if(!empty($item['time']))
                            {{ $item['time'] }}
                        @else
                            Full Time
                        @endif
                </span></li>
            </ul>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Techwind</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/index-job') }}">Job</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Job Detail</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
            <div class="lg:col-start-2 lg:col-span-10">
                <h5 class="mb-4 font-medium text-xl">Description:</h5>

                <p class="text-slate-400 mb-4">Our vision is to provide the next billion people with access to products that exemplify the ideals of Techwind. These ideals - which include peer-to-peer transactions, decentralization, censorship resistance, and permissionless-ness - support economic freedom.</p>

                <p class="text-slate-400 mb-4">Our approach is to develop and promote widely accessible products that support economic freedom. For example, our digital wallet - which has 16 million downloads - provides people with an easy-to-use, non-custodial method for buying, selling, storing, sending, receiving, and trading cryptocurrencies.</p>

                <h5 class="mb-4 mt-6 font-medium text-xl">Duties:</h5>

                <ul class="list-none mb-0">
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Work alongside Product, Engineering, Design and Marketing to build world-class cryptocurrency applications and experiences</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Provide produce vision and strategy for the team</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Design and lead a multi-year roadmap in accordance with company's OKRs, strategy and vision</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Build and lead an exceptional engineering team to innovate, invent, implement and deploy complex software solutions in mission-critical environment</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Understand customer needs and gather product requirements. Identify market opportunities and define product vision and strategy</li>
                </ul>

                <h5 class="mb-4 mt-6 font-medium text-xl">Requirements</h5>
                
                <ul class="list-none mb-0">
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> 5+ years of Product Management, Product Marketing or Product Growth experience with creating product roadmaps from conception to launch, driving product vision and defining go-to-market strategy</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Has experience designing, implementing and/or integrating IAM solutions</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Has managed engineering teams, designers, and collaborated with other product people</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Strong project management skills and ability to work across different product teams</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Strong leadership skills</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Agile mindset to improve iteratively, rather than placing big long term bets</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Excellent communication skills</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Communicates well in both written and verbal English</li>
                </ul>

                <h5 class="mb-4 mt-6 font-medium text-xl">Nice To Have</h5>
                
                <ul class="list-none mb-0">                        
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Strong understanding of blockchain, both technical and practical</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Cryptocurrency or financial services product management is a big plus</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Experience in KYC (know your customer), AML (anti-money laundering) and IAM services</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Understanding of custodial vs non-custodial aspects of cryptocurrency financial products</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Financial/payment apps experience</li>
                </ul>

                <h5 class="mb-4 mt-6 font-medium text-xl">Benefits</h5>
                <p class="text-slate-400 mb-4">Bitcoin.com is paving the way for the next generation of financial technology products and platforms. We're bringing cryptocurrency and the future of money to the masses. We’d love to have you on board.</p>

                <p class="text-slate-400 mb-4">We are serious about what we do, but more importantly, we have a lot of fun doing it. Our work culture is modern, meaning we strive for work experiences based on transparency, productivity, trust, and passion. For all employees, benefits include:</p>


                <ul class="list-none mb-4">
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Flexible work hours</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Remote work</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Health insurance reimbursement</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Wellness program (gym, etc.)</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Yoga classes</li>
                    <li class="text-slate-400 flex mt-2"><i class="uil uil-arrow-right text-indigo-600 h5 mb-0 me-2"></i> Japanese classes</li>
                </ul>

                <p class="text-slate-400 mb-4">For employees residing in Japan, we offer "permanent employment" status (正社員) and the option to be paid in yen.</p>

                <p class="text-slate-400 mb-4">Employees residing outside of Japan are classified as Independent Contractors and are paid in the cryptocurrency of their choice.</p>

                <div class="mt-6">
                    <a href="{{ url('/page-job-apply') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Apply now</a>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        
        <!-- includes/Landings/index-classic-saas/mobile-apps.blade.php -->
        @include('includes.Landings.index-classic-saas.mobile-apps')

    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

@include('includes.footer5')

@endsection