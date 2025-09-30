<!-- Start Footer -->
<footer class="footer bg-dark-footer dark:bg-gray-900 relative text-gray-200 dark:text-gray-200">
    <div class="container relative">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="{{ url('/') }}" class="text-[22px] focus:outline-none">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Empathic Computing" class="h-8">
                            </a>
                            <p class="mt-6 text-gray-300">
                                Advancing Human-Computer Interaction Research through empathetic and intuitive computing systems that understand and respond to human needs.
                            </p>
                            <ul class="list-none mt-6">
                                <li class="inline"><a href="#" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600"><i data-feather="facebook" class="size-4"></i></a></li>
                                <li class="inline ms-1"><a href="#" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600"><i data-feather="instagram" class="size-4"></i></a></li>
                                <li class="inline ms-1"><a href="#" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600"><i data-feather="twitter" class="size-4"></i></a></li>
                                <li class="inline ms-1"><a href="#" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600"><i data-feather="linkedin" class="size-4"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="lg:col-span-2 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Research</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="{{ url('/research/projects') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Projects</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/research/publications') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Publications</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/research/areas') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Research Areas</a></li>
                            </ul>
                        </div><!--end col-->
                        
                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Team</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="{{ url('/team/faculty') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Faculty</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/team/students') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Students</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/team/collaborators') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Collaborators</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Quick Links</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="{{ url('/about') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> About</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/news') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> News</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/events') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Events</a></li>
                                <li class="mt-[10px]"><a href="{{ url('/contact') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Contact</a></li>
                            </ul>
                        </div><!--end col-->

                    </div><!--end grid-->
                </div><!--end -->
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container relative text-center">
            <div class="grid md:grid-cols-2 items-center">
                <div class="md:text-start text-center">
                    <p class="mb-0 text-gray-300">© <script>document.write(new Date().getFullYear())</script> Empathic Computing Research Lab. All rights reserved.</p>
                </div>

                <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                    <li class="inline"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">Privacy</a></li>
                    <li class="inline mt-[10px] md:mt-0 md:ms-1"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">Terms</a></li>
                </ul><!--end icon-->
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- End Footer -->