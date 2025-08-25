@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - Our Team | Leading Researchers & Faculty')

@section('description', 'Meet our world-class team of researchers, faculty members, and graduate students pioneering the future of empathic computing and human-computer interaction.')

@section('keywords', 'research team, empathic computing researchers, AI experts, VR researchers, faculty members, graduate students, University of South Australia')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/team/team.jpg') }}');">
    <div class="absolute inset-0 bg-slate-900 opacity-75"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Our Research Team</h3>

            <p class="text-slate-300 text-lg max-w-xl mx-auto">Meet the brilliant minds behind groundbreaking research in empathic computing, AI emotion recognition, and human-computer interaction.</p>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ route('home') }}">Empathic Computing Lab</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ route('about') }}">About</a></li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Team</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        
        <!-- About Our Lab Section -->
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-5 md:col-span-6">
                <div class="grid grid-cols-1 gap-6">
                    <!-- Auckland Lab -->
                    <div class="relative">
                        <img src="{{ asset('assets/images/team/team.jpg') }}" class="shadow-lg rounded-xl w-full" alt="Auckland Lab - New Zealand">
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <h4 class="font-semibold text-slate-900 text-sm">Auckland Lab</h4>
                            <p class="text-slate-600 text-xs">New Zealand</p>
                        </div>
                    </div>
                    
                    <!-- Adelaide Lab -->
                    <div class="relative">
                        <img src="{{ asset('assets/images/team/team.jpg') }}" class="shadow-lg rounded-xl w-full" alt="Adelaide Lab - Australia">
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <h4 class="font-semibold text-slate-900 text-sm">Adelaide Lab</h4>
                            <p class="text-slate-600 text-xs">Australia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="flex mb-4">
                        <span class="text-blue-600 text-2xl font-bold mb-0"><span class="counter-value text-6xl font-bold" data-target="15">1</span>+</span>
                        <span class="self-end font-medium ms-2">Years <br> Research Excellence</span>
                    </div>

                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Global Research Network</h3>

                    <p class="text-slate-400 max-w-xl mb-6">Our interdisciplinary research team operates across two world-class facilities, bringing together experts in computer science, psychology, design, and engineering to advance the field of empathic computing.</p>

                    <!-- Lab Locations -->
                    <div class="mb-6">
                        <div class="flex items-start space-x-3 mb-4">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Auckland Laboratory</h4>
                                <p class="text-slate-400 text-sm">Located in New Zealand, our Auckland lab focuses on immersive AR/VR research and collaborative interface development.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-3 h-3 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Adelaide Laboratory</h4>
                                <p class="text-slate-400 text-sm">Based in Australia, our Adelaide lab specializes in AI emotion recognition and machine learning applications for empathic systems.</p>
                            </div>
                        </div>
                    </div>

                    <p class="text-slate-400 max-w-xl mb-6">Together, these two locations create a collaborative network of researchers passionate about creating technology that understands and responds to human emotions.</p>
                
                    <div class="mt-6">
                        <a href="{{ route('contact-us') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md me-2 mt-2"><i class="uil uil-envelope"></i> Contact us</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->

    </div><!--end container-->

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Research Team</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Meet our dedicated team of researchers, faculty members, and graduate students who are pushing the boundaries of empathic computing technology.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">

            @php
            $teams = [
                [
                    'img' => 'assets/images/team/team.jpg',
                    'name' => 'Prof. Mark Billinghurst',
                    'title' => 'Director & Founder',
                    'desc' => "Leading pioneer in empathic computing research with over 500 publications in AR/VR and HCI.",
                    'style' => 'bg-blue-400/50 dark:bg-blue-400/50',
                    'color' => 'hover:text-blue-400',
                ],
                [
                    'img' => 'assets/images/team/team.jpg',
                    'name' => 'Dr. Sarah Chen',
                    'title' => 'Senior Researcher',
                    'desc' => "Expert in AI emotion recognition and machine learning applications for empathic systems.",
                    'style' => 'bg-emerald-400/50 dark:bg-emerald-400/50',
                    'color' => 'hover:text-emerald-400',
                ],
                [
                    'img' => 'assets/images/team/team.jpg',
                    'name' => 'Dr. James Rodriguez',
                    'title' => 'VR Research Lead',
                    'desc' => "Specializes in immersive virtual environments and therapeutic VR applications.",
                    'style' => 'bg-violet-400/50 dark:bg-violet-400/50',
                    'color' => 'hover:text-violet-400',
                ],
                [
                    'img' => 'assets/images/team/team.jpg',
                    'name' => 'Dr. Emily Watson',
                    'title' => 'Psychology Researcher',
                    'desc' => "Bridges psychology and technology to understand human emotional responses to computing systems.",
                    'style' => 'bg-amber-400/50 dark:bg-amber-400/50',
                    'color' => 'hover:text-amber-400',
                ],
                [
                    'img' => 'assets/images/team/team.jpg',
                    'name' => 'Dr. Michael Kim',
                    'title' => 'AI Systems Developer',
                    'desc' => "Develops cutting-edge AI algorithms for real-time emotion recognition and response systems.",
                    'style' => 'bg-blue-400/50 dark:bg-blue-400/50',
                    'color' => 'hover:text-blue-400',
                ],
                [
                    'img' => 'assets/images/team/team.jpg',
                    'name' => 'Dr. Lisa Thompson',
                    'title' => 'UX Research Director',
                    'desc' => "Focuses on human-centered design for empathic computing interfaces and user experience.",
                    'style' => 'bg-emerald-400/50 dark:bg-emerald-400/50',
                    'color' => 'hover:text-emerald-400',
                ],
                [
                    'img' => 'assets/images/team/team.jpg',
                    'name' => 'Dr. Alex Patel',
                    'title' => 'Collaborative Systems Lead',
                    'desc' => "Researches collaborative interfaces that facilitate empathic communication between users.",
                    'style' => 'bg-violet-400/50 dark:bg-violet-400/50',
                    'color' => 'hover:text-violet-400',
                ],
                [
                    'img' => 'assets/images/team/team.jpg',
                    'name' => 'Dr. Rachel Green',
                    'title' => 'Graduate Program Coordinator',
                    'desc' => "Mentors PhD and Masters students in empathic computing research methodologies.",
                    'style' => 'bg-amber-400/50 dark:bg-amber-400/50',
                    'color' => 'hover:text-amber-400',
                ]
            ];
            @endphp

            @foreach ($teams as $item)
                <div class="lg:col-span-3 md:col-span-6 h-full">
                    <div class="team p-6 rounded-md border border-gray-100 dark:border-gray-800 group bg-white dark:bg-slate-900 h-full flex flex-col">
                        <img src="{{ asset($item['img']) }}" class="size-24 rounded-full shadow-md dark:shadow-gray-800" alt="">

                        <div class="content mt-4 flex-1 flex flex-col">
                            <a href="" class="text-lg font-medium {{ $item['color'] }} block">{{ $item['name'] }}</a>
                            <span class="text-slate-400 block">{{ $item['title'] }}</span>

                            <p class="text-slate-400 mt-4 flex-1">{{ $item['desc'] }}</p>

                            <ul class="list-none mt-4">
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="facebook" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="instagram" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="twitter" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="linkedin" class="size-4"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div><!--end container-->

