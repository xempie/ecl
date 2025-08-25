@extends('layouts.main')

@section('title', 'Empathic Computing Research Lab - Contact Us | Get in Touch with Our Research Team')

@section('description', 'Contact the Empathic Computing Research Lab at University of South Australia. Reach out for research collaborations, inquiries, or to join our innovative team.')

@section('keywords', 'contact us, empathic computing lab, University of South Australia, research collaboration, contact information, Mawson Lakes campus')

@section('content')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/contacts/contacts.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-3 text-3xl leading-normal font-medium text-white">Contact Us</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Ready to collaborate, join our research, or learn more about empathic computing? We'd love to hear from you.</p>
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
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Contact Us</li>
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

<!-- Contact Information & Form Section -->
<section class="relative md:py-24 py-16 bg-white">
    <div class="container relative">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-16">
            <!-- Left Side - Contact Information -->
            <div>
                <div class="mb-12">
                    <h6 class="text-emerald-600 text-sm font-bold uppercase mb-2 tracking-wider">Contact Information</h6>
                    <h2 class="text-4xl font-bold text-slate-900 mb-6">
                        Visit Our 
                        <span class="text-emerald-600">Research Lab</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-8">
                        Located at the University of South Australia's Mawson Lakes Campus, our state-of-the-art research facilities are open for collaboration, visits, and academic partnerships.
                    </p>
                </div>

                <!-- Contact Details -->
                <div class="space-y-8">
                    <!-- Address -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center">
                            <i class="uil uil-map-marker text-2xl text-emerald-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">Our Address</h3>
                            <p class="text-slate-600 leading-relaxed">
                                School of Information Technology and Mathematical Sciences<br>
                                University of South Australia<br>
                                Mawson Lakes Campus<br>
                                Mawson Lakes, SA 5095<br>
                                Australia
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center">
                            <i class="uil uil-envelope text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">Email Us</h3>
                            <p class="text-slate-600 mb-2">
                                For general inquiries, research collaboration, or academic partnerships:
                            </p>
                            <a href="mailto:info@empathiccomputing.org" class="text-emerald-600 font-semibold hover:text-emerald-700 transition-colors">
                                info@empathiccomputing.org
                            </a>
                        </div>
                    </div>

                    <!-- Research Areas -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-14 h-14 bg-violet-100 rounded-xl flex items-center justify-center">
                            <i class="uil uil-brain text-2xl text-violet-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">Research Focus</h3>
                            <p class="text-slate-600 leading-relaxed">
                                Empathic Computing, AI Emotion Recognition, Virtual Reality, Augmented Reality, Human-Computer Interaction, and Collaborative Interfaces.
                            </p>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center">
                            <i class="uil uil-clock text-2xl text-amber-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">Office Hours</h3>
                            <p class="text-slate-600 leading-relaxed">
                                Monday - Friday: 9:00 AM - 5:00 PM (ACST)<br>
                                Please email ahead for research facility visits and meetings.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="mt-12 p-6 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                    <h4 class="font-semibold text-slate-900 mb-4">Quick Actions</h4>
                    <div class="space-y-3">
                        <a href="{{ route('research') }}" class="flex items-center text-emerald-600 hover:text-emerald-700 transition-colors">
                            <i class="uil uil-flask text-lg mr-2"></i>
                            <span>Explore Our Research</span>
                        </a>
                        <a href="{{ route('research.projects') }}" class="flex items-center text-emerald-600 hover:text-emerald-700 transition-colors">
                            <i class="uil uil-folder text-lg mr-2"></i>
                            <span>View Active Projects</span>
                        </a>
                        <a href="{{ route('team') }}" class="flex items-center text-emerald-600 hover:text-emerald-700 transition-colors">
                            <i class="uil uil-users-alt text-lg mr-2"></i>
                            <span>Meet Our Team</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side - Contact Form -->
            <div>
                <div class="bg-slate-50 rounded-2xl p-8">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Send Us a Message</h3>
                        <p class="text-slate-600">
                            Whether you're interested in research collaboration, joining our team, or have general inquiries, we'd love to hear from you.
                        </p>
                    </div>

                    <form class="space-y-6" method="POST" action="{{ route('contact') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Name & Email Row -->
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors" placeholder="Your full name">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors" placeholder="your.email@example.com">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-slate-700 mb-2">Subject *</label>
                            <select id="subject" name="subject" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors">
                                <option value="">Select inquiry type</option>
                                <option value="research-collaboration">Research Collaboration</option>
                                <option value="academic-partnership">Academic Partnership</option>
                                <option value="job-application">Job Application</option>
                                <option value="student-inquiry">Student Inquiry</option>
                                <option value="media-inquiry">Media Inquiry</option>
                                <option value="general-inquiry">General Inquiry</option>
                            </select>
                        </div>

                        <!-- Resume Upload (Optional) -->
                        <div>
                            <label for="resume" class="block text-sm font-medium text-slate-700 mb-2">Resume/CV (Optional)</label>
                            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors">
                            <p class="text-xs text-slate-500 mt-1">PDF, DOC, or DOCX files only. Max size: 5MB</p>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors resize-none" placeholder="Please describe your inquiry, research interests, or how we can help you..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="w-full px-8 py-4 bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-700 hover:to-emerald-800 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl">
                                Send Message
                                <i class="uil uil-message ml-2"></i>
                            </button>
                        </div>

                        <!-- Privacy Notice -->
                        <div class="text-xs text-slate-500 text-center">
                            By submitting this form, you agree to our privacy policy. We will only use your information to respond to your inquiry.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location & Directions Section -->
