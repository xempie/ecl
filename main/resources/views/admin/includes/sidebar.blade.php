<!-- sidebar-wrapper -->
<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}" class="flex items-center">
                <i class="uil uil-flask text-2xl text-white me-2"></i>
                <span class="text-white font-bold text-lg">Lab Admin</span>
            </a>
        </div>

        <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
            <li class="">
                <a href="{{ url('/labadmin') }}"><i class="uil uil-chart-line me-2"></i>Dashboard</a>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-users-alt me-2"></i>Team Management</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('admin.members') }}">View Members</a></li>
                        <li><a href="{{ route('admin.members.create') }}">Add New Member</a></li>                        
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-book-alt me-2"></i>Publications</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/labadmin/publications') }}">All Publications</a></li>
                        <li><a href="{{ url('/labadmin/publications/create') }}">Add Publication</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-folder-open me-2"></i>Research Projects</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/labadmin/projects') }}">All Projects</a></li>
                        <li><a href="{{ url('/labadmin/projects/create') }}">Add Project</a></li>                        
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-tag-alt me-2"></i>Manage Topics</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('admin.categories') }}">All Research Topics</a></li>
                        <li><a href="{{ route('admin.categories.create') }}">Add Research Topic</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-newspaper me-2"></i>News & Events</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/labadmin/news') }}">All News</a></li>
                        <li><a href="{{ url('/labadmin/news/create') }}">Add News</a></li>
                        <li><a href="{{ url('/labadmin/events') }}">Events</a></li>
                        <li><a href="{{ url('/labadmin/events/create') }}">Add Event</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-envelope me-2"></i>Contact Management</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/labadmin/contact-messages') }}">Contact Messages</a></li>
                        <li><a href="{{ url('/labadmin/contact-settings') }}">Contact Settings</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-setting me-2"></i>Website Settings</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/labadmin/settings/general') }}">General Settings</a></li>
                        <li><a href="{{ url('/labadmin/settings/homepage') }}">Homepage Content</a></li>
                        <li><a href="{{ url('/labadmin/settings/about') }}">About Page</a></li>
                        <li><a href="{{ url('/labadmin/settings/social-media') }}">Social Media</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-user me-2"></i>User Management</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/labadmin/users') }}">All Users</a></li>
                        <li><a href="{{ url('/labadmin/users/create') }}">Add User</a></li>
                        <li><a href="{{ url('/labadmin/roles-permissions') }}">Roles & Permissions</a></li>
                    </ul>
                </div>
            </li>


            <li class="relative lg:m-8 m-6 px-8 py-10 rounded-lg bg-gradient-to-b to-transparent from-blue-800 text-center">
                <span class="relative z-10">
                    <span class="text-xl font-bold h5 text-white">Lab Admin Panel</span>

                    <span class="text-blue-200 mt-3 mb-5 !block">Empathic Computing Research Lab Management System</span>

                    <a href="../" target="_blank" class="py-2 px-5 !block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-blue-500/20 hover:bg-blue-500 border-blue-500/30 hover:border-blue-500 text-white rounded-md">View Website</a>
                </span>
    
                <i class="uil uil-flask text-8xl absolute top-1/2 -translate-y-1/2 start-0 end-0 mx-auto text-center opacity-10 text-white"></i>
            </li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>
<!-- sidebar-wrapper  -->