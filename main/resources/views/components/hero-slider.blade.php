<!-- Start Hero -->
<section class="swiper mySwiper swiper-slider-hero relative block h-screen" id="home">
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide flex items-center overflow-hidden">
            <div class="slide-inner absolute start-0 top-0 w-full h-full slide-bg-image flex items-center bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/slider/slider01.jpg') }}');">
                <div class="absolute inset-0 bg-blue-900/75"></div>
                <div class="container relative">
                    <div class="grid grid-cols-1">
                        <div class="text-center">
                            <h1 class="font-semibold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">
                                Advancing Human-Computer <br> Interaction Research
                            </h1>
                            <p class="text-white/70 text-lg max-w-2xl mx-auto">
                                Exploring the intersection of technology and human emotion to create more empathetic and intuitive computing systems that understand and respond to human needs.
                            </p>
                            
                            <div class="mt-6">
                                <a href="{{ url('/research') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md me-2">
                                    Explore Research
                                </a>
                                <a href="{{ url('/about') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-white border-white hover:border-white text-white hover:text-slate-900 rounded-md">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end slide-inner --> 
        </div> <!-- end swiper-slide -->

        <!-- Slide 2 -->
        <div class="swiper-slide flex items-center overflow-hidden">
            <div class="slide-inner absolute start-0 top-0 w-full h-full slide-bg-image flex items-center bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/slider/slider02.jpg') }}');">
                <div class="absolute inset-0 bg-blue-900/75"></div>
                <div class="container relative">
                    <div class="grid grid-cols-1">
                        <div class="text-center">
                            <h1 class="font-semibold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">
                                Bridging Technology <br> and Human Experience
                            </h1>
                            <p class="text-white/70 text-lg max-w-2xl mx-auto">
                                Our interdisciplinary approach combines computer science, psychology, and design to develop computing systems that are more intuitive, accessible, and emotionally intelligent.
                            </p>
                            
                            <div class="mt-6">
                                <a href="{{ url('/team') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md me-2">
                                    Meet Our Team
                                </a>
                                <a href="{{ url('/publications') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-white border-white hover:border-white text-white hover:text-slate-900 rounded-md">
                                    View Publications
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end slide-inner --> 
        </div> <!-- end swiper-slide -->

        <!-- Slide 3 -->
        <div class="swiper-slide flex items-center overflow-hidden">
            <div class="slide-inner absolute start-0 top-0 w-full h-full slide-bg-image flex items-center bg-top bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/slider/slider03.jpg') }}');">
                <div class="absolute inset-0 bg-blue-900/75"></div>
                <div class="container relative">
                    <div class="grid grid-cols-1">
                        <div class="text-center">
                            <h1 class="font-semibold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">
                                Innovative Solutions for <br> Tomorrow's Challenges
                            </h1>
                            <p class="text-white/70 text-lg max-w-2xl mx-auto">
                                From emotion recognition systems to adaptive user interfaces, we're developing the next generation of empathetic computing technologies that understand and adapt to human behavior.
                            </p>
                            
                            <div class="mt-6">
                                <a href="{{ url('/projects') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md me-2">
                                    View Projects
                                </a>
                                <a href="{{ url('/events') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-white border-white hover:border-white text-white hover:text-slate-900 rounded-md">
                                    Upcoming Events
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end slide-inner --> 
        </div> <!-- end swiper-slide -->
    </div>
    <!-- end swiper-wrapper -->

    <!-- Swiper controls -->
    <div class="swiper-button-next bg-transparent size-[45px] leading-[45px] -mt-[22px] bg-none border border-solid border-white/50 text-white hover:bg-blue-600 hover:border-blue-600 rounded-full text-center"></div>
    <div class="swiper-button-prev bg-transparent size-[45px] leading-[45px] -mt-[22px] bg-none border border-solid border-white/50 text-white hover:bg-blue-600 hover:border-blue-600 rounded-full text-center"></div>
    
    <!-- Pagination dots -->
    <div class="swiper-pagination"></div>
</section><!--end section-->
<!-- Hero End -->