<section class="relative md:py-24 py-16 publications-diagonal-bg">
    <div class="container relative">
        <div class="text-center mb-16">
            <h6 class="text-blue-600 text-sm font-bold uppercase mb-2 tracking-wider">Find Us</h6>
            <h2 class="text-4xl font-bold text-slate-900 mb-6">
                Visit Our 
                <span class="text-blue-600">Campus Location</span>
            </h2>
            <p class="text-slate-600 max-w-3xl mx-auto text-lg">
                Our research lab is located at the University of South Australia's modern Mawson Lakes Campus, featuring state-of-the-art facilities and collaborative research spaces.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 grid-cols-1 gap-16 items-center">
            <!-- Left - Map/Image -->
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('assets/images/contacts/contacts.jpg') }}" class="w-full h-96 object-cover" alt="University of South Australia Mawson Lakes Campus">
                    <div class="absolute inset-0 bg-gradient-to-tr from-emerald-600/30 to-blue-600/30"></div>
                    
                    <!-- Location Pin Overlay -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-12 h-12 bg-emerald-500 rounded-full flex items-center justify-center shadow-lg animate-pulse">
                            <i class="uil uil-map-marker text-white text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right - Directions & Info -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-6">Getting to Our Lab</h3>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                            <i class="uil uil-car text-emerald-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">By Car</h4>
                            <p class="text-slate-600">
                                The campus is easily accessible via the Northern Expressway. Free parking is available on campus for visitors.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="uil uil-bus text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">Public Transport</h4>
                            <p class="text-slate-600">
                                Multiple bus routes service the campus. The nearest train station is Mawson Lakes Interchange.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-violet-100 rounded-full flex items-center justify-center">
                            <i class="uil uil-building text-violet-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">Building Location</h4>
                            <p class="text-slate-600">
                                Look for the Mawson Lakes Campus main building. Our lab is located in the School of Information Technology and Mathematical Sciences wing.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-6 bg-white rounded-xl shadow-lg border-l-4 border-emerald-500">
                    <h4 class="font-semibold text-slate-900 mb-2">Planning a Visit?</h4>
                    <p class="text-slate-600 mb-4">
                        We recommend scheduling visits in advance to ensure our research team can provide you with the best experience and facility tour.
                    </p>
                    <a href="mailto:info@empathiccomputing.org?subject=Campus Visit Request" class="text-emerald-600 font-semibold hover:text-emerald-700 transition-colors">
                        Schedule Your Visit →
                    </a>
                </div>
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
</style>
@endpush