<!-- Top Header -->
<div class="top-header">
    <div class="header-bar flex justify-between">
        <div class="flex items-center space-x-1">
            <!-- Logo -->
            <a href="#" class="xl:hidden block me-2">
                <img src="{{ asset('assets/images/logo-icon-32.png') }}" class="md:hidden block" alt="">
                <span class="md:block hidden">
                    <img src="{{ asset('assets/images/logo-dark.png') }}" class="inline-block dark:hidden" alt="">
                    <img src="{{ asset('assets/images/logo-light.png') }}" class="hidden dark:inline-block" alt="">
                </span>
            </a>
            <!-- Logo -->

            <!-- show or close sidebar -->
            <a id="close-sidebar" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-full" href="javascript:void(0)">
                <i data-feather="menu" class="size-4"></i>
            </a>
            <!-- show or close sidebar -->

            <!-- Searchbar -->
            <div class="ps-1.5">
                <div class="form-icon relative sm:block hidden">
                    <i class="uil uil-search absolute top-1/2 -translate-y-1/2 start-3"></i>
                    <input type="text" class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-3xl outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" name="s" id="searchItem" placeholder="Search members, publications, projects...">
                </div>
            </div>
            <!-- Searchbar -->
        </div>

        <ul class="list-none mb-0 space-x-1">


            <!-- User/Profile Dropdown -->
            <li class="dropdown inline-block relative">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                    <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-full"><img src="{{ asset('assets/images/client/05.jpg') }}" class="rounded-full" alt=""></span>
                    <span class="font-semibold text-[16px] ms-1 sm:inline-block hidden">{{ auth()->user()->name ?? 'User' }}</span>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                    <ul class="py-2 text-start">
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="w-full text-left block font-medium py-1 px-4 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white">
                                    <i class="uil uil-sign-out-alt me-2"></i>Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </li><!--end dropdown-->
            <!-- User/Profile Dropdown -->
        </ul>
    </div>
</div>
<!-- Top Header -->