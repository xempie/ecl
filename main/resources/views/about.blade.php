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
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                <a href="{{ route('home') }}">Empathic Computing Lab</a>
            </li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                <i class="uil uil-angle-right-b"></i>
            </li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">About Us</li>
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

<!-- Mission & Vision Section -->
<section id="mission" class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <div class="grid lg:grid-cols-2 grid-cols-1 items-center gap-16">
            <!-- Left Image -->
            <div class="relative order-2 lg:order-1">
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
            
            <!-- Right Content -->
            <div class="order-1 lg:order-2">
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
    <div class="container relative">
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
        
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-16 items-center mb-16">
            <!-- Left Content -->
            <div>
                <div class="space-y-8">
                    <!-- Research Area 1 -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center">
                            <i class="uil uil-robot text-2xl" style="color: #60a5fa;"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">AI Emotion Recognition</h3>
                            <p class="text-slate-600">Advanced machine learning algorithms that detect and interpret human emotions through facial expressions, voice patterns, and physiological signals with unprecedented accuracy.</p>
                        </div>
                    </div>
                    
                    <!-- Research Area 2 -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-16 h-16 bg-emerald-100 rounded-xl flex items-center justify-center">
                            <i class="uil uil-mobile-android-alt text-2xl" style="color: #34d399;"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">Collaborative Interfaces</h3>
                            <p class="text-slate-600">Innovative user interfaces that adapt to individual emotional states and facilitate better human-to-human communication through technology mediation.</p>
                        </div>
                    </div>
                    
                    <!-- Research Area 3 -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-16 h-16 bg-violet-100 rounded-xl flex items-center justify-center">
                            <i class="uil uil-sim-card text-2xl" style="color: #a78bfa;"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">Immersive Reality</h3>
                            <p class="text-slate-600">Virtual and Augmented Reality environments that respond to user emotions, creating more engaging and therapeutic experiences for education, healthcare, and entertainment.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="relative">
                <img src="{{ asset('assets/images/about/about.jpg') }}" class="rounded-2xl shadow-xl w-full" alt="Research Areas and Innovation">
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-violet-600/20 rounded-2xl"></div>
                
                <!-- Floating Tech Icons -->
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-white rounded-xl shadow-lg flex items-center justify-center">
                    <i class="uil uil-brain text-3xl text-blue-600"></i>
                </div>
                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-white rounded-full shadow-lg flex items-center justify-center">
                    <i class="uil uil-heart text-2xl text-emerald-600"></i>
                </div>
            </div>
        </div>
        
        <!-- Research Impact Stats -->
        <div class="grid md:grid-cols-4 grid-cols-2 gap-8">
            <div class="text-center p-6 bg-white rounded-xl shadow-lg">
                <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                <div class="text-slate-600">Active Projects</div>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-lg">
                <div class="text-3xl font-bold text-emerald-600 mb-2">25+</div>
                <div class="text-slate-600">Researchers</div>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-lg">
                <div class="text-3xl font-bold text-violet-600 mb-2">200+</div>
                <div class="text-slate-600">Publications</div>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-lg">
                <div class="text-3xl font-bold text-amber-600 mb-2">15+</div>
                <div class="text-slate-600">Countries</div>
            </div>
        </div>
    </div>
</section>

<!-- History & Impact Section -->
<section id="history" class="relative md:py-24 py-16 bg-gradient-to-br from-slate-50 to-white">
    <div class="container relative">
        <div class="grid lg:grid-cols-2 grid-cols-1 items-center gap-16">
            <!-- Left Content -->
            <div>
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
                
                <!-- Leadership -->
                <div class="mt-12 p-6 bg-white rounded-xl shadow-lg border-l-4 border-violet-500">
                    <div class="flex items-start space-x-4">
                        <img src="{{ asset('assets/images/about/about.jpg') }}" class="w-16 h-16 rounded-full object-cover" alt="Prof. Mark Billinghurst">
                        <div>
                            <div class="font-semibold text-slate-900">Prof. Mark Billinghurst</div>
                            <div class="text-violet-600 text-sm mb-2">Director & Founder</div>
                            <div class="text-slate-600 text-sm">Leading pioneer in empathic computing research with over 500 publications and 25+ years of experience in human-computer interaction.</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Image Collage -->
            <div class="relative">
                <!-- Main Image -->
                <div class="relative">
                    <img src="{{ asset('assets/images/about/about.jpg') }}" class="rounded-2xl shadow-xl w-full" alt="Lab History and Impact">
                    <div class="absolute inset-0 bg-gradient-to-tr from-violet-600/20 to-blue-600/20 rounded-2xl"></div>
                </div>
                
                <!-- Overlay Images -->
                <div class="absolute -top-8 -right-8 w-32 h-32 rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/about/about.jpg') }}" class="w-full h-full object-cover" alt="University Campus">
                </div>
                <div class="absolute -bottom-8 -left-8 w-40 h-24 rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/about/about.jpg') }}" class="w-full h-full object-cover" alt="Research Team">
                </div>
                
                <!-- Impact Badge -->
                <div class="absolute top-4 left-4 bg-white rounded-xl shadow-lg p-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-violet-600">15+</div>
                        <div class="text-xs text-slate-600">Years Impact</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="relative md:py-24 py-16 bg-gradient-to-r from-blue-600 to-violet-600">
    <div class="container relative">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Join Our Research Community</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                We're actively seeking talented students, post-docs, and visiting researchers to contribute to the future of empathic computing.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('contact-us') }}" class="px-8 py-4 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300 shadow-lg">
                    Join Our Team
                </a>
                <a href="{{ route('research') }}" class="px-8 py-4 border-2 border-white text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-300">
                    Explore Research
                </a>
            </div>
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
</style>
@endpush