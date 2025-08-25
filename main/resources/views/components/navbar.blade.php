<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky h-[86px]">
    <div class="container relative h-full flex items-center">
        <!-- Logo container-->
        <a class="logo" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Empathic Computing" class="h-16 w-auto">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle - Only show on mobile/tablet -->
                <a class="navbar-toggle lg:hidden" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-light">
                <li><a href="{{ url('/') }}" class="sub-menu-item">Home</a></li>
        
                <li><a href="{{ url('/about') }}" class="sub-menu-item">About</a></li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Research</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('/research/projects') }}" class="sub-menu-item">Projects</a></li>
                        <li><a href="{{ url('/research/publications') }}" class="sub-menu-item">Publications</a></li>
                        <li><a href="{{ url('/research/areas') }}" class="sub-menu-item">Research Areas</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Team</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('/team/faculty') }}" class="sub-menu-item">Faculty</a></li>
                        <li><a href="{{ url('/team/students') }}" class="sub-menu-item">Students</a></li>
                        <li><a href="{{ url('/team/collaborators') }}" class="sub-menu-item">Collaborators</a></li>
                    </ul>
                </li>

                <li><a href="{{ url('/news') }}" class="sub-menu-item">News</a></li>

                <li><a href="{{ url('/events') }}" class="sub-menu-item">Events</a></li>

                <li><a href="{{ url('/contact') }}" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->