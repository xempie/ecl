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

                <!-- Contact Details -->
                <div class="space-y-8">
                    <!-- Address -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center">
                            <i class="uil uil-map-marker text-2xl text-emerald-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">Our Locations</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-1">Auckland Lab</h4>
                                    <p class="text-slate-600 leading-relaxed">
                                        Human Interface Technology Laboratory<br>
                                        University of Auckland<br>
                                        Building 408, 38 Princes Street<br>
                                        Auckland 1010, New Zealand
                                    </p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-800 mb-1">Adelaide Lab</h4>
                                    <p class="text-slate-600 leading-relaxed">
                                        School of Information Technology and Mathematical Sciences<br>
                                        University of South Australia<br>
                                        Mawson Lakes Campus<br>
                                        Mawson Lakes, SA 5095, Australia
                                    </p>
                                </div>
                            </div>
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
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors" style="border-color: #ccc;" placeholder="Your full name">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors" style="border-color: #ccc;" placeholder="your.email@example.com">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-slate-700 mb-2">Subject *</label>
                            <select id="subject" name="subject" required class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors" style="border-color: #ccc;">
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
                            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors" style="border-color: #ccc;">
                            <p class="text-xs text-slate-500 mt-1">PDF, DOC, or DOCX files only. Max size: 5MB</p>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors resize-none" style="border-color: #ccc;" placeholder="Please describe your inquiry, research interests, or how we can help you..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="w-full px-8 py-4 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl" style="background: linear-gradient(to right, #059669, #047857); border: none;" onmouseover="this.style.background='linear-gradient(to right, #047857, #065f46)'" onmouseout="this.style.background='linear-gradient(to right, #059669, #047857)'">
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


@endsection

@push('styles')
<style>
.animation-delay-2000 {
    animation-delay: 2s;
}
</style>
@endpush