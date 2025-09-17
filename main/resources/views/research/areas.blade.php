@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - Research Areas | AI, AR, VR, HCI')

@section('description', 'Explore our cutting-edge research areas in Artificial Intelligence, Augmented Reality, Virtual Reality, and Human-Computer Interaction at the Empathic Computing Research Lab.')

@section('keywords', 'AI research, AR research, VR research, HCI research, artificial intelligence, augmented reality, virtual reality, human-computer interaction, empathic computing')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1925&q=80');">
    <div class="absolute inset-0 bg-black/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="text-4xl lg:text-5xl text-white font-bold">Research Areas</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto mt-3">Advancing the frontiers of empathic computing through interdisciplinary research in AI, AR, VR, and Human-Computer Interaction</p>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-16 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                <a href="{{ route('home') }}">Empathic Computing Lab</a>
            </li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                <i class="uil uil-angle-right"></i>
            </li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                <a href="javascript:void(0)">Research</a>
            </li>
            <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                <i class="uil uil-angle-right"></i>
            </li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Research Areas</li>
        </ul>
    </div>
    
    <!-- Curved Bottom Design -->
    <div class="absolute bottom-0 start-0 end-0">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 52 720 52C720 52 405 52 0 48Z" fill="currentColor" class="text-white"></path>
        </svg>
    </div>
