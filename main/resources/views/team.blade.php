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

    <!-- Director Section -->
    @if($director)
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Research Director</h3>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px] items-start">
            <div class="md:col-span-4">
                <img src="{{ $director->image_url }}" class="w-full aspect-square object-cover rounded-md shadow-lg" alt="{{ $director->name }}">
            </div>
            <div class="md:col-span-8">
                <div class="p-6">
                    <h4 class="text-2xl font-semibold text-slate-900 mb-2">{{ $director->name }}</h4>
                    <p class="text-blue-600 font-medium mb-4">{{ $director->title }}</p>
                    @if($director->bio)
                    <div class="text-slate-600 mb-6 leading-relaxed text-sm">
                        <div class="expandable-text" data-lines="10">
                            <div class="text-content line-clamp-10">
                                {!! nl2br(e($director->bio)) !!}
                            </div>
                            <button class="show-more-btn text-blue-600 hover:text-blue-800 text-xs font-medium mt-2 focus:outline-none cursor-pointer" onclick="toggleText(this)">
                                Show more...
                            </button>
                        </div>
                    </div>
                    @endif
                    
                    <div class="grid md:grid-cols-2 gap-4 mb-6">
                        @if($director->research_interests)
                        <div>
                            <h5 class="font-semibold text-slate-900 mb-2">Research Interests</h5>
                            <div class="text-slate-600 text-sm space-y-1">
                                {!! nl2br(e($director->research_interests)) !!}
                            </div>
                        </div>
                        @endif
                        @if($director->achievements)
                        <div>
                            <h5 class="font-semibold text-slate-900 mb-2">Achievements</h5>
                            <div class="text-slate-600 text-sm space-y-1">
                                {!! nl2br(e($director->achievements)) !!}
                            </div>
                        </div>
                        @endif
                    </div>
                    
                    <div class="flex space-x-3">
                        @if($director->social_email)
                        <a href="mailto:{{ $director->social_email }}" class="size-10 inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white rounded-md transition-colors">
                            <i data-feather="mail" class="size-4"></i>
                        </a>
                        @endif
                        @if($director->social_linkedin)
                        <a href="{{ $director->social_linkedin }}" target="_blank" class="size-10 inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white rounded-md transition-colors">
                            <i data-feather="linkedin" class="size-4"></i>
                        </a>
                        @endif
                        @if($director->social_google_scholar)
                        <a href="{{ $director->social_google_scholar }}" target="_blank" class="size-10 inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white rounded-md transition-colors">
                            <i data-feather="book-open" class="size-4"></i>
                        </a>
                        @endif
                        @if($director->social_website)
                        <a href="{{ $director->social_website }}" target="_blank" class="size-10 inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white rounded-md transition-colors">
                            <i data-feather="globe" class="size-4"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
    @endif

    <!-- Auckland Lab Members Section -->
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Auckland Lab Members</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Our Auckland team specializes in immersive AR/VR research and collaborative interface development.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 mt-4 gap-[30px]">
            @forelse($aucklandMembers as $member)
                <div class="h-full">
                    <a href="{{ url('/team/' . $member->slug) }}" class="block h-full group">
                        <div class="team p-6 rounded-md border border-gray-100 h-full flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg hover:-translate-y-2" style="background-color: #f6f6f6;">
                            <img src="{{ $member->image_url }}" class="w-full aspect-square object-cover rounded-md shadow-md transition-all duration-300 group-hover:shadow-xl" alt="{{ $member->name }}">
                            <div class="content mt-4 flex-1 flex flex-col">
                                <h4 class="text-lg font-medium text-slate-900 mb-1 group-hover:text-blue-600 transition-colors">{{ $member->name }}</h4>
                                <p class="text-slate-600 text-sm group-hover:text-slate-700 transition-colors">{{ $member->title }}</p>
                                <div class="flex space-x-2 mt-4">
                                    @if($member->social_email)
                                    <span class="size-7 inline-flex items-center justify-center bg-blue-100 text-blue-600 rounded-md">
                                        <i data-feather="mail" class="size-3"></i>
                                    </span>
                                    @endif
                                    @if($member->social_linkedin)
                                    <span class="size-7 inline-flex items-center justify-center bg-blue-100 text-blue-600 rounded-md">
                                        <i data-feather="linkedin" class="size-3"></i>
                                    </span>
                                    @endif
                                    @if($member->social_google_scholar)
                                    <span class="size-7 inline-flex items-center justify-center bg-blue-100 text-blue-600 rounded-md">
                                        <i data-feather="book-open" class="size-3"></i>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-slate-500 text-lg">No Auckland lab members found.</p>
                </div>
            @endforelse
        </div>
    </div><!--end container-->

    <!-- Adelaide Lab Members Section -->
    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Adelaide Lab Members</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Our Adelaide team focuses on AI emotion recognition and machine learning applications for empathic systems.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 mt-4 gap-[30px]">
            @forelse($adelaideMembers as $member)
                <div class="h-full">
                    <a href="{{ url('/team/' . $member->slug) }}" class="block h-full group">
                        <div class="team p-6 rounded-md border border-gray-100 h-full flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg hover:-translate-y-2" style="background-color: #f6f6f6;">
                            <img src="{{ $member->image_url }}" class="w-full aspect-square object-cover rounded-md shadow-md transition-all duration-300 group-hover:shadow-xl" alt="{{ $member->name }}">
                            <div class="content mt-4 flex-1 flex flex-col">
                                <h4 class="text-lg font-medium text-slate-900 mb-1 group-hover:text-emerald-600 transition-colors">{{ $member->name }}</h4>
                                <p class="text-slate-600 text-sm group-hover:text-slate-700 transition-colors">{{ $member->title }}</p>
                                <div class="flex space-x-2 mt-4">
                                    @if($member->social_email)
                                    <span class="size-7 inline-flex items-center justify-center bg-emerald-100 text-emerald-600 rounded-md">
                                        <i data-feather="mail" class="size-3"></i>
                                    </span>
                                    @endif
                                    @if($member->social_linkedin)
                                    <span class="size-7 inline-flex items-center justify-center bg-emerald-100 text-emerald-600 rounded-md">
                                        <i data-feather="linkedin" class="size-3"></i>
                                    </span>
                                    @endif
                                    @if($member->social_google_scholar)
                                    <span class="size-7 inline-flex items-center justify-center bg-emerald-100 text-emerald-600 rounded-md">
                                        <i data-feather="book-open" class="size-3"></i>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-slate-500 text-lg">No Adelaide lab members found.</p>
                </div>
            @endforelse
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

/* Expandable text styles */
.line-clamp-10 {
    display: -webkit-box;
    -webkit-line-clamp: 10;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.expandable-text .text-content {
    transition: all 0.3s ease;
}

.expandable-text.expanded .text-content {
    -webkit-line-clamp: unset;
    overflow: visible;
    display: block;
}
</style>
@endpush

@push('scripts')
<script>
// Expandable text functionality
function toggleText(button) {
    const expandableDiv = button.closest('.expandable-text');
    const textContent = expandableDiv.querySelector('.text-content');
    const isExpanded = expandableDiv.classList.contains('expanded');

    if (isExpanded) {
        // Collapse the text
        expandableDiv.classList.remove('expanded');
        textContent.classList.add('line-clamp-10');
        button.textContent = 'Show more...';
    } else {
        // Expand the text
        expandableDiv.classList.add('expanded');
        textContent.classList.remove('line-clamp-10');
        button.textContent = 'Show less';
    }
}
</script>
@endpush