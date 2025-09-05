@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - About Us | Leading AI & HCI Research')

@section('description', 'Learn about our groundbreaking research in empathic computing, AI emotion recognition, and human-computer interaction. Discover our mission, vision, and innovative projects.')

@section('keywords', 'empathic computing, about us, research lab, AI emotion recognition, human-computer interaction, University of South Australia, Prof. Mark Billinghurst')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/about/about.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">About Us</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Pioneering the future of empathic computing through revolutionary research in AI emotion recognition, virtual reality, and human-computer interaction.</p>
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

<!-- Mission & Vision Section -->
<section id="mission" class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <div class="grid lg:grid-cols-2 grid-cols-1 items-center gap-20 lg:gap-24">
            <!-- Right Image -->
            <div class="relative order-2 lg:order-2 lg:pl-8">
                <div class="relative">
                    <img src="{{ asset('assets/images/about/about.jpg') }}" class="rounded-2xl shadow-xl w-full" alt="Our Mission and Vision">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 to-blue-500/20 rounded-2xl"></div>
                </div>
                <!-- Stats Overlay -->
                <div class="absolute -bottom-8 -right-8 bg-white rounded-2xl shadow-xl p-6 border-l-4 border-emerald-500">
                    <div class="flex items-center space-x-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-emerald-600">15+</div>
                            <div class="text-sm text-slate-600">Years Research</div>
                        </div>
                        <div class="w-px h-12 bg-slate-200"></div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600">200+</div>
                            <div class="text-sm text-slate-600">Publications</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left Content -->
            <div class="order-1 lg:order-1 lg:pr-8">
                <div class="mb-8">
                    <h6 class="text-emerald-600 text-sm font-bold uppercase mb-2 tracking-wider">Our Purpose</h6>
                    <h2 class="text-4xl font-bold text-slate-900 mb-6">
                        Revolutionizing Human-Computer 
                        <span class="text-violet-600">Emotional Intelligence</span>
                    </h2>
                </div>
                
                <!-- Mission -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4 flex items-center">
                        <div class="w-3 h-3 bg-emerald-500 rounded-full mr-3"></div>
                        Our Mission
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        To develop groundbreaking computer systems that recognize, understand, and share human emotions, creating technology that enhances empathy and human connection. We strive to make empathic computing mainstream through innovative research in both software and hardware components.
                    </p>
                </div>
                
                <!-- Vision -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4 flex items-center">
                        <div class="w-3 h-3 bg-violet-500 rounded-full mr-3"></div>
                        Our Vision
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        A future where technology understands and responds to human emotions naturally, fostering deeper connections between people and creating more intuitive, empathetic digital experiences that improve quality of life worldwide.
                    </p>
                </div>
                
                <!-- Core Values -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-center p-4 bg-emerald-50 rounded-xl">
                        <i class="uil uil-heart text-2xl text-emerald-600 mr-3"></i>
                        <div>
                            <div class="font-semibold text-slate-900">Empathy First</div>
                            <div class="text-sm text-slate-600">Human-centered approach</div>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-violet-50 rounded-xl">
                        <i class="uil uil-brain text-2xl text-violet-600 mr-3"></i>
                        <div>
                            <div class="font-semibold text-slate-900">Innovation</div>
                            <div class="text-sm text-slate-600">Cutting-edge research</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Research Areas & Innovation Section -->
<section id="research" class="relative md:py-24 py-16 research-areas-grid-bg">
    <div class="container relative px-6 lg:px-8">
        <div class="text-center mb-16">
            <h6 class="text-blue-600 text-sm font-bold uppercase mb-2 tracking-wider">Innovation Hub</h6>
            <h2 class="text-4xl font-bold text-slate-900 mb-6">
                Leading Research in 
                <span class="text-blue-600">Empathic Technologies</span>
            </h2>
            <p class="text-slate-600 max-w-3xl mx-auto text-lg">
                Our interdisciplinary research spans multiple cutting-edge domains, from AI emotion recognition to immersive virtual environments, all focused on creating more empathetic technology.
            </p>
        </div>
        
        <div class="research-grid mb-20">
            <!-- Text Content -->
            <div class="research-content">
                <div class="research-blocks">
                    <!-- Research Area 1 -->
                    <div class="mb-12">
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">AI Emotion Recognition</h3>
                        <p class="text-slate-600 leading-relaxed">Advanced machine learning algorithms that detect and interpret human emotions through facial expressions, voice patterns, and physiological signals with unprecedented accuracy.</p>
                    </div>
                    
                    <!-- Research Area 2 -->
                    <div class="mb-12">
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Collaborative Interfaces</h3>
                        <p class="text-slate-600 leading-relaxed">Innovative user interfaces that adapt to individual emotional states and facilitate better human-to-human communication through technology mediation.</p>
                    </div>
                    
                    <!-- Research Area 3 -->
                    <div class="mb-0">
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Immersive Reality</h3>
                        <p class="text-slate-600 leading-relaxed">Virtual and Augmented Reality environments that respond to user emotions, creating more engaging and therapeutic experiences for education, healthcare, and entertainment.</p>
                    </div>
                </div>
            </div>
            
            <!-- Image Content -->
            <div class="relative research-image">
                <img src="{{ asset('assets/images/about/about.jpg') }}" class="rounded-2xl shadow-xl w-full" alt="Research Areas and Innovation">
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-violet-600/20 rounded-2xl"></div>
            </div>
        </div>
        
        <!-- Research Impact Stats -->
        <div class="stats-grid">
            <div class="stats-card text-center p-8 bg-white rounded-xl shadow-lg">
                <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                <div class="text-slate-600">Active Projects</div>
            </div>
            <div class="stats-card text-center p-8 bg-white rounded-xl shadow-lg">
                <div class="text-3xl font-bold text-emerald-600 mb-2">25+</div>
                <div class="text-slate-600">Researchers</div>
            </div>
            <div class="stats-card text-center p-8 bg-white rounded-xl shadow-lg">
                <div class="text-3xl font-bold text-violet-600 mb-2">200+</div>
                <div class="text-slate-600">Publications</div>
            </div>
            <div class="stats-card text-center p-8 bg-white rounded-xl shadow-lg">
                <div class="text-3xl font-bold text-amber-600 mb-2">15+</div>
                <div class="text-slate-600">Countries</div>
            </div>
        </div>
    </div>