</section><!--end section-->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        
        <!-- Research Overview -->
        <div class="grid grid-cols-1 pb-8 text-center mb-16">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Research Focus</h3>
            <p class="text-slate-400 max-w-3xl mx-auto text-lg">We advance empathic computing through cutting-edge research in four core areas, developing emotionally intelligent systems that understand and respond to human emotions through advanced technologies.</p>
        </div><!--end grid-->

        <!-- Research Areas Grid -->
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-12">
            
            <!-- AI Research Area -->
            <div class="group h-full">
                <div class="relative overflow-hidden rounded-2xl h-full bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-200 hover:border-blue-400 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/20 to-blue-600/20 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="relative p-8 h-full flex flex-col">
                        <!-- AI Icon -->
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="uil uil-brain text-3xl text-white"></i>
                        </div>
                        
                        <!-- Content -->
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-blue-600 transition-colors">Artificial Intelligence</h4>
                            <p class="text-slate-600 text-base mb-6 leading-relaxed">Developing emotion recognition systems, machine learning algorithms, and AI models that understand and interpret human emotional states through facial expressions, voice analysis, and behavioral patterns.</p>
                            
                            <!-- Key Focus Areas -->
                            <div class="space-y-3 mb-6">
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Emotion Recognition & Classification</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Natural Language Processing for Emotional Context</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Deep Learning for Behavioral Analysis</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Learn More Link -->
                        <div class="mt-auto">
                            <a href="{{ route('research.projects') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors group/link">
                                Explore AI Projects
                                <i class="uil uil-arrow-right ml-2 group-hover/link:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AR Research Area -->
            <div class="group h-full">
                <div class="relative overflow-hidden rounded-2xl h-full bg-gradient-to-br from-emerald-50 to-emerald-100 border border-emerald-200 hover:border-emerald-400 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-emerald-400/20 to-emerald-600/20 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="relative p-8 h-full flex flex-col">
                        <!-- AR Icon -->
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="uil uil-mobile-android text-3xl text-white"></i>
                        </div>
                        
                        <!-- Content -->
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-emerald-600 transition-colors">Augmented Reality</h4>
                            <p class="text-slate-600 text-base mb-6 leading-relaxed">Creating immersive AR experiences that respond to user emotions, enhancing real-world interactions with emotionally-aware digital overlays and adaptive interface design.</p>
                            
                            <!-- Key Focus Areas -->
                            <div class="space-y-3 mb-6">
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Emotion-Aware AR Interfaces</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Context-Sensitive Information Display</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Adaptive User Experience Design</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Learn More Link -->
                        <div class="mt-auto">
                            <a href="{{ route('research.projects') }}" class="inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 transition-colors group/link">
                                Explore AR Projects
                                <i class="uil uil-arrow-right ml-2 group-hover/link:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VR Research Area -->
            <div class="group h-full">
                <div class="relative overflow-hidden rounded-2xl h-full bg-gradient-to-br from-violet-50 to-violet-100 border border-violet-200 hover:border-violet-400 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-violet-400/20 to-violet-600/20 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="relative p-8 h-full flex flex-col">
                        <!-- VR Icon -->
                        <div class="w-20 h-20 bg-gradient-to-br from-violet-500 to-violet-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="uil uil-headphones text-3xl text-white"></i>
                        </div>
                        
                        <!-- Content -->
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-violet-600 transition-colors">Virtual Reality</h4>
                            <p class="text-slate-600 text-base mb-6 leading-relaxed">Building emotionally responsive virtual environments that adapt to user psychological states, creating immersive experiences for therapy, education, and social interaction.</p>
                            
                            <!-- Key Focus Areas -->
                            <div class="space-y-3 mb-6">
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Therapeutic VR Applications</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Immersive Social Virtual Spaces</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-violet-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Emotion-Driven Environment Adaptation</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Learn More Link -->
                        <div class="mt-auto">
                            <a href="{{ route('research.projects') }}" class="inline-flex items-center text-violet-600 font-semibold hover:text-violet-700 transition-colors group/link">
                                Explore VR Projects
                                <i class="uil uil-arrow-right ml-2 group-hover/link:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HCI Research Area -->
            <div class="group h-full">
                <div class="relative overflow-hidden rounded-2xl h-full bg-gradient-to-br from-amber-50 to-amber-100 border border-amber-200 hover:border-amber-400 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-amber-400/20 to-amber-600/20 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="relative p-8 h-full flex flex-col">
                        <!-- HCI Icon -->
                        <div class="w-20 h-20 bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="uil uil-users-alt text-3xl text-white"></i>
                        </div>
                        
                        <!-- Content -->
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-amber-600 transition-colors">Human-Computer Interaction</h4>
                            <p class="text-slate-600 text-base mb-6 leading-relaxed">Researching intuitive interaction paradigms that understand human emotions and intentions, developing interfaces that adapt to user needs and emotional states in real-time.</p>
                            
                            <!-- Key Focus Areas -->
                            <div class="space-y-3 mb-6">
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-amber-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Adaptive User Interface Design</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-amber-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Multimodal Interaction Systems</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-amber-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-slate-700 text-sm font-medium">Accessibility & Inclusive Design</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Learn More Link -->
                        <div class="mt-auto">
                            <a href="{{ route('research.projects') }}" class="inline-flex items-center text-amber-600 font-semibold hover:text-amber-700 transition-colors group/link">
                                Explore HCI Projects
                                <i class="uil uil-arrow-right ml-2 group-hover/link:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--end grid-->

        <!-- Research Impact Section -->
        <div class="grid grid-cols-1 mt-20">
            <div class="bg-gradient-to-r from-slate-50 to-slate-100 rounded-3xl p-12 text-center">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-3xl font-bold text-slate-900 mb-6">Interdisciplinary Research Impact</h3>
                    <p class="text-slate-600 text-lg mb-8 leading-relaxed">
                        Our research transcends traditional boundaries by combining insights from psychology, computer science, design, and neuroscience. We develop technologies that not only respond to human emotions but also enhance human wellbeing, productivity, and quality of life.
                    </p>
                    
                    <!-- Impact Stats -->
                    <div class="grid md:grid-cols-4 grid-cols-2 gap-8 mb-8">
                        <div>
                            <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                            <div class="text-slate-600 text-sm font-medium">Research Publications</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-emerald-600 mb-2">15+</div>
                            <div class="text-slate-600 text-sm font-medium">Active Projects</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-violet-600 mb-2">25+</div>
                            <div class="text-slate-600 text-sm font-medium">Researchers</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-amber-600 mb-2">8+</div>
                            <div class="text-slate-600 text-sm font-medium">Industry Partners</div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('research.projects') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-lg">
                            <i class="uil uil-flask"></i> View Our Projects
                        </a>
                        <a href="{{ route('research.publications') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-white hover:bg-slate-50 border-slate-300 hover:border-slate-400 text-slate-700 rounded-lg">
                            <i class="uil uil-file-alt"></i> Browse Publications
                        </a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->

    </div><!--end container-->
</section><!--end section-->

@endsection