</section><!--end section-->
<!-- End Section-->

<!-- Call to Action Section -->
<section class="relative md:py-24 py-16 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/images/team/team.jpg') }}');">
    <div class="absolute inset-0" style="background-color: rgba(15, 23, 43, 0.85);"></div>
    <div class="container relative z-10 px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-6 leading-tight">
                Join Our Research 
                <span class="text-emerald-400">Community</span>
            </h2>
            <p class="text-lg text-white mb-12 max-w-3xl mx-auto leading-relaxed">
                Be part of groundbreaking research that's shaping the future of human-computer interaction. We offer a collaborative environment where innovation thrives.
            </p>
        </div>

        <!-- Opportunities Grid -->
        <div class="cta-grid mb-16">
            <!-- PhD Students -->
            <div class="cta-card bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-amber-500 rounded-xl flex items-center justify-center mb-6 mx-auto">
                    <i class="uil uil-graduation-cap text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4 text-center">PhD Students</h3>
                <p class="text-white text-center mb-6">
                    Pursue cutting-edge research in empathic computing with world-class supervision and resources.
                </p>
                <ul class="text-white text-sm space-y-3">
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-400 mr-3"></i>
                        Full funding available
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-400 mr-3"></i>
                        Conference travel support
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-400 mr-3"></i>
                        Collaborative environment
                    </li>
                </ul>
            </div>

            <!-- Virtual Interns -->
            <div class="cta-card bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-amber-500 rounded-xl flex items-center justify-center mb-6 mx-auto">
                    <i class="uil uil-laptop text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4 text-center">Virtual Interns</h3>
                <p class="text-white text-center mb-6">
                    Gain hands-on research experience remotely while working on real empathic computing projects.
                </p>
                <ul class="text-white text-sm space-y-3">
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-400 mr-3"></i>
                        Remote collaboration
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-400 mr-3"></i>
                        Mentorship program
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-400 mr-3"></i>
                        Flexible schedule
                    </li>
                </ul>
            </div>

            <!-- Visiting Researchers -->
            <div class="cta-card bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300">
                <div class="w-16 h-16 bg-amber-500 rounded-xl flex items-center justify-center mb-6 mx-auto">
                    <i class="uil uil-globe text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4 text-center">Visiting Researchers</h3>
                <p class="text-white text-center mb-6">
                    Collaborate with our international team and bring your expertise to our research initiatives.
                </p>
                <ul class="text-white text-sm space-y-3">
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-400 mr-3"></i>
                        Flexible duration
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-400 mr-3"></i>
                        Global network access
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-400 mr-3"></i>
                        Research collaboration
                    </li>
                </ul>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="text-center">
            <div class="flex flex-wrap gap-6 justify-center mb-8">
                <a href="{{ route('contact-us') }}" class="group w-52 px-6 py-4 bg-white text-slate-900 font-semibold rounded-xl hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center">
                    <i class="uil uil-envelope-alt mr-2 group-hover:scale-110 transition-transform"></i>
                    Apply to Join Us
                </a>
                <a href="{{ route('research') }}" class="group w-52 px-6 py-4 border-2 border-white text-white font-semibold rounded-xl hover:bg-white/10 transition-all duration-300 backdrop-blur-sm flex items-center justify-center">
                    <i class="uil uil-search mr-2 group-hover:scale-110 transition-transform"></i>
                    Explore Our Research
                </a>
            </div>
            
            <p class="text-white text-sm">
                Have questions? <a href="{{ route('contact-us') }}" class="text-emerald-400 hover:text-emerald-300 underline font-medium">Contact us</a> to learn more about opportunities.
            </p>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
/* Force proper spacing for CTA cards */
.cta-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
}

@media (min-width: 768px) {
    .cta-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 3rem;
    }
}

@media (min-width: 1024px) {
    .cta-grid {
        gap: 4rem;
    }
}

.cta-card {
    min-height: 400px;
    display: flex;
    flex-direction: column;
}
</style>
@endpush