</section>

<!-- History & Impact Section -->
<section id="history" class="relative md:py-24 py-16 bg-gradient-to-br from-slate-50 to-white">
    <div class="container relative">
        <div class="grid lg:grid-cols-2 grid-cols-1 items-center gap-20 lg:gap-24">
            <!-- Left Content -->
            <div class="order-1 lg:order-1 lg:pr-8">
                <div class="mb-8">
                    <h6 class="text-violet-600 text-sm font-bold uppercase mb-2 tracking-wider">Our Journey</h6>
                    <h2 class="text-4xl font-bold text-slate-900 mb-6">
                        15 Years of Pioneering 
                        <span class="text-violet-600">Empathic Computing</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-8">
                        Founded at the University of South Australia under the visionary leadership of Prof. Mark Billinghurst, our lab has been at the forefront of empathic computing research, transforming how technology understands and responds to human emotions.
                    </p>
                </div>
                
                <!-- Timeline -->
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-4 h-4 bg-violet-500 rounded-full mt-2"></div>
                        <div>
                            <div class="font-semibold text-slate-900">2008 - Foundation</div>
                            <div class="text-slate-600">Established the Empathic Computing Research Lab at University of South Australia</div>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-4 h-4 bg-blue-500 rounded-full mt-2"></div>
                        <div>
                            <div class="font-semibold text-slate-900">2012 - Breakthrough</div>
                            <div class="text-slate-600">First successful real-time emotion recognition system with 85% accuracy</div>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-4 h-4 bg-emerald-500 rounded-full mt-2"></div>
                        <div>
                            <div class="font-semibold text-slate-900">2018 - Innovation</div>
                            <div class="text-slate-600">Launched collaborative interfaces research program with industry partnerships</div>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-4 h-4 bg-amber-500 rounded-full mt-2"></div>
                        <div>
                            <div class="font-semibold text-slate-900">2024 - Present</div>
                            <div class="text-slate-600">Leading global research in AI-driven empathic systems with 97% emotion recognition accuracy</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Image Collage -->
            <div class="relative order-2 lg:order-2 lg:pl-12 xl:pl-16 p-4">
                <!-- Main Image -->
                <div class="relative">
                    <img src="{{ asset('assets/images/about/about.jpg') }}" class="rounded-2xl shadow-xl w-full" alt="Lab History and Impact">
                    <div class="absolute inset-0 bg-gradient-to-tr from-violet-600/20 to-blue-600/20 rounded-2xl"></div>
                </div>
            </div>
        </div>
    </div>
</section>

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
.animation-delay-2000 {
    animation-delay: 2s;
}
.animation-delay-4000 {
    animation-delay: 4s;
}

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

/* Research section spacing */
.research-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 3rem;
    align-items: center;
}

@media (min-width: 1024px) {
    .research-grid {
        grid-template-columns: 1fr 1fr;
        gap: 6rem;
    }
    
    .research-image {
        order: 1;
        padding-right: 2rem;
    }
    
    .research-content {
        order: 2;
        padding-left: 2rem;
    }
}

.research-blocks > div {
    margin-bottom: 3rem;
}

.research-blocks > div:last-child {
    margin-bottom: 0;
}

/* Stats cards spacing */
.stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
}

@media (min-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(4, 1fr);
        gap: 3rem;
    }
}

@media (min-width: 1024px) {
    .stats-grid {
        gap: 4rem;
    }
}

.stats-card {
    min-height: 120px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
</style>
@endpush