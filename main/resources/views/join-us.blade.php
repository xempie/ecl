@extends('layouts.main')

@section('title', 'Join Us - Virtual Internship Program | Empathic Computing Research Lab')

@section('description', 'Join our Virtual Internship Program and collaborate on cutting-edge research remotely. Gain experience, contribute to publications, and enhance your academic profile.')

@section('keywords', 'virtual internship, remote collaboration, research experience, empathic computing, student opportunities, research publications')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/about/about.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">Join Our Virtual Internship Program</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Collaborate remotely on groundbreaking research and accelerate your academic career through innovative empathic computing projects.</p>
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

<!-- Main Information Section -->
<section class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <div class="grid lg:grid-cols-2 grid-cols-1 items-center gap-6">
            <!-- Left Image -->
            <div class="relative order-1 lg:order-1">
                <div class="relative">
                    <img src="{{ asset('assets/images/about/research-lab.jpg') }}" class="rounded-2xl shadow-xl w-full" alt="Virtual Collaboration">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-violet-500/20 rounded-2xl"></div>
                </div>
                <!-- Floating Stats Card -->
                <div class="absolute -bottom-8 -right-8 bg-white rounded-2xl shadow-xl p-6 border-l-4 border-blue-500">
                    <div class="flex items-center space-x-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600">100+</div>
                            <div class="text-sm text-slate-600">Virtual Interns</div>
                        </div>
                        <div class="w-px h-12 bg-slate-200"></div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-violet-600">50+</div>
                            <div class="text-sm text-slate-600">Countries</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="order-2 lg:order-2">
                <div class="mb-8">
                    <h6 class="text-blue-600 text-sm font-bold uppercase mb-2 tracking-wider">Virtual Opportunities</h6>
                    <h2 class="text-4xl font-bold text-slate-900 mb-6">
                        Advance Your Research Career
                        <span class="text-blue-600">From Anywhere</span>
                    </h2>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        Our Virtual Internship Program offers students and researchers worldwide the opportunity to collaborate on cutting-edge empathic computing research remotely. Work alongside leading experts, contribute to groundbreaking projects, and enhance your academic profile.
                    </p>
                </div>

                <!-- Program Overview -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4 flex items-center">
                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                        What We Offer
                    </h3>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex items-start">
                            <i class="uil uil-check text-emerald-500 text-lg mr-3 -mt-2"></i>
                            <span>Collaborative research on real-world projects in AI, VR, AR, and HCI</span>
                        </li>
                        <li class="flex items-start">
                            <i class="uil uil-check text-emerald-500 text-lg mr-3 -mt-2"></i>
                            <span>Mentorship from experienced researchers and faculty</span>
                        </li>
                        <li class="flex items-start">
                            <i class="uil uil-check text-emerald-500 text-lg mr-3 -mt-2"></i>
                            <span>Contribution to high-impact publications and research papers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="uil uil-check text-emerald-500 text-lg mr-3 -mt-2"></i>
                            <span>Flexible schedule accommodating your academic commitments</span>
                        </li>
                    </ul>
                </div>

                <!-- Requirements -->
                <div class="bg-slate-50 rounded-xl p-6">
                    <h4 class="text-lg font-semibold text-slate-900 mb-3">Who Can Apply?</h4>
                    <p class="text-slate-600 mb-3">We welcome applications from:</p>
                    <ul class="text-slate-600 space-y-2">
                        <li class="flex items-center">
                            <i class="uil uil-graduation-cap text-blue-500 mr-2"></i>
                            Undergraduate and graduate students
                        </li>
                        <li class="flex items-center">
                            <i class="uil uil-user-md text-blue-500 mr-2"></i>
                            Early-career researchers and postdocs
                        </li>
                        <li class="flex items-center">
                            <i class="uil uil-laptop text-blue-500 mr-2"></i>
                            Professionals seeking research experience
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="relative md:py-24 py-16 bg-gradient-to-br from-slate-50 to-white">
    <div class="container relative">
        <div class="text-center mb-16">
            <h6 class="text-violet-600 text-sm font-bold uppercase mb-2 tracking-wider">Program Benefits</h6>
            <h2 class="text-4xl font-bold text-slate-900 mb-6">
                Why Join Our
                <span class="text-violet-600">Virtual Program?</span>
            </h2>
            <p class="text-slate-600 max-w-3xl mx-auto text-lg">
                Our program offers unique opportunities to advance your research career while gaining valuable experience in cutting-edge technologies.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
            <!-- Publication Opportunities -->
            <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 h-full">
                <div class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-200 transition-all">
                    <i class="uil uil-file-alt text-2xl text-emerald-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Publication Co-authorship</h3>
                <p class="text-slate-600 leading-relaxed">
                    Contribute to high-impact research papers and publications. Increase your citation count and establish yourself in the academic community.
                </p>
                <ul class="mt-4 space-y-2 text-slate-600">
                    <li class="flex items-center">
                        <i class="uil uil-check text-emerald-500 mr-2"></i>
                        Co-author research papers
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-emerald-500 mr-2"></i>
                        Conference presentations
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-emerald-500 mr-2"></i>
                        Journal submissions
                    </li>
                </ul>
            </div>

            <!-- Research Experience -->
            <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 h-full">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-200 transition-all">
                    <i class="uil uil-brain text-2xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Hands-on Research Experience</h3>
                <p class="text-slate-600 leading-relaxed">
                    Work on real research projects in AI emotion recognition, VR/AR, and human-computer interaction with direct mentorship.
                </p>
                <ul class="mt-4 space-y-2 text-slate-600">
                    <li class="flex items-center">
                        <i class="uil uil-check text-blue-500 mr-2"></i>
                        Machine learning projects
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-blue-500 mr-2"></i>
                        Data analysis & experiments
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-blue-500 mr-2"></i>
                        Technology development
                    </li>
                </ul>
            </div>

            <!-- Professional Growth -->
            <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 h-full">
                <div class="w-16 h-16 bg-amber-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-amber-200 transition-all">
                    <i class="uil uil-award text-2xl text-amber-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Professional Development</h3>
                <p class="text-slate-600 leading-relaxed">
                    Receive mentorship, recommendation letters, and build a strong network in the empathic computing research community.
                </p>
                <ul class="mt-4 space-y-2 text-slate-600">
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-500 mr-2"></i>
                        Expert mentorship
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-500 mr-2"></i>
                        Recommendation letters
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-amber-500 mr-2"></i>
                        Global research network
                    </li>
                </ul>
            </div>

            <!-- Flexible Learning -->
            <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 h-full">
                <div class="w-16 h-16 bg-violet-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-violet-200 transition-all">
                    <i class="uil uil-clock text-2xl text-violet-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Flexible Schedule</h3>
                <p class="text-slate-600 leading-relaxed">
                    Work around your academic commitments with flexible hours and remote collaboration tools designed for global teams.
                </p>
                <ul class="mt-4 space-y-2 text-slate-600">
                    <li class="flex items-center">
                        <i class="uil uil-check text-violet-500 mr-2"></i>
                        Flexible working hours
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-violet-500 mr-2"></i>
                        Remote collaboration
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-violet-500 mr-2"></i>
                        Academic-friendly schedule
                    </li>
                </ul>
            </div>

            <!-- Skill Development -->
            <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 h-full">
                <div class="w-16 h-16 bg-pink-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-pink-200 transition-all">
                    <i class="uil uil-cog text-2xl text-pink-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Technical Skills</h3>
                <p class="text-slate-600 leading-relaxed">
                    Develop cutting-edge technical skills in AI, machine learning, VR/AR development, and advanced research methodologies.
                </p>
                <ul class="mt-4 space-y-2 text-slate-600">
                    <li class="flex items-center">
                        <i class="uil uil-check text-pink-500 mr-2"></i>
                        AI/ML development
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-pink-500 mr-2"></i>
                        VR/AR programming
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-pink-500 mr-2"></i>
                        Research methodologies
                    </li>
                </ul>
            </div>

            <!-- Global Community -->
            <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 h-full">
                <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-indigo-200 transition-all">
                    <i class="uil uil-users-alt text-2xl text-indigo-600"></i>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Global Community</h3>
                <p class="text-slate-600 leading-relaxed">
                    Join a diverse community of researchers and students from over 50 countries working together on innovative projects.
                </p>
                <ul class="mt-4 space-y-2 text-slate-600">
                    <li class="flex items-center">
                        <i class="uil uil-check text-indigo-500 mr-2"></i>
                        International collaboration
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-indigo-500 mr-2"></i>
                        Peer networking
                    </li>
                    <li class="flex items-center">
                        <i class="uil uil-check text-indigo-500 mr-2"></i>
                        Cultural exchange
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="relative md:py-24 py-16 research-areas-grid-bg">
    <div class="container relative">
        <div class="text-center mb-16">
            <h6 class="text-blue-600 text-sm font-bold uppercase mb-2 tracking-wider">Get Started</h6>
            <h2 class="text-4xl font-bold text-slate-900 mb-6">
                Ready to Join Our
                <span class="text-blue-600">Research Team?</span>
            </h2>
            <p class="text-slate-600 text-lg mb-12 max-w-3xl mx-auto">
                Take the first step towards advancing your research career. Apply now and start collaborating with world-class researchers.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <!-- Application Form -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border border-slate-100 h-full flex flex-col">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-emerald-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="uil uil-edit text-2xl text-emerald-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Apply Now</h3>
                    <p class="text-slate-600">
                        Fill out our application form to get started. We'll review your application and contact you within a few weeks.
                    </p>
                </div>
                <div class="text-center flex-1 flex flex-col justify-end">
                    <a href="https://forms.google.com/apply-virtual-internship" target="_blank" class="inline-flex items-center justify-center w-full px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1">
                        <i class="uil uil-external-link-alt mr-2"></i>
                        Complete Application Form
                    </a>
                    <p class="text-slate-500 text-sm mt-3">
                        Takes about 10 minutes to complete
                    </p>
                </div>
            </div>

            <!-- Explore Projects -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 border border-slate-100 h-full flex flex-col">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="uil uil-search text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Explore Projects</h3>
                    <p class="text-slate-600">
                        Discover our current research projects and see where your interests and skills could contribute.
                    </p>
                </div>
                <div class="text-center flex-1 flex flex-col justify-end">
                    <a href="{{ url('/research/projects') }}" class="inline-flex items-center justify-center w-full px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1">
                        <i class="uil uil-arrow-right mr-2"></i>
                        View Current Projects
                    </a>
                    <p class="text-slate-500 text-sm mt-3">
                        Browse 20+ active research projects
                    </p>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="text-center mt-16">
            <div class="bg-white rounded-xl shadow-lg p-8 max-w-2xl mx-auto border border-slate-100">
                <h4 class="text-xl font-semibold text-slate-900 mb-6">Application Process</h4>
                <div class="grid md:grid-cols-3 gap-6 text-center">
                    <div>
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                            <span class="font-bold">1</span>
                        </div>
                        <p class="text-slate-600 text-sm">Submit Application</p>
                    </div>
                    <div>
                        <div class="w-12 h-12 bg-violet-100 text-violet-600 rounded-full flex items-center justify-center mx-auto mb-3">
                            <span class="font-bold">2</span>
                        </div>
                        <p class="text-slate-600 text-sm">Interview & Assessment</p>
                    </div>
                    <div>
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-3">
                            <span class="font-bold">3</span>
                        </div>
                        <p class="text-slate-600 text-sm">Start Collaboration</p>
                    </div>
                </div>
            </div>

            <p class="text-slate-600 text-lg mt-8">
                Questions? <a href="{{ url('/contact') }}" class="text-blue-600 hover:text-blue-700 underline font-semibold">Contact us</a> for more information.
            </p>
        </div>
    </div>
</section>

@endsection