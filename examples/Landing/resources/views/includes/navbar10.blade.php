<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky bg-white dark:bg-slate-900">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo-dark.png') }}" class="inline-block dark:hidden" alt="">
            <img src="{{ asset('assets/images/logo-light.png') }}" class="hidden dark:inline-block" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="dropdown inline-block relative me-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle text-[20px]" type="button">
                    <i class="uil uil-search align-middle"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute overflow-hidden end-0 m-0 mt-4 z-10 w-52 rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <div class="relative">
                        <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                        <input type="text" class="form-input h-9 pe-10 px-3 sm:w-44 w-36 border-0 focus:outline-none" name="s" id="searchItem" placeholder="Search...">
                    </div>
                </div>
            </li>

            <li class="dropdown inline-block relative">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white" type="button">
                    <i class="mdi mdi-cart"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-60 rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <ul class="py-3 text-start" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                <span class="flex items-center">
                                    <img src="{{ asset('assets/images/shop/items/s1.jpg') }}" class="rounded shadow-sm dark:shadow-gray-800 w-9" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">T-shirt (M)</span>
                                        <span class="block text-sm text-slate-400">$320 X 2</span>
                                    </span>
                                </span>

                                <span class="font-semibold">$640</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                <span class="flex items-center">
                                    <img src="{{ asset('assets/images/shop/items/s2.jpg') }}" class="rounded shadow-sm dark:shadow-gray-800 w-9" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">Bag</span>
                                        <span class="block text-sm text-slate-400">$50 X 5</span>
                                    </span>
                                </span>

                                <span class="font-semibold">$250</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                <span class="flex items-center">
                                    <img src="{{ asset('assets/images/shop/items/s3.jpg') }}" class="rounded shadow-sm dark:shadow-gray-800 w-9" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">Watch (Men)</span>
                                        <span class="block text-sm text-slate-400">$800 X 1</span>
                                    </span>
                                </span>

                                <span class="font-semibold">$800</span>
                            </a>
                        </li>

                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>

                        <li class="flex items-center justify-between py-1.5 px-4">
                            <h6 class="font-semibold mb-0">Total($):</h6>
                            <h6 class="font-semibold mb-0">$1690</h6>
                        </li>

                        <li class="py-1.5 px-4">
                            <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white">View Cart</a>
                            <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white">Checkout</a>
                            <p class="text-sm text-slate-400 mt-1">*T&C Apply</p>
                        </li>
                
                    </ul>
                </div>
            </li>

            <li class="inline-block">
                <a href="javascript:void(0)" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white" onclick="WishList.showModal()">
                    <i class="mdi mdi-heart"></i>
                </a>
            </li>
    
            <li class="dropdown inline-block relative">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white" type="button">
                    <i class="mdi mdi-account"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <ul class="py-2 text-start" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="{{ url('/shop-account') }}" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-user align-middle me-1"></i> Account</a>
                        </li>
                        <li>
                            <a href="{{ url('/shop-cart') }}" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-clipboard-notes align-middle me-1"></i> Order History</a>
                        </li>
                        <li>
                            <a href="{{ url('/shop-checkout') }}" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-arrow-circle-down align-middle me-1"></i> Download</a>
                        </li>
                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                        <li>
                            <a href="{{ url('/auth-login') }}" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-sign-out-alt align-middle me-1"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu">
                <li><a href="{{ url('/index-shop') }}" class="sub-menu-item">Home</a></li>

                <li><a href="{{ url('/shop-about') }}" class="sub-menu-item">About Us</a></li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Shop</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('/shop-grid') }}" class="sub-menu-item">Product Grid</a></li>
                        <li><a href="{{ url('/shop-grid-two') }}" class="sub-menu-item">Product Grid Two</a></li>
                        <li><a href="{{ url('/shop-item-detail') }}" class="sub-menu-item">Product Detail</a></li>
                        <li><a href="{{ url('/shop-cart') }}" class="sub-menu-item">Shop Cart</a></li>
                        <li><a href="{{ url('/shop-checkout') }}" class="sub-menu-item">Checkout</a></li>
                        <li><a href="{{ url('/shop-account') }}" class="sub-menu-item">My Account</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('/auth-login') }}" class="sub-menu-item">Login</a></li>
                        <li><a href="{{ url('/auth-signup') }}" class="sub-menu-item">Signup</a></li>
                        <li><a href="{{ url('/auth-re-password') }}" class="sub-menu-item">Reset Password</a></li>
                        <li><a href="{{ url('/auth-lock-screen') }}" class="sub-menu-item">Lock Screen</a></li>
                        <li><a href="{{ url('/page-comingsoon') }}" class="sub-menu-item">Coming Soon</a></li>
                        <li><a href="{{ url('/page-maintenance') }}" class="sub-menu-item">Maintenance</a></li>
                        <li><a href="{{ url('/page-error') }}" class="sub-menu-item">Error</a></li>
                        <li><a href="{{ url('/page-thankyou') }}" class="sub-menu-item">Thank you</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Blog</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('/blog') }}" class="sub-menu-item">Blogs</a></li>
                        <li><a href="{{ url('/blog-sidebar') }}" class="sub-menu-item">Blogs & Sidebar</a></li>
                        <li><a href="{{ url('/blog-detail') }}" class="sub-menu-item">Blog Detail</a></li>
                    </ul>
                </li>
        
                <li><a href="{{ url('/contact-two') }}" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->