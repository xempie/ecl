<!-- About Us Section -->
<section class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <!-- Left Image -->
            <div class="md:col-span-6">
                <div class="relative">
                    <img src="{{ asset('assets/images/about/research-lab.jpg') }}" class="rounded-xl shadow-lg" alt="Empathic Computing Research Lab">
                    <!-- Optional: Floating element for visual interest -->
                    <div class="absolute -bottom-5 -end-5 size-20 bg-emerald-500 rounded-xl shadow-lg flex items-center justify-center">
                        <i class="uil uil-brain text-2xl text-white"></i>
                    </div>
                </div>
            </div>

            <!-- Right Text Content -->
            <div class="md:col-span-6">
                <div class="lg:ms-8">
                    <h6 class="text-emerald-600 text-sm font-bold uppercase mb-2">About Our Lab</h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-slate-900">
                        Pioneering the Future of <span class="text-violet-600">Human-Computer Interaction</span>
                    </h3>
                    
                    <p class="text-slate-400 max-w-xl mb-6">
                        Our Empathic Computing Research Lab is at the forefront of developing emotionally intelligent systems that understand, respond to, and adapt with human emotions and behaviors. We bridge the gap between technology and human experience through cutting-edge research in AI, AR/VR, and adaptive interfaces.
                    </p>

                    <!-- Key Points -->
                    <ul class="list-none text-slate-400">
                        <li class="mb-2 flex items-center">
                            <i class="uil uil-check-circle text-emerald-500 text-xl me-2"></i>
                            Advanced AI and Machine Learning for emotion recognition
                        </li>
                        <li class="mb-2 flex items-center">
                            <i class="uil uil-check-circle text-emerald-500 text-xl me-2"></i>
                            Immersive AR/VR environments for empathetic computing
                        </li>
                        <li class="mb-2 flex items-center">
                            <i class="uil uil-check-circle text-emerald-500 text-xl me-2"></i>
                            Human-centered design and adaptive user interfaces
                        </li>
                        <li class="mb-2 flex items-center">
                            <i class="uil uil-check-circle text-emerald-500 text-xl me-2"></i>
                            Interdisciplinary research collaborations worldwide
                        </li>
                    </ul>

                    <!-- Statistics -->
                    <div class="grid grid-cols-2 gap-4 mt-6">
                        <div class="text-center p-4 bg-emerald-50 rounded-lg">
                            <h4 class="text-2xl font-bold text-emerald-600 mb-1">50+</h4>
                            <p class="text-sm text-slate-600">Research Projects</p>
                        </div>
                        <div class="text-center p-4 bg-violet-50 rounded-lg">
                            <h4 class="text-2xl font-bold text-violet-600 mb-1">200+</h4>
                            <p class="text-sm text-slate-600">Publications</p>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="mt-6">
                        <a href="{{ url('/about') }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md me-2">
                            Learn More About Us
                            <i class="uil uil-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End About Us Section -->